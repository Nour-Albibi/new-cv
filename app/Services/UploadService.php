<?php
namespace App\Services;

class UploadService{
    protected  $monthFolder;
    protected  $full_path='files/uploads/';
    protected $folder_id=0;
    protected $w=200;
    protected $h=200;
    public function __construct()
    {
      $this->initCurrentMonthOfFolder();
      $this->setFullPath();
      $this->checkAndCreateFolderOnDesk();
    }
    public function initCurrentMonthOfFolder(){
       return $this->monthFolder = date('y-m', strtotime(date("Y-m-d h:i:sa"))) ;
    }
    public function setFullPath(){
        return $this->full_path .= $this->monthFolder;
    }
    public  function UploadImageFile($request){
        if($request->hasFile('image')) {

            $image = \Image::make($request->file('image'));
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();

            $destinationPath = public_path('files/uploads/');

            $image->save($destinationPath.$imageName);
//            $fileName = getRandString(10, 0).$file->getClientOriginalExtension();
////            if($file->getClientOriginalExtension()=="svg") $fileName.='.svg';
//            $file->move($this->full_path,$fileName);
            return $imageName;
    }
    }
    public function createThumbnail($imageName,$fileName){
        $file_image=$_SERVER['DOCUMENT_ROOT'].'/'.$this->full_path.'/'.$fileName;
        $destinationPathThumbnail = $_SERVER['DOCUMENT_ROOT'].'/uploads/resize';
        $img = \Image::make($file_image);
        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPathThumbnail.'/'.$imageName);
        return asset('/uploads/resize').'/'.$imageName;
    }
    public function checkAndCreateFolderOnDesk(){
        if (!file_exists($_SERVER['DOCUMENT_ROOT'].'/'.$this->full_path)) {
            mkdir($_SERVER['DOCUMENT_ROOT'].'/'.$this->full_path, '0777',true);
        }
    }
}
