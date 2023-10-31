<div id="added_project_{{$new_project_num}}">
    <div id="wpforms-626-field_5-container" class="wpforms-field wpforms-field-html wpforms-two-thirds wpforms-first"
         data-field-id="5">
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
        border-radius: 5px;" type="button" onclick="RemoveAddedItem('added_project_{{$new_project_num}}')">-
            </button>
        </div>
    </div>
<div class="wpforms-field-container">
    <div id="wpforms-519-field_1-container"
         class="wpforms-field wpforms-field-text" data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-519-field_1">{{__('PROJECT NAME')}}</label><input
            type="text" id="wpforms-519-field_1"
            class="wpforms-field-large" name="project_{{$new_project_num}}[project_name_{{$lang}}]"
            placeholder="{{__('PROJECT NAME')}}">
    </div>
    <div id="wpforms-519-field_3-container"
         class="wpforms-field wpforms-field-text" data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-519-field_3">{{__('DESCRIPTION OF WORK ON THE PROJECT')}}</label>
        <textarea name="project_{{$new_project_num}}[description_{{$lang}}]"  class="wpforms-field-large"
         placeholder="{{__('DESCRIPTION OF WORK ON THE PROJECT')}}"></textarea>
    </div>
    <div id="wpforms-519-field_4-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-519-field_4">START DATE</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-519-field_4"
                   class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   input_name="project_start_date"
                   project_num="{{$new_project_num}}"
                   name="project_{{$new_project_num}}[start_date]">
        </div>
    </div>
    <div id="wpforms-519-field_5-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="5">
        <label class="wpforms-field-label"
               for="wpforms-519-field_5">{{__('END DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-519-field_5"
                   class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   input_name="project_end_date"
                   project_num="{{$new_project_num}}"
                   name="project_{{$new_project_num}}[end_date]">
        </div>
    </div>
</div>
</div>
