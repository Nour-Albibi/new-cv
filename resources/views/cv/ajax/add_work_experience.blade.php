<script src="https://cdn.tiny.cloud/1/8gvsyw0ovfyq7awcszb8qt4133wzpzvgr4mp1f5yg09jq23f/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>

<x-cv.tiny_editor_js></x-cv.tiny_editor_js>
<div id="added_work_{{$new_work_num}}">
<div id="wpforms-626-field_5-container" class="wpforms-field wpforms-field-html wpforms-two-thirds wpforms-first" data-field-id="5">
    <div id="wpforms-626-field_5">
        <hr>
    </div>
</div>
<div id="wpforms-626-field_6-container"
     class="wpforms-field wpforms-field-html wpforms-one-third"
     data-field-id="6">
    <div id="wpforms-626-field_6">
        <button type="button" style="display: inline-block;
        vertical-align: middle;
        background: #024851;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        padding: 5px;
        border-radius: 5px;" type="button" onclick="RemoveAddedItem('added_work_{{$new_work_num}}')">-
        </button>
    </div>
</div>
<div class="wpforms-field-container">
    <div id="wpforms-488-field_1-container"
         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
         data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-488-field_1">{{__('JOB TITLE')}}</label><input
            type="text" id="wpforms-488-field_1"
            class="wpforms-field-large" name="work_{{$new_work_num}}[job_title_{{$cv_lang}}]"
            placeholder="JOB TITLE">
    </div>
    <div id="wpforms-488-field_2-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-488-field_2">{{__('EMPLOYER')}}</label><input
            type="text" id="wpforms-488-field_2"
            class="wpforms-field-large" name="work_{{$new_work_num}}[employeer_{{$cv_lang}}]"
            placeholder="EMPLOYER">
    </div>
    <div id="wpforms-488-field_3-container"
         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-488-field_3">{{__('CITY/TOWN')}}</label><input
            type="text" id="wpforms-488-field_3"
            class="wpforms-field-large" name="work_{{$new_work_num}}[city_{{$cv_lang}}]"
            placeholder="CITY/TOWN">
    </div>
    <div id="wpforms-488-field_4-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-488-field_4">{{__('COUNTY')}}</label>
        <input
            type="text" id="wpforms-488-field_4"
            class="wpforms-field-large" name="work_{{$new_work_num}}[country_{{$cv_lang}}]"
            placeholder="COUNTY">
    </div>
    <div class="dates_container">
    <div id="wpforms-488-field_5-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
         data-field-id="5">
        <label class="wpforms-field-label"
               for="wpforms-488-field_5">{{__('START DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-488-field_5"
                   class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   work_num="{{$new_work_num}}"
                   input_name="work_start_date"
                   name="work_{{$new_work_num}}[start_date]">
        </div>
    </div>
    <div id="wpforms-488-field_6-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="6">
        <label class="wpforms-field-label"
               for="wpforms-488-field_6">{{__('END DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-488-field_6"
                   class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   work_num="{{$new_work_num}}"
                   input_name="work_end_date"
                   name="work_{{$new_work_num}}[end_date]">
        </div>
    </div>
    </div>
    <div id="wpforms-488-field_7-container"
         class="wpforms-field wpforms-field-checkbox"
         data-field-id="7">
        <ul id="wpforms-488-field_7">
            <li class="choice-1 depth-1">
                <input type="checkbox" id="wpforms-488-field_7_1"
                       name="work_{{$new_work_num}}[current]"
                       value="I currently work here"><label
                    class="wpforms-field-label-inline"
                    for="wpforms-488-field_7_1">{{__('I currently work here')}}</label>
            </li>
        </ul>
    </div>
    <div class="wpforms-field wpforms-field-text">
        <label class="wpforms-field-label"
               for="wpforms-488-field_4">{{__('Job Description')}}</label>
        @php($editor_id="work_".$new_work_num."_editor")
        @php($i=$new_work_num)
        <x-cv.tiny_works_editor id="work_{{$new_work_num}}_editor"
                                class="wpforms-field-large works_textarea"
                                name="work_{{$new_work_num}}[experience_description_{{$cv_lang}}]"
                                :i="$i"
                                :selector="$editor_id"></x-cv.tiny_works_editor>

    </div>
</div>
</div>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62e3f93cf0ce683fcdd5ff7d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
