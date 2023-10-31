@extends('customer-cp.layouts.app')

@section('template_title')
    CVs
@endsection

@section('content')




















<div class="container-fluid">

    <div class="page-content-wrapper">




    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                  <h5>Viewed MY CV</h5>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead>
                                        <tr>

                                                <th scope="col">    CV Template</th>
                                                <th scope="col">    Date</th>
                                                <th scope="">       PDF</th>
                                                <th scope="col">    Action</th>



                                        </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cvs as $cv )

                                    <tr>

                                    <td>
                                    </td>
                                                            <td>
                                                                @php
                                                                    // dd ($cv->template());
                                                                @endphp
                                                                <img src="{{ $cv->template->image }}" alt="" class="" style="width: 150px;">
                                                            </td>
                                                            <td>{{date('d/m/Y', strtotime($cv->created_at))  }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">Download <i class="fas fa-arrow-down"></i></button>
                                                            </td>

                                                            <td>
                                                                <i class="fas fa-pen"></i>
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </td>


                                                        </tr>
                                    @endforeach


                                                        <tr>

                                                            <td>
                                                               <h5 class="font-size-16"> 12</h5>

                                                            </td>
                                                            <td>
                                                                <img src="assets/images/resume-template-with-photo.jpg" alt="" class="" style="width: 150px;">
                                                            </td>
                                                            <td>07/10/2020</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light">Download <i class="fas fa-arrow-down"></i></button>
                                                            </td>

                                                            <td>
                                                                <i class="fas fa-pen"></i>
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </td>


                                                        </tr>


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
