















































































































































    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="<?php echo e(asset('register/vendor/mdi-font/css/material-design-iconic-font.min.css')); ?>" rel="stylesheet"
          media="all">
    <link href="<?php echo e(asset('register/vendor/font-awesome-4.7/css/font-awesome.min.css')); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo e(asset('register/vendor/select2/select2.min.css')); ?>" rel="stylesheet" media="all">
    <link href="<?php echo e(asset('register/vendor/datepicker/daterangepicker.css')); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo e(asset('register/css/main.css')); ?>" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registration Form</h2>
                <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <form action="<?php echo e(route('FirstFashion.storeCustomer')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="cus_id"
                           value="<?php echo e(old('cus_id')?? $customer->cus_id); ?>">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Name</label>
                                <input type="text" id="cus_name" name="cus_name"
                                       class="input--style-4" placeholder="Name"
                                       value="<?php echo e(old('cus_name')?? $customer->cus_name); ?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input type="email" id="cus_email" name="cus_email" class="input--style-4"
                                       placeholder="Email"
                                       value="<?php echo e(old('cus_email')?? $customer->cus_email); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="form-outline flex-fill mb-0">
                                <label class="label">Birthday</label>
                                <div class="input-group-icon">
                                    <input type="date" id="cus_dob" name="cus_dob" class="input--style-4"
                                           placeholder="Date of Birth"
                                           value="<?php echo e(old('cus_dob')?? $customer->cus_dob); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="form-outline flex-fill mb-0">
                                    <input class="input--style-4" list="datalistOptions" id="cus_gender"
                                           name="cus_gender" placeholder="Gender">
                                    <datalist id="datalistOptions">
                                        <option value="Female">
                                        <option value="Male">
                                        <option value="Other">
                                    </datalist>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Address</label>
                                <input type="text" id="cus_address" name="cus_address"
                                       placeholder="Address" class="input--style-4"
                                       value="<?php echo e(old('cus_address')?? $customer->cus_address); ?>">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Phone Number</label>
                                <input class="input--style-4" type="text" name="cus_phone"
                                       value="<?php echo e(old('cus_phone')?? $customer->cus_phone); ?>" placeholder="Phone">
                            </div>
                        </div>
                    </div>
                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="<?php echo e(asset('register/vendor/jquery/jquery.min.js')); ?>"></script>
<!-- Vendor JS-->
<script src="<?php echo e(asset('register/vendor/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('register/vendor/datepicker/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('register/vendor/datepicker/daterangepicker.js')); ?>"></script>

<!-- Main JS-->
<script src="<?php echo e(asset('register/js/global.js')); ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/customer/register.blade.php ENDPATH**/ ?>