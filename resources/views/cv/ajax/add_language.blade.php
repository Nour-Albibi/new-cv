<div class="wpforms-field-container">
    <div id="wpforms-626-field_1-container"
         class="wpforms-field wpforms-field-checkbox"
         data-field-id="1">
        <label class="wpforms-field-label"
               for="wpforms-626-field_1">Select between infographic
            or text format</label>
        <ul id="wpforms-626-field_1">
            <li class="choice-1 depth-1">
                <input type="checkbox" id="wpforms-626-field_1_1"
                       name="wpforms[fields][1][]"
                       value="DISPLAY OPTIONS FOR YOUR LANGUAGE SKILLS"><label
                    class="wpforms-field-label-inline"
                    for="wpforms-626-field_1_1">DISPLAY OPTIONS FOR
                    YOUR LANGUAGE SKILLS</label>
            </li>
        </ul>
    </div>
    <div id="wpforms-626-field_2-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="2">
        <label class="wpforms-field-label"
               for="wpforms-626-field_2">LANGUAGES</label><select
            id="wpforms-626-field_2" class="wpforms-field-large"
            name="language_{{$new_language_num}}['language_id']">
            <option value="1">First Choice</option>
            <option value="2">Second Choice</option>
            <option value="3">Third Choice</option>
        </select>
    </div>
    <div id="wpforms-626-field_3-container"
         class="wpforms-field wpforms-field-select wpforms-field-select-style-classic"
         data-field-id="3">
        <label class="wpforms-field-label"
               for="wpforms-626-field_3">LEVEL</label><select
            id="wpforms-626-field_3" class="wpforms-field-large"
            name="language_{{$new_language_num}}['level_{{$lang}}']">
            <option value="FirstChoice">First Choice</option>
            <option value="SecondChoice">Second Choice</option>
            <option value="ThirdChoice">Third Choice</option>
        </select>
    </div>
    <div id="wpforms-626-field_4-container"
         class="wpforms-field wpforms-field-text" data-field-id="4">
        <label class="wpforms-field-label"
               for="wpforms-626-field_4">ADDITIONAL INFORMATION
            (OPTIONAL)</label><input type="text"
                                     id="wpforms-626-field_4"
                                     class="wpforms-field-large"
                                     name="language_{{$new_language_num}}['information_{{$lang}}']"
                                     placeholder="ADDITIONAL INFORMATION (OPTIONAL)">
    </div>
</div>
