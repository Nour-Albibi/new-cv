@extends('company-cp.layouts.app')
@section('title','Chatting')
@section('HeaderSection')
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
{{--    <script src="{{asset('assets/js/echo.js')}}"></script>--}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .chat-conversation{
            max-height:400px;
            overflow:auto;
        }
    </style>
@endsection
@section('content')
    <input type="hidden" name="current_user" value="11" id="current_user" />
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="d-lg-flex">
        <div class="chat-leftsidebar me-lg-4">
            <div class="card">
                <div class="p-4">
                    <div class="search-box chat-search-box pb-4">
                        <div class="position-relative">
                            <input type="text" class="form-control" name="key" placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon"></i>
                        </div>
                    </div>

                    <div class="chat-leftsidebar-nav">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span>Chat</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content py-4">
                            <div class="tab-pane show active" id="chat">
                            </div>
                        </div>
                        <div class="tab-content pb-4">
                            <div class="tab-pane show active">
                                <div>
                                    <h5 class="font-size-16 mb-3">{{__('Contacts')}}</h5>
                                    <ul class="list-unstyled chat-list">
                                     @foreach($employees as $employee)
                                         @php($employee=$employee->employeesList)
                                        <li>
                                            <a href="javascript:void(0)" class="open_conversation_box" image="{{$employee->avatar}}" employee_name="{{$employee->first_name.' '.$employee->last_name}}" employee_id="{{$employee->id}}">
                                                <div class="media">
                                                    <div class="align-self-center me-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center me-3">
                                                        <img src="@if(!empty($employee->avatar)){{asset('files/'.$employee->avatar)}} @else {{asset('company-assets/images/users/avatar-3.jpg')}} @endif" class="rounded-circle avatar-xs" alt="">
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">{{$employee->first_name.' '.$employee->last_name}}</h5>
                                                        <p class="text-truncate mb-0">{{__('Hey there lets talk on chat')}}</p>
                                                    </div>
                                                    <div class="font-size-11">12 min</div>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <hr>
                                <div style="margin-top:10px;">
                                    <h5 class="font-size-16 mb-3">{{__('Other Contacts')}}</h5>
                                    <ul class="list-unstyled chat-list">
                                        @foreach($suggestedEmployees as $employee)
                                            <li>
                                                <a href="javascript:void(0)" class="open_conversation_box" image="{{$employee->avatar}}" employee_name="{{$employee->first_name.' '.$employee->last_name}}" employee_id="{{$employee->id}}">
                                                    <div class="media">
                                                        <div class="align-self-center me-3">
                                                            <i class="mdi mdi-circle text-success font-size-10"></i>
                                                        </div>
                                                        <div class="align-self-center me-3">
                                                            <img src="@if(!empty($employee->avatar)){{asset('files/'.$employee->avatar)}} @else {{asset('company-assets/images/users/avatar-3.jpg')}} @endif" class="rounded-circle avatar-xs" alt="">
                                                        </div>
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="text-truncate font-size-14 mb-1">{{$employee->first_name.' '.$employee->last_name}}</h5>
                                                            <p class="text-truncate mb-0">{{__('Hey there lets talk on chat')}}</p>
                                                        </div>
                                                        <div class="font-size-11"></div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="w-100 user-chat">
            <div class="card chat_conversation_card d-none" id="chat_conversation_card">
                <div class="p-4 border-bottom ">
                    <div class="row">
                        <div class="col-md-4 col-9">
                            <h5 class="font-size-15 mb-1 text-truncate" id="employee_name">
                            </h5>
                            <p class="text-muted mb-0 text-truncate"><i class="mdi mdi-circle text-success align-middle me-1"></i>
                                Active now</p>
                        </div>
                        <div class="col-md-8 col-3">
                            <ul class="list-inline user-chat-nav text-end mb-0">

                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="chat-conversation p-3">
                        <ul class="list-unstyled" data-simplebar style="max-height: 600px;" id="load_conversation">

                        </ul>
                    </div>
                    <div class="p-3 chat-input-section">
                        <form class="" name="send_message" id="send_message_form">
                            <div class="row">
                                <div class="col">
                                    <div class="position-relative">
                                        <input type="text" class="form-control chat-input" name="message"
                                               placeholder="Enter Message..." id="message">
                                        <div class="chat-input-links">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                                                data-placement="top"
                                                                                title="Emoji"><i
                                                            class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                                                data-placement="top"
                                                                                title="Images"><i
                                                            class="mdi mdi-file-image-outline"></i></a></li>
                                                <li class="list-inline-item"><a href="#" data-bs-toggle="tooltip"
                                                                                data-placement="top"
                                                                                title="Add Files"><i
                                                            class="mdi mdi-file-document-outline"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="submit"
                                            class="btn btn-primary btn-rounded chat-send w-md waves-effect waves-light">
                                        <span class="d-none d-sm-inline-block me-2">Send</span> <i class="mdi mdi-send"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script src="{{asset('company-assets/js/chat.js')}}"></script>
    <script>
        var main_path="/company/chat";
        let current_user_id = $("#current_user").val();
        var pusher = new Pusher("{{config('broadcasting.connections.pusher.key')}}", {
            cluster: "ap2",
        });
        // var channel = pusher.subscribe(`chat-message.${current_user_id}`);
        //Receive message
        Pusher.logToConsole = true;
        setTimeout(() => {
            var current_user_id = $("#current_user").val();
            window.Echo.private(`chat-message.11`)
                .listen('.server.created', (e) => {
                    console.log(e);
                    $.post(main_path+'/receive', {
                        _token: '{{csrf_token()}}',
                        message: data.message
                    }).done(function (res) {
                        $('#load_conversation > li').last().after(res);
                        $(document).scrollTop($(document).height());
                    });
                });
        }, 200);
        {{--channel.bind("chat", function (data) {--}}
        {{--    $.post(main_path+'/receive', {--}}
        {{--        _token: '{{csrf_token()}}',--}}
        {{--        message: data.message--}}
        {{--    }).done(function (res) {--}}
        {{--        $('#load_conversation > li').last().after(res);--}}
        {{--        $(document).scrollTop($(document).height());--}}
        {{--    });--}}
        {{--});--}}
        //Broadcast message
        $('form#send_message_form').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: main_path+"/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{csrf_token()}}',
                    message: $('form#send_message_form #message').val()
                }
            }).done(function (res) {
                $('#load_conversation > li').last().after(res);
                $('form#send_message_form #message').val('')
                $(document).scrollTop($(document).height());
            });
        });
    </script>
@endsection
