@extends('company-cp.layouts.app')
@section('title','Chatting')
@section('HeaderSection')
    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>
@endsection
@section('content')
    <input type="hidden" name="current_user" value="{{auth()->guard('company')->user()->id}}"/>
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
                                <div>
                                    <h5 class="font-size-16 mb-3">Online</h5>
                                    <ul class="list-unstyled chat-list">
                                        <li class="active">
                                            <a href="javascript:void(0)" class="open_conversation_box" image="/company-assets/images/users/avatar-2.jpg" employee_name="Steven Franklin" employee_id="2">
                                                <div class="media">
                                                    <div class="align-self-center me-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="align-self-center me-3">
                                                        <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                                                    </div>

                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                                        <p class="text-truncate mb-0">Hey! there I'm available</p>
                                                    </div>
                                                    <div class="font-size-11">05 min</div>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <div class="media">
                                                    <div class="align-self-center me-3">
                                                        <i class="mdi mdi-circle text-success font-size-10"></i>
                                                    </div>
                                                    <div class="avatar-xs align-self-center me-3">
                                                                            <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                                K
                                                                            </span>
                                                    </div>
                                                    <div class="media-body overflow-hidden">
                                                        <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                                        <p class="text-truncate mb-0">This theme is awesome!</p>
                                                    </div>
                                                    <div class="font-size-11">24 min</div>
                                                </div>
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content pb-4">
                            <div class="tab-pane show active">
                                <div>
                                    <h5 class="font-size-16 mb-3">{{__('Contacts')}}</h5>
                                    <ul class="list-unstyled chat-list">
                                     @foreach($employees as $employee)
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
                                                        <p class="text-truncate mb-0">I've finished it! See you so</p>
                                                    </div>
                                                    <div class="font-size-11">12 min</div>
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
                                               placeholder="Enter Message...">
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
    <script src="{{asset('assets/js/chat.js')}}"></script>
    <script>
        var pusher = new Pusher("{{config('broadcasting.connections.pusher.key')}}", {
            cluster: "ap2",
        });
        var channel = pusher.subscribe("public");
        //Receive message
        channel.bind("chat", function (data) {
            $.post('/receive', {
                _token: '{{csrf_token()}}',
                message: data.message
            }).done(function (res) {
                $('.messages > .message').last().after(res);
                $(document).scrollTop($(document).height());
            });
        });
        //Broadcast message
        $('form#send_message_form').submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: "/broadcast",
                method: 'POST',
                headers: {
                    'X-Socket-Id': pusher.connection.socket_id
                },
                data: {
                    _token: '{{csrf_token()}}',
                    message: $('form #message').val()
                }
            }).done(function (res) {
                $('.messages > .message').last().after(res);
                $('form #message').val('');
                $(document).scrollTop($(document).height());
            });
        });
    </script>
@endsection
