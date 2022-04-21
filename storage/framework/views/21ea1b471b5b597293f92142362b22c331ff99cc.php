<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
          crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bd1378526e.js" crossorigin="anonymous"></script>
    <title>Register Customer</title>
</head>
<body>













<main class="register-form">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <form action="<?php echo e(route('FirstFashion.storeCustomer')); ?>" method="post"
                                          class="mx-1 mx-md-4">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="cus_id"
                                               value="<?php echo e(old('cus_id')?? $customer->cus_id); ?>">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="cus_name" name="cus_name"
                                                       class="form-control" placeholder="Full Name"
                                                       value="<?php echo e(old('cus_name')?? $customer->cus_name); ?>">
                                                
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" id="cus_email" name="cus_email" class="form-control"
                                                       placeholder="Email"
                                                       value="<?php echo e(old('cus_email')?? $customer->cus_email); ?>">
                                                
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="cus_phone" name="cus_phone" class="form-control"
                                                       placeholder="Phone Number"
                                                       value="<?php echo e(old('cus_phone')?? $customer->cus_phone); ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fa-solid fa-mars-and-venus fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input class="form-control" list="datalistOptions" id="cus_gender"
                                                       name="cus_gender" placeholder="Gender">
                                                <datalist id="datalistOptions">
                                                    <option value="Female">
                                                    <option value="Male">
                                                    <option value="Other">
                                                </datalist>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="date" id="cus_dob" name="cus_dob" class="form-control"
                                                       placeholder="Date of Birth"
                                                       value="<?php echo e(old('cus_dob')?? $customer->cus_dob); ?>">
                                                
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="cus_address" name="cus_address"
                                                       class="form-control"
                                                       placeholder="Address"
                                                       value="<?php echo e(old('cus_address')?? $customer->cus_address); ?>">
                                                
                                            </div>
                                        </div>

                                        <div class="form-check d-flex justify-content mb-5">
                                            <input
                                                class="form-check-input me-2"
                                                type="checkbox"
                                                value=""
                                                id="form2Example3c"
                                            />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                        </div>

                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img
                                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH /Users/t0mbb./Documents/asm/FirstFashion/resources/views/FirstFashion/customer/register.blade.php ENDPATH**/ ?>