<div class="wpforms-field-container">
    <div id="wpforms-535-field_1-container"
         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
         data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-535-field_1">{{__('INSTITUTION NAME')}}</label>
        <input type="text" id="wpforms-535-field_1"
               class="wpforms-field-large"
               name="education_{{$new_edu_num}}['institution_name_{{$lang}}']"
               placeholder="INSTITUTION NAME">
    </div>
    <div id="wpforms-535-field_2-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-535-field_2">CITY /
            COUNTRY</label><input type="text"
                                  id="wpforms-535-field_2"
                                  class="wpforms-field-large"
                                  name="education_{{$new_edu_num}}['city_{{$lang}}']"
                                  placeholder="{{__('City/Country')}}">
    </div>
    <div id="wpforms-535-field_3-container"
         class="wpforms-field wpforms-field-select wpforms-one-half wpforms-first wpforms-field-select-style-classic"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-535-field_3">QUALIFICATION</label><select
            id="wpforms-535-field_3" class="wpforms-field-large"
            name="education_{{$new_edu_num}}['qualification_id']">
            <option value="First Choice">First Choice</option>
            <option value="Second Choice">Second Choice</option>
            <option value="Third Choice">Third Choice</option>
        </select>
    </div>
    <div id="wpforms-535-field_4-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-535-field_4">FIELD OF
            STUDY</label><input type="text" id="wpforms-535-field_4"
                                class="wpforms-field-large"
                                name="education_{{$new_edu_num}}['field_study_{{$lang}}']"
                                value="FIELD OF STUDY">
    </div>
    <div id="wpforms-535-field_5-container"
         class="wpforms-field wpforms-field-number"
         data-field-id="5">
        <label class="wpforms-field-label"
               for="wpforms-535-field_5">HONOURS(optional)</label><input
            type="number" pattern="\d*" id="wpforms-535-field_5"
            class="wpforms-field-large" name="education_{{$new_edu_num}}['honours_{{$lang}}']">
    </div>
    <div id="wpforms-535-field_6-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
         data-field-id="6">
        <label class="wpforms-field-label"
               for="wpforms-535-field_6">START DATE</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-535-field_6"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="education_{{$new_edu_num}}['start_date']"><a
                title="Clear Date" data-clear
                class="wpforms-datepicker-clear"
                style="display:none;"></a>
        </div>
    </div>
    <div id="wpforms-535-field_7-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="7">
        <label class="wpforms-field-label"
               for="wpforms-535-field_7">END DATE</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-535-field_7"
                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   name="education_{{$new_edu_num}}['end_date']"><a
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
                       name="education_{{$new_edu_num}}[current]"
                       value="I currently work here"><label
                    class="wpforms-field-label-inline"
                    for="wpforms-488-field_7_1">{{__('Current')}}</label>
            </li>
        </ul>
    </div>
</div>
