<button type="button" class="btn header-item noti-icon waves-effect"
        id="page-header-notifications-dropdown"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="mdi mdi-bell-outline bx-tada"></i>
    <span class="badge bg-danger rounded-pill">{{$notifications->count()}}</span>
</button>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
     aria-labelledby="page-header-notifications-dropdown">
    <div class="p-3">
        <div class="row align-items-center">
            <div class="col">
                <h6 class="m-0"> {{ __('Notifications') }} </h6>
            </div>
            <div class="col-auto">
                <a href="{{route('customer.viewedmyCV')}}" class="small"> {{ __('View All') }}</a>
            </div>
        </div>
    </div>
    <div data-simplebar style="max-height: 230px;" >
        @if($notifications->count() == 0)
            <div class="notifications-empty text-center">
                <h6 class="mt-0 mb-1"> {{ __('No New notifications') }}</h6>
            </div>
        @else
            @foreach($notifications as $notification)
                @if($notification->type=="App\Notifications\NewCompanyMessage")
                    <a href="{{url('customer/chat')}}" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart text-white"></i>
                                    </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">@if(isset($notification->data['company_name'])){{__('You have new view From: ').$notification->data['company_name']}} @endif</h6>
                                <div class="font-size-13 text-muted">
                                    <p class="mb-1">{{__(' Message: ').$notification->data['company_message']['message'] ?? ''}}</p>
                                    <p class="mb-0"><i
                                            class="mdi mdi-clock-outline"></i>{{ (new \DateTime($notification->created_at))->format('Y-m-d H:i:s')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="{{route('customer.viewedmyCV')}}" class="text-reset notification-item">
                        <div class="media">
                            <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart text-white"></i>
                                    </span>
                            </div>
                            <div class="media-body">
                                <h6 class="mt-0 mb-1">@if(isset($notification->data['company_name'])){{__('You have new view From: ').$notification->data['company_name']}} @endif</h6>
                                <div class="font-size-13 text-muted">
                                    <p class="mb-1">{{__(' CV: ').$notification->data['view_cv']['cv_id'] ?? ''}}</p>
                                    <p class="mb-0"><i
                                            class="mdi mdi-clock-outline"></i>{{ (new \DateTime($notification->data['view_cv']['created_at']))->format('Y-m-d H:i:s')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endif
            @endforeach
        @endif
    </div>
    <div class="p-2 border-top">
        <a class="btn btn-sm btn-link font-size-14 w-100 text-center"
           href="{{route('customer.viewedmyCV')}}">
            <i class="mdi mdi-arrow-right-circle me-1"></i> {{ __('View More..') }}
        </a>
    </div>
</div>
