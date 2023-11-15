@extends('customer-cp.layouts.app')

@section('title')
    cvs
@endsection

@section('content')
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>My latest cvs</h5>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col"> CV Template</th>
                                        <th>{{__('Subscription')}}</th>
                                        <th scope="col"> Date</th>
                                        <th scope=""> PDF</th>
                                        <th>{{__('Action')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cvs as $cv )
                                        <tr>
                                            <td>
                                                <div class="exad-card left text_on_image yes"
                                                     style="overflow:hidden;max-width:265px;max-height:350px;">
                                                    <div class="exad-card-thumb">
                                                        @include('components.cv.cv_template_'.$cv->template->file_name.'_card')
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{route('customer.subscriptions.show',['subscription'=>$cv->subscription_id])}}">
                                                    {{$cv->subscription->package->{"name_".$lang} }}</a></td>
                                            <td>{{date('d/m/Y', strtotime($cv->created_at))  }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                        onclick="window.location.href='{{ route('customer.downloadCV',$cv) }}';">
                                                    Download <i class="fas fa-arrow-down"></i></button>
                                            </td>
                                            @if($cv->downloads==0)
                                                <td>
                                                    <a href="{{route('customer.editCV',['cv'=>$cv->id])}}"><i
                                                            class="fas fa-pen text-info"></i></a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {!! $cvs->links() !!}
                </div>
                <div class="col-xl-4">


                </div>
            </div>

        </div>


    </div> <!-- container-fluid -->
    </div>

@endsection
