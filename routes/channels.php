<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('chat-message.{id}', function ($user, $id) {
    // // $id = $user->id;
    // $user= Administrator::find($user->id);
    // return (int) $user->restaurant_id === (int) $restaurant_id;
    // return (int) $user->id === (int) $id;
    return true;
    // auth()->guard('admin')->user()->id
});
Broadcast::channel('chat-messages-notification.{id}', function ($user, $id) {
    // // $id = $user->id;
    // $user= Administrator::find($user->id);
    // return (int) $user->restaurant_id === (int) $restaurant_id;
    // return (int) $user->id === (int) $id;
    return true;
    // auth()->guard('admin')->user()->id
});
Broadcast::channel('cv-view-notification.{id}', function ($user, $id) {
    // // $id = $user->id;
    // $user= Administrator::find($user->id);
    // return (int) $user->restaurant_id === (int) $restaurant_id;
    // return (int) $user->id === (int) $id;
    return true;
    // auth()->guard('admin')->user()->id
});
