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
                                        <th scope="col">Date</th>
                                        <th scope=""> PDF</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($cvs as $cv )
                                        <tr>
                                            <td>
                                                <img src="{{ asset("files/".$cv->template->image) }}" alt="" class=""
                                                     style="width: 150px;">
                                            </td>
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
