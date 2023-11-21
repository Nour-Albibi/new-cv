@foreach($contacts as $contact)
    @if($contact->customer_type==2)
    <li>
        <a href="javascript:void(0)" class="open_conversation_box" image="{{$contact->avatar}}" company_name="{{$contact->first_name.' '.$contact->last_name}}" company_id="{{$contact->id}}">
            <div class="media">
                <div class="align-self-center me-3">
                    <i class="mdi mdi-circle text-success font-size-10"></i>
                </div>
                <div class="align-self-center me-3">
                    <img src="@if(!empty($contact->avatar)){{asset('files/images/'.$contact->avatar)}} @else {{asset('company-assets/images/users/avatar-3.jpg')}} @endif" class="rounded-circle avatar-xs" alt="">
                </div>
                <div class="media-body overflow-hidden">
                    <h5 class="text-truncate font-size-14 mb-1">{{$contact->first_name.' '.$contact->last_name}}</h5>
                    <p class="text-truncate mb-0">{{__('Hey there lets talk on chat')}}</p>
                </div>
                <div class="font-size-11">12 min</div>
            </div>
        </a>
    </li>
    @endif
@endforeach
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var main_path="/customer/chat";
    $(document).ready(function(){
        $('.open_conversation_box').on('click',function (){
            company_name=$(this).attr('company_name');
            company_id=$(this).attr('company_id');
            $('input[name=to_user]').val(company_id);
            $('#employee_name').html(company_id);
            $("#chat_conversation_card").removeClass("d-none");
            $("#load_conversation").html("<i class='fa  fa-spinner' ></i>");
            loadOldConversation(company_id);
        });
    });
    function loadOldConversation(company_id){
        $.post(main_path+'/loadOldMessages',{company_id:company_id},function (data){
            $("#load_conversation").html(data);
        });
    }
</script>
