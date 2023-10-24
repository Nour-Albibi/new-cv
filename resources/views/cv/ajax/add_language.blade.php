<div class="wpforms-field-container">
    <div id="wpforms-626-field_2-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-626-field_2">{{__('LANGUAGES')}}</label><select
            id="wpforms-626-field_2" class="wpforms-field-large"
            name="language_{{$new_language_num}}[language_id]">
            <option value="1">First Choice</option>
            <option value="2">Second Choice</option>
            <option value="3">Third Choice</option>
        </select>
    </div>
    <div id="wpforms-626-field_3-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-626-field_3">{{__('LEVEL')}}</label><select
            id="wpforms-626-field_3" class="wpforms-field-large"
            name="language_{{$new_language_num}}[level_{{$lang}}]">
            <option value="1" selected>First Choice</option>
            <option value="2">Second Choice</option>
            <option value="3">Third Choice</option>
        </select>
    </div>
    <div id="wpforms-626-field_4-container"
         class="wpforms-field wpforms-field-text" data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-626-field_4">{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}</label>
        <input type="text" id="wpforms-626-field_4" class="wpforms-field-large"
               name="language_{{$new_language_num}}[information_{{$lang}}]"
               placeholder="{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}">
    </div>
</div>
