<div class="row width100 mb86">
    <div class="form-group">
        <label class="input_label width100 "
               style="padding-right:16px;">{{__('Please upload your CV')}}*</label>
        <div class="input">
            <span class="inner_input"></span>
            <div class="box__input">
                <div class="upload_icon"></div>
                <input class="box__file" type="file" name="resume_file" id="file"
                       data-multiple-caption="{count} files selected"/>
                <label class="file" for="file">{{__('Choose a file or Drug it here to upload it')}}</label>
            </div>
            <div class="box__uploading">Uploading…</div>
            <div class="box__success alert-success"><p>{{__('Your CV Uploaded Successfully')}}</p></div>
            <div class="box__error">Error! <span></span>.</div>
        </div>
    </div>
</div>
