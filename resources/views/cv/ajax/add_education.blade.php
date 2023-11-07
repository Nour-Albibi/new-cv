<div id="added_education_{{$new_edu_num}}">
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
        border-radius: 5px;" type="button" onclick="RemoveAddedItem('added_education_{{$new_edu_num}}')">-
            </button>
        </div>
    </div>
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
               for="wpforms-535-field_3">{{__('QUALIFICATION')}}</label><select
            id="wpforms-535-field_3" class="wpforms-field-large"
            name="education_{{$new_edu_num}}['qualification_id']">
            @foreach($qualifications as $qualification)
                <option value="{{$qualification->id}}" >{{$qualification->{"name_".$cv_lang} }}</option>
            @endforeach
        </select>
    </div>
    <div id="wpforms-535-field_4-container"
         class="wpforms-field wpforms-field-text wpforms-one-half"
         data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-535-field_4">{{__('FIELD OF STUDY')}}</label><input type="text" id="wpforms-535-field_4"
                                class="wpforms-field-large"
                                name="education_{{$new_edu_num}}['field_study_{{$lang}}']"
                                placeholder="{{__('FIELD OF STUDY')}}">
    </div>
    <div id="wpforms-535-field_5-container"
         class="wpforms-field wpforms-field-number"
         data-field-id="5">
        <label class="wpforms-field-label"
               for="wpforms-535-field_5">{{__('HONOURS(optional)')}}</label><input
            type="number" pattern="\d*" id="wpforms-535-field_5"
            class="wpforms-field-large" name="education_{{$new_edu_num}}['honours_{{$lang}}']">
    </div>
    <div class="dates_container">
        <div id="wpforms-535-field_6-container"
             class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
             data-field-id="6">
            <label class="wpforms-field-label"
                   for="wpforms-535-field_6">{{__('START DATE')}}</label>
            <div class="wpforms-datepicker-wrap">
                <input type="date" id="wpforms-535-field_6"
                       class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                       data-date-format="m/d/Y"
                       data-disable-past-dates="0" data-input="true"
                       input_name="education_start_date"
                       education_num="{{$new_edu_num}}"
                       name="education_{{$new_edu_num}}['start_date']">
            </div>
        </div>
        <div id="wpforms-535-field_7-container"
         class="wpforms-field wpforms-field-date-time wpforms-one-half"
         data-field-id="7">
        <label class="wpforms-field-label"
               for="wpforms-535-field_7">{{__('END DATE')}}</label>
        <div class="wpforms-datepicker-wrap">
            <input type="date" id="wpforms-535-field_7"
                   class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                   data-date-format="m/d/Y"
                   data-disable-past-dates="0" data-input="true"
                   input_name="education_end_date"
                   education_num="{{$new_edu_num}}"
                   name="education_{{$new_edu_num}}['end_date']">
        </div>
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
</div>
