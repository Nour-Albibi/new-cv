<div class="wpforms-field-container">
    <div id="wpforms-488-field_1-container"
         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
         data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-488-field_1">{{__('JOB TITLE')}}</label><input
            type="text" id="wpforms-488-field_1"
            class="wpforms-field-large" name="work_{{$new_work_num}}[job_title_{{$lang}}]"
            placeholder="JOB TITLE">
    </div>
    <div id="wpforms-488-field_2-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-488-field_2">{{__('EMPLOYER')}}</label><input
            type="text" id="wpforms-488-field_2"
            class="wpforms-field-large" name="work_{{$new_work_num}}[employeer_{{$lang}}]"
            placeholder="EMPLOYER">
    </div>
    <div id="wpforms-488-field_3-container"
         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-488-field_3">{{__('CITY/TOWN')}}</label><input
            type="text" id="wpforms-488-field_3"
            class="wpforms-field-large" name="work_{{$new_work_num}}[city_{{$lang}}]"
            placeholder="CITY/TOWN">
    </div>
    <div id="wpforms-488-field_4-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-488-field_4">{{__('COUNTY')}}</label>
        <input
            type="text" id="wpforms-488-field_4"
            class="wpforms-field-large" name="work_{{$new_work_num}}[country_{{$lang}}]"
            placeholder="COUNTY">
    </div>
    <div id="wpforms-488-field_5-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
         data-field-id="5">
        <label class="wpforms-field-label"
               for="wpforms-488-field_5">{{__('START DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-488-field_5"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="work_{{$new_work_num}}[start_date]"><a
                title="Clear Date" data-clear
                class="wpforms-datepicker-clear"
                style="display:none;"></a>
        </div>
    </div>
    <div id="wpforms-488-field_6-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="6">
        <label class="wpforms-field-label"
               for="wpforms-488-field_6">{{__('END DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-488-field_6"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="work_{{$new_work_num}}[end_date]"><a
                title="Clear Date" data-clear
                class="wpforms-datepicker-clear"
                style="display:none;"></a>
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
        <textarea class="wpforms-field-large" name="work_{{$new_work_num}}[experience_description_{{$lang}}]" placeholder="{{__('Job Description')}}"></textarea>
    </div>
</div>
