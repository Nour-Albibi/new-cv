<div class="row width100 mb86">
    <div class="form-group">

        <div class="input uploadContainer">
            <form class="box" action="{{route('cv.upload')}}" method="post">
                <span class="inner_input"></span>
                <div class="box__input">
                    <img src="{{asset('files/uploads/'.$addedItem->model->image)}}"  @if(empty($addedItem->model->image)) class="d-none" @endif id="uploaded_im" width="100" height="100"/>
                    @csrf
                    <div class="upload_icon"></div>
                    <input class="box__file" type="file" name="image" id="file"
                           data-multiple-caption="{count} files selected"/>
                    <label class="file" for="file">{{__('Choose a file or Drug it here to upload it')}}</label>
                </div>
                <div class="box__uploading">Uploading…</div>
                <div class="box__success alert-success"><p>{{__('Uploaded Successfully')}}</p></div>
                <div class="box__error">Error! <span></span>.</div>
            </form>
        </div>

    </div>

</div>
