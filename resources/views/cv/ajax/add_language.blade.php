<div id="added_language_{{$new_language_num}}">
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
        border-radius: 5px;" type="button" onclick="RemoveAddedItem('added_language_{{$new_language_num}}')">-
            </button>
        </div>
    </div>
<div class="wpforms-field-container">
    <div id="wpforms-626-field_2-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-626-field_2">{{__('LANGUAGES')}}</label><select
            id="wpforms-626-field_2" class="wpforms-field-large"
            name="language_{{$new_language_num}}[language_id]">
            <option value="">{{__('Select Language')}}</option>
            @foreach($alanguages as $alanguage)
                <option value="{{$alanguage->id}}">{{$alanguage->{"name_".$cv_lang} }}</option>
            @endforeach
        </select>
    </div>
    <div id="wpforms-626-field_3-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-626-field_3">{{__('LEVEL')}}</label><select
            id="wpforms-626-field_3" class="wpforms-field-large"
            name="language_{{$new_language_num}}[level_{{$cv_lang}}]">
            <option value="">{{__('Select Level')}}</option>
            <option value="Beginner">{{__('Beginner')}}</option>
            <option value="Elementary">{{__('Elementary')}}</option>
            <option value="Intermediate">{{__('Intermediate')}}</option>
            <option value="UpperIntermediate">{{__('Upper intermediate')}}</option>
            <option value="Advanced">{{__('Advanced')}}</option>
            <option value="Fluent">{{__('Fluent')}}</option>
            <option value="Native">{{__('Native')}}</option>
        </select>
    </div>
    <div id="wpforms-626-field_4-container"
         class="wpforms-field wpforms-field-text" data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-626-field_4">{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}</label>
        <input type="text" id="wpforms-626-field_4" class="wpforms-field-large"
               name="language_{{$new_language_num}}[information_{{$cv_lang}}]"
               placeholder="{{__('ADDITIONAL INFORMATION (OPTIONAL)')}}">
    </div>
</div>
</div>
