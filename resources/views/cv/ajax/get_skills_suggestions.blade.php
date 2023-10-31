<br>
<ul class="uleducation add-list"
    style="margin-top: 55px;list-style: none">
    @foreach($related_skills as $re_skill)
        <li style="margin-bottom: 10px;list-style: none !important;">
           <div class="skills_data" skill_id="{{$re_skill->id}}" skill_content="{{$re_skill->{"name_".$lang} }}"
                onclick="addSkillData('{{$re_skill->id}}','{{$re_skill->{"name_".$lang} }}')" type="add"><span class="add-remove"><i class="fas fa-plus-circle"></i></span> {{$re_skill->{"name_".$lang} }}</div>
        </li>
    @endforeach
</ul>
