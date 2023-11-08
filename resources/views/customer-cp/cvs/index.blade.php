@extends('customer-cp.layouts.app')

@section('title')
    CVs
@endsection

@section('content')
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5>MY CVs</h5>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                    <tr>

                                        <th scope="col"> CV Template</th>
                                        <th scope="col"> Date</th>
                                        <th scope=""> PDF</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cvs as $cv )
                                        <tr>
                                            <td>
                                                 <x-customer-cp.cv_template_modern_card :cv="$cv" :lang="$cv->cv_language"></x-customer-cp.cv_template_modern_card>

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
                <div class="col-xl-4">


                </div>
            </div>

        </div>


    </div> <!-- container-fluid -->
    </div>

@endsection
