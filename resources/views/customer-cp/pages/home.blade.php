@extends('customer-cp.layouts.app')
@section('title','My latest cvs')
@section('content')
    <div class="container-fluid">
        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>My latest cvs</h5>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">CV Template</th>
                                        <th>{{__('Subscription')}}</th>
                                        <th scope="col">Date</th>
                                        <th scope=""> PDF</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($cvs as $cv )
                                        <tr>
                                            <td>
                                                <div class="exad-card left text_on_image yes">
                                                    <div class="exad-card-thumb">
                                                            @include('components.cv.cv_template_'.$cv->template->file_name.'_card')
                                                    </div>
                                                </div>
                                            </td>
                                            <td><a href="{{route('customer.subscriptions.show',['subscription'=>$cv->subscription_id])}}">
                                                    {{$cv->subscription->package->{"name_".$lang} }}</a></td>
                                            <td>{{date('d/m/Y', strtotime($cv->created_at))  }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                        onclick="window.location.href='{{ route('customer.downloadCV',$cv) }}';">
                                                    Download <i class="fas fa-arrow-down"></i></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @include('customer-cp.partials.cards')
            </div>
        </div>
    </div> <!-- container-fluid -->
    </div>
@endsection
