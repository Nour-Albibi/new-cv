@if(\Illuminate\Support\Facades\Auth::guard('customer')->check() && !empty(session('show_confirm')))
<div class="modal cv_steps_modal direction-ltr">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal_container">
            <div class="modal-content" aria-modal="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i
                            class="fa fa-close" aria-hidden="true"></i></button>
                </div>
                <div class="modal-body"><h2 class="modal-title-primary">{{__('Welcome back')}} {{auth()->guard('customer')->user()->first_name }}!</h2>
                    <p class="modal-subtitle-primary">{!! __('Continue and finalise the CV you started, or <br> create a brand
                        new one') !!}</p></div>
                <form name="confirm_form" action="{{route('cv.resetDataAndCreateNewCV')}}" method="get" id="confirm_form">
                    @csrf
                    <input type="hidden" name="cv_reset_data" value="create_new">
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary create_new_cv">{{__('Create new')}}</button>
                        <button type="button" class="btn btn-primary continue_create_cv">{{__('Continue')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
