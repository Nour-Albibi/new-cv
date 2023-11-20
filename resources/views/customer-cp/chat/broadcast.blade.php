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
