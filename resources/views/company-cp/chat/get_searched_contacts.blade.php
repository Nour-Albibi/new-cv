@foreach($contacts as $contact)
    @if($contact->customer_type==1)
    <li>
        <a href="javascript:void(0)" class="open_conversation_box" image="{{$contact->avatar}}" employee_name="{{$contact->first_name.' '.$contact->last_name}}" employee_id="{{$contact->id}}">
            <div class="media">
                <div class="align-self-center me-3">
                    <i class="mdi mdi-circle text-success font-size-10"></i>
                </div>
                <div class="align-self-center me-3">
                    <img src="@if(!empty($contact->avatar)){{asset('files/'.$contact->avatar)}} @else {{asset('company-assets/images/users/avatar-3.jpg')}} @endif" class="rounded-circle avatar-xs" alt="">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="text-truncate font-size-14 mb-1">{{$contact->first_name.' '.$contact->last_name}}</h5>
                    <p class="text-truncate mb-0">I've finished it! See you so</p>
                </div>
                <div class="font-size-11">12 min</div>
            </div>
        </a>
    </li>
    @endif
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var main_path="http://localhost/cv/public/company";
    $(document).ready(function(){
        $('.open_conversation_box').on('click',function (){
            employee_name=$(this).attr('employee_name');
            employee_id=$(this).attr('employee_id');
            $('#employee_name').html(employee_name);
            $("#chat_conversation_card").removeClass("d-none");
            $("#load_conversation").html("<i class='fa  fa-spinner' ></i>");
            loadOldConversation(employee_id);
        });
    });
    function loadOldConversation(employee_id){
        $.post(main_path+'/loadOldMessages',{employee_id:employee_id},function (data){
            $("#load_conversation").html(data);
        });
    }
</script>
