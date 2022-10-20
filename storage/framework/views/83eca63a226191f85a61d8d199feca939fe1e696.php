

<?php $__env->startSection('title'); ?> All Jobs <?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<!-- DataTables -->
<link href="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="row mt-4">
    <div class="col-4">
        <a href="<?php echo e(route('IndexJobsManagement')); ?>" class="btn btn-info btn-lg waves-effect mb-3 btn-label waves-light"><i class="bx bx-left-arrow  font-size-16 label-icon"></i>Back</a>
        <span class="my-0   card-title fw-medium font-size-24 text-wrap"><i class="bx bx-caret-right text-secondary font-size-20 text-uppercase"></i>Jobs</span>
    </div>
</div>
<div class="row">
    <div class="col-12 ">
        <a href="<?php echo e(route('RefreshAllJobs')); ?>" class="btn btn-success btn-lg waves-effect  waves-light mb-3 float-end btn-rounded"><i class="mdi mdi-cloud-refresh me-1"></i>Refresh</a>
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
                                <th>Position & Company</th>
                                <th>Dates</th>
                                <th>Experience</th>
                                <th>Location</th>
                                <th>Email</th>
                                <th>Advertiser</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <!-- <td><?php echo e($job->id); ?></td> -->
                                <td><?php echo e($loop->iteration); ?></td>
                                <td>
                                <div>
                                        <span class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($job -> PositionName); ?></a></span>
                                        <span class="text-muted mb-0 badge badge-soft-danger font-size-14 rounded"><?php echo e($job -> NumberOfVaccancies); ?></span>
                                        <br />
                                        <span class="text-muted mb-0"><?php echo e($job -> CompanyName); ?></span>
                                        <span class="text-muted mb-0 badge badge-soft-info font-size-14 rounded"><?php echo e($job -> Advertiser); ?></span>

                                    </div>
                              </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-danger"><?php echo e($job -> ExpireDate); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($job -> PublishDate); ?></p>
                                        <p class="text-muted mb-0 badge badge-soft-danger"><?php echo e($job -> ExpiringDuration); ?> Days</p>
                                    </div>
                                    <!-- -> format("j F Y") -->

                                </td>
                                <td>
                                    <div>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark badge badge-soft-primary"><?php echo e($job -> MinimumEducation); ?></a></h5>
                                        <p class="text-muted mb-0 badge badge-soft-warning"><?php echo e($job -> MinYearsOfExperience); ?> Years</p>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($job -> LocationsProvince); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($job -> LocationsCountry); ?></p>


                                </td>

                                <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark"><?php echo e($job -> SubmissionEmails); ?></a></h5>
                                    <p class="text-muted mb-0"><?php echo e($job -> SubmissionEmails); ?></p>
                            </td>
                                <td>
                                <h5 class="font-size-14 mb-1"><a href="#" class="text-muted mb-0 badge badge-soft-info "><?php echo e($job -> Advertiser); ?></a></h5>

                                </td>
                                <td>
                                    <div class="d-flex flex-wrap gap-2">






                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- Required datatable js -->
<script src="<?php echo e(URL::asset('/assets/libs/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/pdfmake/pdfmake.min.js')); ?>"></script>


<!-- Datatable init js -->
<script src="<?php echo e(URL::asset('/assets/js/pages/datatables.init.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/sweetalert.min.js')); ?>"></script>


<!-- Bootstrap rating js -->
<script src="<?php echo e(URL::asset('/assets/libs/bootstrap-rating/bootstrap-rating.min.js')); ?> "></script>

<script src="<?php echo e(URL::asset('/assets/js/pages/rating-init.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\TheDeveloper\Desktop\Projects\AbdulQarizada\resources\views/AbdulWahabQarizada/JobsManagement/Operations/All.blade.php ENDPATH**/ ?>