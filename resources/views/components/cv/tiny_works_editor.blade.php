<script>
    tinymce.init({
        selector: '#{{$selector}}',
        plugins: 'codesample lists  wordcount advlist fullscreen',
        menubar: '',
        toolbar: 'undo redo | fontfamily | fontsize | forecolor backcolor  ltr rtl|  bold italic underline  | align lineheight | numlist bullist indent outdent',
        // inline:true
    });
</script>
<style>
    .tox .tox-edit-area__iframe {
        background-color: #fff !important;
    }

    .tox-statusbar {
        display: none !important;
    }

    .tox-toolbar__primary {
        justify-content: space-around;
    }
</style>
<textarea id="{{$selector}}" class="wpforms-field-large work_ed works_textarea"
          name="work_{{$i}}[experience_description_{{$lang}}]">
  {!! $slot ?? '' !!}
</textarea>
