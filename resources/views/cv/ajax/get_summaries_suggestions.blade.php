<br>
<ul class="uleducation add-list"
    style="list-style: none">
    @foreach($related_summaries as $re_sm)
        <li style="margin-bottom: 10px;list-style: none !important;">
            <div class="summaries_data" summary_id="{{$re_sm->id}}" summary_content="{{$re_sm->{"content_".$cv_lang} }}"
                 onclick="addSummaryData('{{$re_sm->id}}','{{$re_sm->{"content_".$cv_lang} }}')" type="add"><span class="add-remove"><i class="fas fa-plus-circle"></i></span> {{$re_sm->{"content_".$cv_lang} }}</div>
        </li>
    @endforeach
</ul>
