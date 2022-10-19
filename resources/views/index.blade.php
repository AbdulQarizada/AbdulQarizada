@extends('layouts.master-layouts')

@section('title') Home @endsection
@section('css')

<link href="{{ URL::asset('/assets/css/mystyle/tabstyle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')



<div class="row">
    <h1 class="display-6 mt-4 mb-4 fw-medium text-dark text-muted text-uppercase">QARIZADA SPACE</h1>
    <div class="col-xl-12">
        <div class="row">
            <div class="col-md-4 mb-2">
                <a href="{{route('IndexAbdulWahabQarizada')}}">
                    <div class="card-one  mini-stats-wid border border-secondary">
                        <div class="card-body">
                            <blockquote class="blockquote font-size-14 mb-0">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 align-self-center mr-2">
                                        <div class="mini-stat-icon avatar-md rounded-circle ">
                                            <span class="avatar-title bg-dark">
                                                <img class="rounded-circle avatar-md header-profile-user" src="{{ asset('/uploads/User/avatar-1.png') }}" alt="Profile">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 p-2">
                                        <p class="my-0 text-primary card-title fw-semibold">Abdul Wahab Qarizada</p>
                                        <h6 class="text-muted mb-0">This Space is Related to Abdul Wahab Qarizada</h4>
                                    </div>


                                </div>

                                <div class="d-flex mt-4">

                                </div>
                            </blockquote>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('/assets/js/pages/dashboard.init.js') }}"></script>
@endsection