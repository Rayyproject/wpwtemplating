<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">
            Dashboard
        </h1>

    </div>


    <!-- Cards -->
    <div class="row">

        <!-- Projects -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-primary shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Projects
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                2
                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-folder fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- Messages -->
        <div class="col-xl-3 col-md-6 mb-4">

            <div class="card border-left-success shadow h-100 py-2">

                <div class="card-body">

                    <div class="row no-gutters align-items-center">

                        <div class="col mr-2">

                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Messages
                            </div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                0
                            </div>

                        </div>

                        <div class="col-auto">

                            <i class="fas fa-envelope fa-2x text-gray-300"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Welcome -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">
                Welcome
            </h6>

        </div>

        <div class="card-body">

            Selamat datang di halaman Admin
            WPW Week 3.

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\wpwweek3\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>