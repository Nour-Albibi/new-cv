<div class="wpforms-field-container">
    <div id="wpforms-568-field_1-container"
         class="wpforms-field wpforms-field-text" data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-568-field_1">Course name</label><input
            type="text" id="wpforms-568-field_1"
            class="wpforms-field-large" name="course_{{$new_course_num}}['course_name_{{$lang}}']"
            placeholder="Course name">
    </div>
    <div id="wpforms-568-field_2-container"
         class="wpforms-field wpforms-field-text" data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-568-field_2">The entity responsible for
            the course</label><input type="text"
                                     id="wpforms-568-field_2"
                                     class="wpforms-field-large"
                                     name="course_{{$new_course_num}}['trainer_{{$lang}}']"
                                     placeholder="The entity responsible for the course">
    </div>
    <div id="wpforms-568-field_3-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-568-field_3">START DATE</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-568-field_3"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="course_{{$new_course_num}}['start_date']"><a
                title="Clear Date" data-clear
                class="wpforms-datepicker-clear"
                style="display:none;"></a>
        </div>
    </div>
    <div id="wpforms-568-field_4-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-568-field_4">END DATE</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-568-field_4"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="course_{{$new_course_num}}['end_date']"><a
                title="Clear Date" data-clear
                class="wpforms-datepicker-clear"
                style="display:none;"></a>
        </div>
    </div>
</div>
