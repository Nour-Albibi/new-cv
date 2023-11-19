<div>
    <a wire:click="increment">Hi</a>
    <h1>{{ $counter }}</h1>


    <div class="card-body">
        <form action="{{ route('company.dofind_cvs') }}" method="post">
            @csrf
            @method('post')
        <h4 class="header-title">Filters</h4>

        <div class="border p-3 rounded mt-4">

            <h5 class="font-size-16">Search</h5>

            <div class="search-box me-2 mt-3">
                <div class="position-relative">
                    <input type="text" wire:model="jobtitle" class="form-control" placeholder="Search...">
                    <i class="ti-search search-icon"></i>
                </div>
            </div>

        </div>


        <div class="border p-3 rounded mt-4">
            <h5 class="font-size-16">{{ __('jobtitle') }}</h5>


            <div id="accordion" class="custom-accordion categories-accordion">
                <div class="categories-group-card">
                    <a href="#collapseOne" class="categories-group-list collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                        <i class="ti-desktop font-size-16 align-middle me-2"></i> {{ __('jobtitle') }}
                        <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <ul class="list-unstyled categories-list mb-0">
                            @if ($jobs)
                            @php
                            $lang='en';
                        @endphp
                            @foreach ($jobs as $job )
                            <input type="radio" name="jobtitle" value="{{ $job->id }}" wire:model="jobid" id="jobtitle">
                           {{$job->{"name_".$lang} }}<br>

                            @endforeach

                            @endif



                            </ul>
                        </div>
                    </div>
                </div>

                <div class="categories-group-card">
                    <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse" aria-expanded="true" aria-controls="collapseTwo">
                        <i class="ti-archive font-size-16 align-middle me-2"></i> skills
                        <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                    </a>
                    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                        <div>

                            <ul class="list-unstyled categories-list mb-0">
                                @if ($skills)
                                @foreach($skills as $skill)
                                <input type="checkbox" name="skillid[]" id="skillid" value="{{ $skill->id }}">{{ $skill->{"name_".$lang} }}<br>
                                @endforeach
                                @endif
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
                    <input type="radio" id="multirange" name="amount" class="form-check-input" checked>
                    <label class="custom-control-label" for="amount"> All</label>
                </div>
                <div class="form-check mt-2">
                    <input type="radio" id="multirange1" name="amount" class="form-check-input">
                    <label class="custom-control-label" for="amount"> 1-3</label>
                </div>
                <div class="form-check mt-2">
                    <input type="radio" id="multirange2" name="amount" class="form-check-input">
                    <label class="custom-control-label" for="amount"> 4-10</label>
                </div>
                <div class="form-check mt-2">
                    <input type="radio" id="multirange3" name="amount" class="form-check-input">
                    <label class="custom-control-label" for="amount"> 10-20</label>
                </div>

            </div>
        </div>




        <div class="mt-4">
            <button class="btn btn-primary2 w-100 waves-effect waves-light" type="submit">Search</button>
        </div>

        </form>

    </div>
