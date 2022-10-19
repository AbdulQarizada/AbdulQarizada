@extends('layouts.master-layouts')

@section('title') All Jobs @endsection

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


<div class="row mt-4">
    <div class="col-4">
        <a href="{{route('IndexJobsManagement')}}" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20 text-uppercase"></i>Jobs</span>
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <a href="javascript:window.location.reload();" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-cloud-refresh me-1"></i>Refresh</a>
    </div>
</div>

<div class="row">
    <div class="col-12">

        <div class="card">
            <h3 class="card-header bg-dark text-white"></h3>

            <div class="card-body">

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table  table-striped table-bordered dt-responsive nowrap w-100 m-4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>FirstName</th>
                                <th>Address</th>
                                <th>Phone Numbers</th>
                                <th>Family Status</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach($jobs as $job)
                            <tr>
                                <td>{{ $job->id }}</td>
                                <!-- <td>{{$loop->iteration}}</td> -->
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$job -> FirstName}} {{$job -> LastName}}</a></h5>
                                    <p class="text-muted mb-0">QCC-{{$job -> QCC}}</p>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$job -> ProvinceName}}</a></h5>
                                        <p class="text-muted mb-0">{{$job -> DistrictName}}</p>

                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary">{{$job -> PrimaryNumber}}</a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning">{{$job -> SecondaryNumber}}</p>
                                        <p class="text-muted mb-0 badge badge-soft-danger">{{$job -> RelativeNumber}}</p>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$job -> FamilyStatus}}</a></h5>
                                        @if( $job -> LevelPoverty == 1)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-secondary font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>

                                        @endif
                                        @if( $job -> LevelPoverty == 2)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-secondary font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $job -> LevelPoverty == 3)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-secondary font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $job -> LevelPoverty == 4)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-warning font-size-18"></i>
                                        <i class="bx bxs-star text-secondary font-size-20"></i>
                                        @endif
                                        @if( $job -> LevelPoverty == 5)
                                        <i class="bx bxs-star text-warning font-size-12"></i>
                                        <i class="bx bxs-star text-warning font-size-14"></i>
                                        <i class="bx bxs-star text-warning font-size-16"></i>
                                        <i class="bx bxs-star text-warning font-size-18"></i>
                                        <i class="bx bxs-star text-warning font-size-20"></i>
                                        @endif
                                    </div>
                                </td>

                                <td>
                                    <div>


                                        @if($job -> Status == 'Pending')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-secondary">{{$job -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$qamjobarcarecard -> created_at -> format("d-m-Y")}}</p>

                                        @endif

                                        @if($job -> Status == 'Approved')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$job -> Status}} </a></h5>
                                        <p class="text-muted mb-0">{{$job -> created_at -> format("d-m-Y")}}</p>

                                        @endif

                                        @if($job -> Status == 'Rejected')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-danger">{{$job -> Status}} </a></h5>
                                        <p class="text-muted mb-0">{{$job -> created_at -> format("d-m-Y")}}</p>

                                        @endif



                                        @if($job -> Status == 'ReInitiated')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-info">{{$job -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$job -> created_at -> format("d-m-Y")}}</p>

                                        @endif

                                        @if($job -> Status == 'Released')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-success">{{$job -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$job -> created_at -> format("d-m-Y")}}</p>

                                        @endif

                                        @if($job -> Status == 'Printed')
                                        <h5 class="font-size-14 mb-1"><a href="#" class="badge badge-soft-dark">{{$job -> Status}}</a></h5>
                                        <p class="text-muted mb-0">{{$job -> created_at -> format("d-m-Y")}}</p>

                                        @endif

                                    </div>
                                </td>
                                <td>
                                    @if( $job -> Created_By !="")

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$job ->  UFirstName }} {{$job ->  ULastName }}</a></h5>
                                        <p class="text-muted mb-0">{{$job ->  UJob }}</p>

                                    </div>
                                    @endif
                                    @if( $job -> Created_By =="")

                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Anonymous</a></h5>
                                        <p class="text-muted mb-0">Requested</p>

                                    </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="{{route('StatusCareCard', ['data' => $job -> id])}}" class="btn btn-warning waves-effect waves-light">
                                            <i class="bx bx-show-alt font-size-16 align-middle"></i>
                                        </a>
                                        @if($job -> Status == 'Pending')
                                        <a href="{{route('EditCareCard', ['data' => $job -> id])}}" class="btn btn-info waves-effect waves-light">
                                            <i class="bx bx-edit  font-size-16 align-middle"></i>
                                        </a>
                                        <a href="{{route('DeleteCareCard', ['data' => $job -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                                            <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                        </a>
                                        @endif


                                        @if( $job -> Status == 'Approved')

                                        <a href="{{route('PrintingCareCard', ['data' => $job -> id])}}" class="btn btn-dark waves-effect waves-light print">
                                            <i class="bx bxs-printer   font-size-16 align-middle"></i>
                                        </a>
                                        @endif

                                        @if( $job -> Status == 'Rejected')
                                        <a href="{{route('EditCareCard', ['data' => $job -> id])}}" class="btn btn-info waves-effect waves-light">
                                            <i class="bx bx-edit  font-size-16 align-middle"></i>
                                        </a>
                                        <a href="{{route('DeleteCareCard', ['data' => $job -> id])}}" class="btn btn-danger waves-effect waves-light delete-confirm">
                                            <i class=" bx bx-trash-alt font-size-16 align-middle"></i>
                                        </a>
                                        @endif

                                        @if($job -> Status == 'Printed')
                                        <a href="{{route('ReleaseCareCard', ['data' => $job -> id])}}" class="btn btn-success waves-effect waves-light release">
                                            <i class="bx bx-user-check  font-size-16 align-middle"></i>
                                        </a>
                                        @endif




                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>


<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/sweetalert.min.js') }}"></script>


<!-- Bootstrap rating js -->
<script src="{{ URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js') }} "></script>

<script src="{{ URL::asset('/assets/js/pages/rating-init.js') }}"></script>

<script>
    $('.delete-confirm').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This record and it`s details will be permanantly deleted!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });

    $('.release').on('click', function(event) {
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: 'Are you sure?',
            text: 'This card is released!',
            icon: 'warning',
            buttons: ["Cancel", "Yes!"],
        }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
        });
    });




    // $('#datatable').DataTable( {
    //     responsive: true,

    //     lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],

    //     dom: 'lBfrtip',
    //     buttons: [
    //         {
    //             autoFilter: true,
    //             extend: 'excel',
    //             text: 'Export To Excel',
    //             exportOptions: {
    //                 modifier: {
    //                     page: 'current'
    //                 }
    //             }
    //         }
    //     ]
    // } );
</script>
@endsection