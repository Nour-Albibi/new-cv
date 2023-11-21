var main_path="/company/chat";
var current_company;
function openConversation(){

}
$(document).ready(function(){
    current_company=$('input[name=current_user]').val();
    $('.open_conversation_box').on('click',function (){
        employee_name=$(this).attr('employee_name');
        employee_id=$(this).attr('employee_id');
        $('input[name=to_user]').val(employee_id);
        $('#employee_name').html(employee_name);
        $("#chat_conversation_card").removeClass("d-none");
        $("#load_conversation").html("<i class='fa  fa-spinner' ></i>");
        loadOldConversation(employee_id);
    });
    $('input[name=key]').on('change',function(){
        searchEmployee($(this).val());
    });
});
function loadOldConversation(employee_id){
    $.post(main_path+'/loadOldMessages',{employee_id:employee_id},function (data){
       $("#load_conversation").html(data);
    });
}
function searchEmployee(key){
    $.post(main_path+'/getSearchedContacts',{key:key},function (data){
        $(".chat-list").html(data);
    });
}
