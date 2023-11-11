<br>
<ul class="uleducation add-list"
    style="margin-top: 55px;list-style: none">
    @foreach($related_skills as $re_skill)
        <li style="margin-bottom: 10px;list-style: none !important;">
            @php($checkedClass="")
{{--            @dd($addedItem->model->customer_cv_skill)--}}
{{--                @foreach($addedItem->model->customer_cv_skill as $addedSkill)--}}
{{--                    @if($addedSkill->id == $re_skill->id)--}}
{{--                        @php($checkedClass="checked")--}}
{{--                    @endif--}}
{{--                @endforeach--}}
            <div class="skills_data {{$checkedClass}}" skill_id="{{$re_skill->id}}" skill_content="{{$re_skill->{"name_".$cv_lang} }}"
                 onclick="addSkillData('{{$re_skill->id}}','{{$re_skill->{"name_".$cv_lang} }}')" type="add"><span
                    class="add-remove"><i class="fas fa-plus-circle"></i></span> {{$re_skill->{"name_".$cv_lang} }}
            </div>
        </li>
    @endforeach
</ul>
