@extends('company-cp.layouts.app')
@section('title','Profile')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body  pt-0">
                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                    <li class="nav-item">
                        <a class="nav-link fw-bold p-3 active" href="#">COMPANY INFORMATION
                            Managment</a>
                    </li>

                </ul>
                <form>
                    <div class="mb-3">
                        <h6 class="m-3">COMPANY INFORMATION FORM</h6>
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0  mt-4">
                                        <div class="form">
                                            <div class="row p-2">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Company ID</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="fullName" value="123" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="profession">Company
                                                            Name:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="profession" placeholder=""
                                                               value="Professional Medical  Company ">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Company
                                                            Address:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="address" placeholder=""
                                                               value="Riyadh Central Province, KSA">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Company
                                                            Website:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="address" placeholder=""
                                                               value="www.company.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="location">Company Email
                                                            address:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="location"
                                                               placeholder="m.alturki@promedex.com"
                                                               value="m.r@promedex.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Company Phone:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="phone"
                                                               placeholder="00966 56 304 9104"
                                                               value="00966 56 3041234">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone"> Fax No.:</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="phone"
                                                               placeholder="966 56 304 9104"
                                                               value="966 56 304 9104">
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="website1">Company
                                                                logo </label>


                                                        </div>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control"
                                                                   id="customFile">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mb-2">
                                                            <img class="rounded-circle avatar-xl"
                                                                 alt="200x200"
                                                                 src="assets/images/img-7.png"
                                                                 data-holder-rendered="true">
                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="col-md-12 mt-1">
                                                    <div class="form-group text-end">

                                                        <a href="" class="btn btn-success">Edit</a>
                                                        <a href=""
                                                           class="btn btn-secondary">Clear</a>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
