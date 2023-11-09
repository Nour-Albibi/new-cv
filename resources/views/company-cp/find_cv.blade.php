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
                        <div class="card-body">

                            <h4 class="header-title">Filters</h4>

                            <div class="border p-3 rounded mt-4">

                                <h5 class="font-size-16">Search</h5>

                                <div class="search-box me-2 mt-3">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <i class="ti-search search-icon"></i>
                                    </div>
                                </div>

                            </div>


                            <div class="border p-3 rounded mt-4">
                                <h5 class="font-size-16">Filter 1</h5>


                                <div id="accordion" class="custom-accordion categories-accordion">
                                    <div class="categories-group-card">
                                        <a href="#collapseOne" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                            <i class="ti-desktop font-size-16 align-middle me-2"></i> Filter 1
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </a>

                                        <div id="collapseOne" class="collapse" data-parent="#accordion">
                                            <div>
                                                <ul class="list-unstyled categories-list mb-0">
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 1</a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 2</a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 3</a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 4</a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="categories-group-card">
                                        <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="ti-archive font-size-16 align-middle me-2"></i> Filter 2
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </a>
                                        <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                            <div>
                                                <ul class="list-unstyled categories-list mb-0">
                                                    <li class="active"><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 1</a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 2</a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 3 </a></li>
                                                    <li><a href="#"><i class="mdi mdi-circle-medium me-1"></i> 4</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>

                            <div class="border p-3 rounded mt-4">
                                <h5 class="font-size-16">Filter 3</h5>

                                <div class="mt-4">
                                    <div class="form-check mt-2">
                                        <input type="radio" id="multirange" name="multirange1" class="form-check-input" checked>
                                        <label class="custom-control-label" for="multirange"> All</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="radio" id="multirange1" name="multirange1" class="form-check-input">
                                        <label class="custom-control-label" for="multirange1"> 1-3</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="radio" id="multirange2" name="multirange1" class="form-check-input">
                                        <label class="custom-control-label" for="multirange2"> 4-10</label>
                                    </div>
                                    <div class="form-check mt-2">
                                        <input type="radio" id="multirange3" name="multirange1" class="form-check-input">
                                        <label class="custom-control-label" for="multirange3"> 10-20</label>
                                    </div>

                                </div>
                            </div>




                            <div class="mt-4">
                                <button class="btn btn-primary2 w-100 waves-effect waves-light" type="submit">Search</button>
                            </div>



                        </div>


                    </div>


                </div>


            </div>
        </div>

    </div>
@endsection
