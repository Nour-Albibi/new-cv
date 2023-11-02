<script>
    tinymce.init({
        selector: 'textarea#{{$selector}}',
        plugins: 'codesample lists  wordcount',
        menubar: '',
        toolbar: 'fontfamily | fontsize | forecolor backcolor  ltr rtl|  bold italic underline  | align lineheight | numlist bullist indent outdent',
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
<textarea id="{{$selector}}" class="wpforms-field-medium skill_content"
          name="content_{{$lang}}">
  {!! $slot ?? '' !!}
</textarea>
