<div id="added_course_{{$new_course_num}}">
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
        border-radius: 5px;" type="button" onclick="RemoveAddedItem('added_course_{{$new_course_num}}')">-
            </button>
        </div>
    </div>
    <div class="wpforms-field-container">
        <div id="wpforms-568-field_1-container"
             class="wpforms-field wpforms-field-text" data-field-id="1">
            <label class="wpforms-field-label"
                   for="wpforms-568-field_1">Course name</label><input
                type="text" id="wpforms-568-field_1"
                class="wpforms-field-large" name="course_{{$new_course_num}}['course_name_{{$cv_lang}}']"
                placeholder="Course name">
        </div>
        <div id="wpforms-568-field_2-container"
             class="wpforms-field wpforms-field-text" data-field-id="2">
            <label class="wpforms-field-label"
                   for="wpforms-568-field_2">The entity responsible for
                the course</label><input type="text"
                                         id="wpforms-568-field_2"
                                         class="wpforms-field-large"
                                         name="course_{{$new_course_num}}['trainer_{{$cv_lang}}']"
                                         placeholder="The entity responsible for the course">
        </div>
        <div class="dates_container">
            <div id="wpforms-568-field_3-container"
                 class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                 data-field-id="3">
                <label class="wpforms-field-label"
                       for="wpforms-568-field_3">{{__('START DATE')}}</label>
                <div class="wpforms-datepicker-wrap">
                    <input type="date" id="wpforms-568-field_3"
                           class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                           data-date-format="m/d/Y"
                           data-disable-past-dates="0" data-input="true"
                           input_name="course_start_date"
                           course_num="{{$new_course_num}}"
                           name="course_{{$new_course_num}}['start_date']">
                </div>
            </div>
            <div id="wpforms-568-field_4-container"
             class="wpforms-field wpforms-field-date-time wpforms-one-half"
             data-field-id="4">
            <label class="wpforms-field-label"
                   for="wpforms-568-field_4">END DATE</label>
            <div class="wpforms-datepicker-wrap">
                <input type="date" id="wpforms-568-field_4"
                       class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                       data-date-format="m/d/Y"
                       data-disable-past-dates="0" data-input="true"
                       input_name="course_end_date"
                       course_num="{{$new_course_num}}"
                       name="course_{{$new_course_num}}['end_date']">
            </div>
        </div>
        </div>
    </div>
</div>
