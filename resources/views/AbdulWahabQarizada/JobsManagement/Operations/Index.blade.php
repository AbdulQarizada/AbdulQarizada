@extends('layouts.master-layouts')

@section('title') Jobs Management @endsection

@section('css')
<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexAbdulWahabQarizada')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <!-- <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20"></i> CARE CARDS</span> -->
    </div>
</div>


<div class="row">
    <div class="mt-4 mb-4">
        <blockquote class="blockquote border-dark  font-size-14 mb-0">
            <p class="my-0   fw-medium text-dark text-muted card-title font-size-24 text-wrap text-uppercase">Jobs Management</p>

        </blockquote>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="row">

            <div class="col-md-4 mb-2">
                <a href="{{route('AllJobs')}}">
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium text-uppercase">All jobs</p>
                                        <h6 class="text-muted mb-0">All Jobs</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-warning">
                                                <i class="bx bx-list-ol    font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>

            <!-- <div class="col-md-4 mb-2">
                <a >
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium text-uppercase">New</p>
                                        <h6 class="text-muted mb-0">New jobs</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-user-rectangle    font-size-24"></i>
                                                <h1 class="mb-0 text-white">1</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a >
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">

                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">

                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium  text-uppercase">Applied</p>
                                        <h6 class="text-muted mb-0">Applied jobs</h4>
                                    </div>
                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                 <i class="bx bxs-user-rectangle    font-size-24"></i>
                                                <h1 class="mb-0 text-white">2</h1>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>



            <div class="col-md-4 mb-2">
                <a >
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium text-uppercase">Shortlisted</p>
                                        <h6 class="text-muted mb-0">Shortlisted</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                 <i class="bx bxs-user-rectangle    font-size-24"></i>
                                                <h1 class="mb-0 text-white">3</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-2">
                <a >
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium  text-uppercase">Offer Recieved</p>
                                        <h6 class="text-muted mb-0">Offer Recieved</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-info">
                                                <i class="bx bxs-user-rectangle    font-size-24"></i>
                                                <h1 class="mb-0 text-white">4</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mb-2">
                <a >
                    <div class="card-one mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="my-0 text-primary card-title fw-medium  text-uppercase">Ignored</p>
                                        <h6 class="text-muted mb-0">Ignored jobs</h4>
                                    </div>

                                    <div class="flex-shrink-0 align-self-center">
                                        <div class="mini-stat-icon avatar-sm rounded-circle ">
                                            <span class="avatar-title bg-danger">
                                                <i class="bx bx-block text-white  font-size-24"></i>
                                                 <h1 class="mb-0 text-danger">5</h1>

                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div> -->


        </div>
        <!-- end row -->

    </div>
</div>
<!-- end row -->



@endsection
@section('script')


@endsection