@extends('customer-cp.layouts.app')

@section('title')
    Viewed My CVs
@endsection
@section('custom_css')
    <link href="{{asset('customer-assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" defer />

    <!-- Responsive datatable examples -->
    <link href="{{asset('customer-assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" defer />
@stop
@section('content')
     <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body  pt-0">
                            <ul class="nav nav-tabs nav-tabs-custom mb-4">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold p-3 active" href="#">Viewed MY CV </a>
                                </li>

                            </ul>
                            <div class="table-responsive">
                                <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                    <tr>
                                        <th>CV Template</th>
                                        <th>Company Name</th>
                                        <th>how often</th>
                                        <th> Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $customer_views as $view )
                                            <tr>
                                                <td>
                                                    <div class="exad-card left text_on_image yes"
                                                         style="overflow:hidden;max-width:265px;max-height:350px;">
                                                        <div class="exad-card-thumb">
                                                            @include('components.cv.cv_template_'.$view->cv->template->file_name.'_card')
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $view->company->first_name.' '.$view->company->last_name }}</td>
                                                <td>
                                                    <div class="badge badge-soft-success font-size-12"> {{ $view->how_often }}</div>
                                                </td>
                                                <td>{{date('d/m/Y', strtotime($view->cv->created_at))  }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
@section('custom_js')
    <script src="{{asset('customer-assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('customer-assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Responsive examples -->
    <script src="{{asset('customer-assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('customer-assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

    <script src="{{asset('customer-assets/js/pages/ecommerce-datatables.init.js')}}"></script>
@stop
