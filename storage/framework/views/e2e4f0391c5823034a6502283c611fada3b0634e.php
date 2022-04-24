<!-- header-bottom-->
<div  class="" id="site-header" style="">
    <div class="container" style="">
        <div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
            <!-- logo -->
            <div class="col-lg-3 col-md-3 logo_agile">
                <h1>
                    <img src="<?php echo e(asset('image/logo_transparent.png')); ?>" style="width: 100px; margin-right: 10px;" alt="">
                    <a href="<?php echo e(route('FirstFashion.homepage')); ?>"
                       style="font-family: Impact, Charcoal, sans-serif;
    font-size: 25px;
    letter-spacing: 2px;
    word-spacing: 0px;
    color: #FF5549;
    font-weight: 700;
    text-decoration: none solid rgb(68, 68, 68);
    font-style: normal;
    font-variant: normal;
    text-transform: uppercase;
    text-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #E44F21;}">
                        First Fashion</a>
                </h1>
            </div>
            <!-- //logo -->
            <!-- header-bot -->
            <div class="col-lg-9 col-md-8 header" >
                <div class="row">
                    <!-- search -->
                    <div class="col-lg-10 search-wrapper">
                        <style>
                            body {
                                background: #212129;
                            }

                            ::selection {
                                background: #212129;
                            }

                            .search-wrapper {
                                position: absolute;
                                transform: translate(-50%, -50%);
                                top:50%;
                                left:50%;
                            }
                            .search-wrapper.active {}

                            .search-wrapper .input-holder {
                                height: 70px;
                                width:70px;
                                overflow: hidden;
                                background: rgba(255,255,255,0);
                                border-radius:6px;
                                position: relative;
                                transition: all 0.3s ease-in-out;
                            }
                            .search-wrapper.active .input-holder {
                                width:450px;
                                border-radius: 50px;
                                background: rgba(0,0,0,0.5);
                                transition: all .5s cubic-bezier(0.000, 0.105, 0.035, 1.570);
                            }
                            .search-wrapper .input-holder .search-input {
                                width:100%;
                                height: 50px;
                                padding:0px 70px 0 20px;
                                opacity: 0;
                                position: absolute;
                                top:0px;
                                left:0px;
                                background: transparent;
                                box-sizing: border-box;
                                border:none;
                                outline:none;
                                font-family:"Open Sans", Arial, Verdana;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 20px;
                                color:#FFF;
                                transform: translate(0, 60px);
                                transition: all .3s cubic-bezier(0.000, 0.105, 0.035, 1.570);
                                transition-delay: 0.3s;
                            }
                            .search-wrapper.active .input-holder .search-input {
                                opacity: 1;
                                transform: translate(0, 10px);
                            }
                            .search-wrapper .input-holder .search-icon {
                                width:70px;
                                height:70px;
                                border:none;
                                border-radius:40px;
                                background: black;
                                padding:0px;
                                outline:none;
                                position: relative;
                                z-index: 2;
                                float:right;
                                cursor: pointer;
                                transition: all 0.3s ease-in-out;
                            }
                            .search-wrapper.active .input-holder .search-icon {
                                width: 50px;
                                height:50px;
                                margin: 10px;
                                border-radius: 30px;
                            }
                            .search-wrapper .input-holder .search-icon span {
                                width:22px;
                                height:22px;
                                display: inline-block;
                                vertical-align: middle;
                                position:relative;
                                transform: rotate(45deg);
                                transition: all .4s cubic-bezier(0.650, -0.600, 0.240, 1.650);
                            }
                            .search-wrapper.active .input-holder .search-icon span {
                                transform: rotate(-45deg);
                            }
                            .search-wrapper .input-holder .search-icon span::before, .search-wrapper .input-holder .search-icon span::after {
                                position: absolute;
                                content:'';
                            }
                            .search-wrapper .input-holder .search-icon span::before {
                                width: 4px;
                                height: 11px;
                                left: 9px;
                                top: 18px;
                                border-radius: 2px;
                                background: #FE5F55;
                            }
                            .search-wrapper .input-holder .search-icon span::after {
                                width: 14px;
                                height: 14px;
                                left: 0px;
                                top: 0px;
                                border-radius: 16px;
                                border: 4px solid #FE5F55;
                            }
                            .search-wrapper .close {
                                position: absolute;
                                z-index: 1;
                                top:24px;
                                right:330px;
                                width:25px;
                                height:25px;
                                cursor: pointer;
                                transform: rotate(-180deg);
                                transition: all .3s cubic-bezier(0.285, -0.450, 0.935, 0.110);
                                transition-delay: 0.2s;
                            }
                            .search-wrapper.active .close {

                                transform: rotate(45deg);
                                transition: all .6s cubic-bezier(0.000, 0.105, 0.035, 1.570);
                                transition-delay: 0.5s;
                            }
                            .search-wrapper .close::before, .search-wrapper .close::after {
                                position:absolute;
                                content:'';
                                background: #FE5F55;
                                border-radius: 2px;
                            }
                            .search-wrapper .close::before {
                                width: 5px;
                                height: 25px;
                                left: 10px;
                                top: 0px;
                            }
                            .search-wrapper .close::after {
                                width: 25px;
                                height: 5px;
                                left: 0px;
                                top: 10px;
                            }
                        </style>
                        <div class="input-holder">
                            <form action="<?php echo e(route('FirstFashion.search')); ?>" method="GET">
                            <script type="text/javascript">function searchToggle(obj, evt){
                                    var container = $(obj).closest('.search-wrapper');
                                    if(!container.hasClass('active')){
                                        container.addClass('active');
                                        evt.preventDefault();
                                    }
                                    else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                                        container.removeClass('active');
                                        // clear input
                                        container.find('.search-input').val('');
                                    }
                                }
                            </script>
                            <input type="text" class="search-input" name="search" placeholder="Type name of shirts" value="<?php echo e(old('search')); ?>">
                            <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                            </form>
                        </div>
                        <span class="close" onclick="searchToggle(this, event);"></span>

                    </div>


                    <div
                        class="top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
                        <div class="col-lg-2 header-right ml-auto text-sm-right text-center"
                             style="padding-left : 50px;padding-top: 5px;">

                            <ul class="top-header-lists">
                                <li style="list-style: none">
                                    <a href="<?php echo e(route('FirstFashion.registerCustomer')); ?>"
                                       style="font-size: 20px; color: whitesmoke;text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;">
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
<div class="navbar-inner"
     style="background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%); ">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center mr-auto">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link"
                           href="<?php echo e(route('FirstFashion.homepage')); ?>"><b>Home</b>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="font-size: 20px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                           role="button" data-toggle="dropdown" aria-expanded="false">
                            <b>Categories</b>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown"
                             style="background: linear-gradient(-30deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);text-align: left; margin-left: 50px;
                             padding-left: -50px;background-size: 400% 100%;
                            animation: gradient 7s ease infinite;">
                            <style>
                                @keyframes  gradient {
                                    0% {
                                        background-position: 0% 50%;
                                    }
                                    50% {
                                        background-position: 100% 50%;
                                    }
                                    100% {
                                        background-position: 0% 50%;
                                    }
                                }
                            </style>




                            <div class="agile_inner_drop_nav_info p-1">
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                                               class="dropdown-item"
                                               href="<?php echo e(route('FirstFashion.allShirt')); ?>">All Product</a>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="dropdown-divider"></div>
                                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                                               class="dropdown-item"
                                               href="<?php echo e(route('FirstFashion.ShirtbyCat', ['cat_id' => $c->cat_id])); ?>"><?php echo e($c->cat_name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>












                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link" role="button"
                           href="<?php echo e(route('FirstFashion.gallery')); ?>"
                        ><b>Gallery</b></a>
                    </li>
                    <li class="nav-item">
                        <a style="font-size: 20px" class="nav-link"
                        ><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a style="font-size: 20px" class="nav-link"
                        ><b>About Us</b></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //navigation -->

<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/partials/homepageNav.blade.php ENDPATH**/ ?>