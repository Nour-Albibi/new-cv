<?php

namespace App\Http\Controllers;

use App\Models\CustomerCv;
use App\Services\CVService;
use App\Services\CVTemplateService;
use App\Services\PackageService;
use App\Services\UploadService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Browsershot\Browsershot;

class CVController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'cvColor' => ['string', 'max:255'],
                'cvTemplate' => ['required'],
            ]);
            Session::put(['chosen_template_id' => $request->cvTemplate, 'chosen_cv_color' => $request->cvColor]);
            return view('cv.start2');
        } else {
            $cvTemplates = CVService::getCVTemplates();
            return view('cv.index', compact('cvTemplates'));
        }
    }

    public function create(Request $request)
    {
        //resetAllSessions();
        if ($request->isMethod('post')) {
            $request->validate([
                'cv_language' => ['required'],
            ]);
            Session::put('chosen_cv_language', $request->cv_language);
        }
        $addedItem=CVService::getCVItem();
        if (Auth::guard('customer')->check() && empty($addedItem)) {
            $customerCV = CustomerCv::where('customer_id', Auth::guard('customer')->user()->id)
                ->where('cv_status', 0)->latest()->first();
             CVService::addStoredCVinCart($customerCV);
            $addedItem=CVService::getCVItem();
        }
        $chosen_template = CVTemplateService::getChosenTemplate();
        return view('cv.create-cv-steps', compact('chosen_template','addedItem'));
    }
    public function resetDataAndCreateNewCV(Request $request){
        try{
            if (Auth::guard('customer')->check()) {
                CVService::ResetCVDataForCreateNew();
                $chosen_template = CVTemplateService::getChosenTemplate();
                return view('cv.create-cv-steps', compact('chosen_template'));
            }else{
                abort(404);
            }
        }catch (\Exception $exception){
            return json_encode($exception->getMessage());
        }
    }
    public function store(Request $request)
    {
        try {
            if ($request->step != null) {
                $data = $request->all();
                $step_num = $request->step;
                Session::put('current_step_num', $step_num);
                $validator = self::ValidateFormDataBasedOnStepNumber($step_num, $data);
                if (!empty($validator) && $validator->fails()) {
                    return false;
                }

                return CVService::storeCVData($step_num, $data);
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public function storeFirstStepDataBeforeLogin(Request $request){
        try {
            if (!Auth::guard('customer')->check()) {
                if (!empty($request->redirect_after_login)) {
                    Session::put(['redirect_after_login' => $request->redirect_after_login]);
                }
                CVService::storeCVData(0,$request->all());
                return redirect()->route('customer.login');
            }
        }catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public function FinaliseCVApplication(Request $request){
        try{
            if($request->step==8){
                if(!Auth::guard('customer')->user()->has_active_subscription())
                    //Auth::guard('customer')->user()->is_exceeded_subscription_limit()
                    //And must check if there is still avalaiblr cv counts if he has active subscription
                    return redirect()->route('getCustomerPackagesPricing');
            }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public static function ValidateFormDataBasedOnStepNumber($step_num, $data)
    {
        switch ($step_num) {
            case 0:
                return Validator::make($data, [
                    'first_name' => 'required|string|min:2|max:255',
                    'surename' => 'required|string|min:2|max:255',
                    'phone' => 'required|string|min:6|max:255',
                    'email' => 'string|email|max:255',
                ]);
            case 1:
                return null;
            default:
                return null;
        }
    }
    public function uploadFile(Request $request){
        try{

            $uploader=new UploadService();
            $uploadedImage=$uploader->UploadImageFile($request);
            return response()->json(['success' => true,'data'=>$uploadedImage], 200);
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public function DownloadCV(CustomerCv $cv){
        $cvFileName=$cv->template->file_name;
//        return view('cv-templates.'.$cvFileName,compact('cv'));
        $pdf = Pdf::loadView('cv-templates.'.$cvFileName.'2',['cv' => $cv]);
        return $pdf->download('CV.pdf');
//        return $pdf->stream('CV.pdf');
    }
    public function PreviewCVinPage(CustomerCv $cv){
        $cvFileName=$cv->template->file_name;
        return view('cv-templates.'.$cvFileName,['cv' => $cv]);
    }
    public function PreviewCV(CustomerCv $cv){
        return view('cv.ajax.cv_modal',['cv'=>$cv])->render();
    }
    public function getCVCard(CustomerCv $cv){
        return view('cv.ajax.cv_card_preview',['cv'=>$cv])->render();
    }
    function screenshotCV() {
        Browsershot::url(url('cv-builder/PreviewCVinPage/32'))
            ->setOption('landscape', true)
            ->windowSize(3840, 2160)
            ->waitUntilNetworkIdle()
            ->setNodeBinary('C:\\nodejs\\node.exe')
            ->save("storage/". 'googlescreenshot.jpg');
    }
}
