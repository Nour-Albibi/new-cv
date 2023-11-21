var audio="";
var main_path="/company/chat";
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
            update_notifications();
            NewAudio.play();
        });
});
function update_notifications(){
    $.ajax({
        method: "POST",
        url: "/company/notifications/getNewCompanyMessagesNotifications",
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        }
    }).done(function(data) {
        $("#notifications_list").html(data);
    });
}
