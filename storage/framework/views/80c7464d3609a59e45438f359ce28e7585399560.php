<?php $__env->startSection('main'); ?>
    <style>
        .carousel-control-next, .carousel-control-prev {
            position: absolute;
            top: 0;
            bottom: 0;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15%;
            padding: 0;
            color: #fff;
            text-align: center;
            background: 0 0;
            border: 0;
            opacity: 1;
            transition: opacity .5s ease;
        }
    </style>

    <!-- banner -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: -50px">
        <!-- Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item item1 active">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                <img class="d-block w-100 img-fluid" src="<?php echo e(asset('image/banner1.jpg')); ?>"
                                     alt="First slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                <img class="d-block w-100" src="<?php echo e(asset('image/banner2.jpg')); ?>" alt="Second slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item3">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                <img class="d-block w-100" src="<?php echo e(asset('image/banner3.jpg')); ?>" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item4">
                <div class="banner-style d-flex align-items-center">
                    <div class="container">
                        <div class="w3l-space-banner">
                            <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                <img class="d-block w-100" src="<?php echo e(asset('image/banner4.jpg')); ?>" alt="Fourth slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- //banner -->
    <div class="container" style="padding-top: 60px">
        <div class="section-content relative">
            <div class="gap-element" style="display: block; height: auto; padding-top: 30px;"></div>
            <div class="row" id="row-525041891">
                <div class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                            <div class="icon-box-img has-icon-bg" style="width: 70px">
                                <div class="icon">
                                    <div class="icon-inner" style="border-width: 1px">
                                        <i class="fa-solid fa-truck-fast"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h6>
                                    FREE SHIP
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                            <div class="icon-box-img has-icon-bg" style="width: 70px">
                                <div class="icon">
                                    <div class="icon-inner" style="border-width: 1px">
                                        <i class="bi bi-currency-bitcoin"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h6>
                                    FAST PAYMENT
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                            <div class="icon-box-img has-icon-bg" style="width: 70px">
                                <div class="icon">
                                    <div class="icon-inner" style="border-width: 1px">
                                        <i class="fa-solid fa-headset"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h6>
                                    ONLINE SUPPORT
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col medium-6 small-12 large-3">
                    <div class="col-inner">
                        <div class="icon-box featured-box icon-box-left text-left">
                            <div class="icon-box-img has-icon-bg" style="width: 70px">
                                <div class="icon">
                                    <div class="icon-inner" style="border-width: 1px">
                                        <i class="fa-solid fa-shield-halved"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-text last-reset">
                                <h6>
                                    SAFE PAYMENTS
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <h2 class="text-center"
            style="margin-top: 60px; margin-bottom: 30px; padding: 20px; font-size: 30px; background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%) "
        ><i class="fa-solid fa-shirt">&nbsp; B e s t &nbsp; - &nbsp; S e l l i n g &nbsp; P r o d u c t &nbsp;</i><i class="fa-solid fa-shirt"></i></h2>
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item item1 active">
                    <div class="banner-style d-flex align-items-center">
                        <div class="container">
                            <div class="w3l-space-banner">
                                <div class="carousel-caption-banner" style="max-width : 100%; height: 650px">
                                <img  src="<?php echo e(asset('image/binhgold.jpg')); ?>" class="d-block w-100 img-fluid" alt="First slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <div class="banner-style d-flex align-items-center">
                        <div class="container">
                            <div class="w3l-space-banner">
                                <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                    <img src="<?php echo e(asset('image/banner5.jpg')); ?>" class="d-block w-100" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item item3">
                    <div class="banner-style d-flex align-items-center">
                        <div class="container">
                            <div class="w3l-space-banner">
                                <div class="carousel-caption-banner" style="max-width: 100%; height: 500px">
                                    <img src="<?php echo e(asset('image/banner6.jpg')); ?>" class="d-block w-100" alt="Third slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h3 style="margin-top: 50px; margin-bottom: 30px; text-align: center"> Wish customers have a happy shopping
            experience </h3>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage.blade.php ENDPATH**/ ?>