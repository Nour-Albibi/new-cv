var audio="";
var main_path="/customer/chat";
document.addEventListener('DOMContentLoaded', function() {
    audio = new Audio("/sounds/notification-2.mp3");}
);
$(function() {
    var NewAudio = document.getElementById("myAudio");
    $channel = 'chat-messages-notification.' + $("#user_id").val();
    Pusher.logToConsole = true;

    Echo.private($channel)
        .notification((n) => {
            console.log('new message');
            console.log(n.company_message);
            $.post(main_path+'/receive', {
                _token: '{{csrf_token()}}',
                message: n.company_message.message
            }).done(function (res) {
                $('#load_conversation > li').last().after(res);
                $(document).scrollTop($(document).height());
            });
            // if (n.order.status == "pending") {
                // update_notifications();
                //   var audio = new Audio('/sounds/notification-2.mp3')
                //  audio.play();
                NewAudio.play();
            // }
            // if (typeof (n.order.restaurant) != "undefined" && current_item_hash != "") {
            //     role_page(n.order, n.order.status);
            // }
        });
});
