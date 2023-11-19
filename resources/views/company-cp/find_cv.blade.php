@extends('company-cp.layouts.app')
@section('title','Profile')

@section('content')




<div class="row">
    <div class="col-lg-8">
        <div class="card">

            <div class="card-body">
                    <h5>Find CVs & Download </h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th>CV Template</th>
                                <th>CV Name</th>
                                <th>how often</th>
                                <th> Date</th>
                                <th> View</th>
                                <th> Download</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>


                                <td><a href="javascript: void(0);" class="text-dark fw-bold">Template 1</a> </td>

                                <td>Name 1</td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">5</div>
                                </td>
                                <td>
                                    04 Apr, 2020
                                </td>

                                <td>
                                    <div class="badge badge-soft-success font-size-12">View</div>
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="me-3 text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="mdi mdi-book-arrow-down font-size-18 text-primary"></i></a>
                                </td>



                            </tr>




                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card">

                        <livewire:search />

                    </div>


                </div>


            </div>
        </div>

    </div>
@endsection
