<div class="card">
    <div class="p-4 border-bottom ">
        <div class="row">
            <div class="col-md-4 col-9">
                <h5 class="font-size-15 mb-1 text-truncate">{{$employee->first_name.' '.$employee->last_name}}</h5>
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
            <ul class="list-unstyled" data-simplebar style="max-height: 600px;">
                @foreach($chat_messages as $message)
                    @if($message->from_user==$employee_id)
                        <li>
                            <div class="conversation-list">
                                <div class="media">
                                    <img src="{{asset('files/'.$message->image)}}" class="rounded-circle avatar-xs"
                                         alt="">
                                    <div class="media-body arrow-left ms-3">

                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>

                                        <div class="ctext-wrap">
                                            <div
                                                class="conversation-name">{{$message->sent_from_user->first_name}}</div>
                                            <p>
                                                {{$message->message}}
                                            </p>
                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                {{date('d/m/Y', strtotime($message->created_at))  }}</p>
                                        </div>


                                    </div>
                                </div>

                            </div>
                        </li>
                    @else
                        <li class="right">
                            <div class="conversation-list">

                                <div class="media">


                                    <div class="media-body arrow-right me-3">

                                        <div class="dropdown">

                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Copy</a>
                                                <a class="dropdown-item" href="#">Save</a>
                                                <a class="dropdown-item" href="#">Forward</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="ctext-wrap">
                                            <div
                                                class="conversation-name">{{$message->sent_from_user->first_name}}</div>
                                            <p>
                                                {{$message->message}}
                                            </p>

                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i>
                                                {{date('d/m/Y', strtotime($message->created_at))  }}</p>
                                        </div>


                                    </div>

                                    <img src="{{asset('files/'.$message->image)}}" class="rounded-circle avatar-xs"
                                         alt="">


                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
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
