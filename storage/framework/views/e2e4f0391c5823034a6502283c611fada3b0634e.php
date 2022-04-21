
<!-- header-bottom-->
<div class="header-bot my-md-4 my-3" id="site-header">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
            <!-- logo -->
            <div class="col-lg-3 col-md-4 logo_agile">
                <h1>
                    <a href="<?php echo e(route('FirstFashion.homepage')); ?>" style="font-family:'Javanese Text'">
                        <img src="<?php echo e(asset('image/logo.jpg')); ?>" style="width: 100px; height: 70px" alt="">
                        First Fashion</a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-lg-9 col-md-8 header">
                <div class="row">
                    <!-- search -->
                    <div class="col-lg-9 col-sm-8 agileits_search">
                        <form class="form-inline"

                              method="get" style="max-width:600px;">
                            <?php echo csrf_field(); ?>
                            <input class="form-control" type="text" name="search"
                                   placeholder="Search for shirts and more" aria-label="Search"
                                   value="<?php echo e(old('search')?? ''); ?>">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="bi bi-search-heart" style="font-size: 25px" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
                        <div class="col-lg-8 col-sm-7 header-right ml-auto text-sm-right text-center">
                            
                            <ul class="top-header-lists">
                                <li style="list-style: none">
                                    <a href="<?php echo e(route('FirstFashion.registerCustomer')); ?>" style="font-size: 20px; color: blue">
                                        <i class="fa-solid fa-right-to-bracket"></i><b>Register</b>
                                    </a>
                                </li>
                            </ul>
                        </div>











                    </div>
                    <!-- //cart details -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- navigation -->
<div class="navbar-inner" style="background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%); ">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light" >
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center mr-auto">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link" href="<?php echo e(route('FirstFashion.homepage')); ?>"><b>Home</b>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <b>Categories</b>
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">






                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link"

                        ><b>About Us</b></a>
                    </li>

                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link"

                        ><b>All Products</b></a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 20px" class="nav-link"

                        ><b>Contact Us</b></a>
                    </li>

                    <li  class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link"

                        ><b>Feedback</b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->

<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/partials/homepageNav.blade.php ENDPATH**/ ?>