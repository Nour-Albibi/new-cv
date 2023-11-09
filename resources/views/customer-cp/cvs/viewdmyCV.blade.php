@extends('customer-cp.layouts.app')

@section('title')
    Viewed My CVs
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
                                <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                    <tr>

                                        <th scope="col"> CV Template</th>
                                        <th scope="col"> Company name</th>
                                        <th scope=""> How often</th>
                                        <th scope=""> date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cvs as $cv )

                                    @foreach ( $cv->views()->get() as $view )

                                    <tr>
                                        <td>

                                                <img src="{{ asset("files/".$view->cv->template->image) }}" alt="" class=""
                                                style="width: 150px;">
                                            </td>
                                            <td>{{ $view->company->first_name.' '.$view->company->last_name }}</td>
                                            <td>
                                                {{ $view->cv->views }}
                                            </td>
                                            <td>{{date('d/m/Y', strtotime($view->cv->created_at))  }}</td>

                                        </tr>
                                        @endforeach
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div> <!-- container-fluid -->
    </div>

@endsection
