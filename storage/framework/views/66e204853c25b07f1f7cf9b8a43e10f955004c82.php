<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="<?php echo e(route('FirstFashion.index')); ?>" class="logo" style="font-size: 25px ">
                <b>First Fashion</b>
            </a>
        </div>

        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle"
                       style="padding: 2px;
                              margin-right: 20px;">
                        <img alt="" src="<?php echo e(asset('backend/images/2.png')); ?>">
                        <span class="username">
                            <?php echo e(\Illuminate\Support\Facades\Session::has('ad_user')?
                          \Illuminate\Support\Facades\Session::get('ad_user') : ''); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#" style="font-size: 17px">
                                <i class=" fa fa-suitcase" style="font-size: 17px"></i>
                                Profile</a></li>
                        <li><a href="#" style="font-size: 17px">
                                <i class="fa-solid fa-gear" style="font-size: 17px"></i>
                                Settings</a></li>
                        <li><a href="<?php echo e(route('auth.signout')); ?>" style="font-size: 17px">
                                <i class="fa-solid fa-right-from-bracket" style="font-size: 17px"></i>
                                Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="<?php echo e(route('FirstFashion.index')); ?>" style="font-size: 25px">
                            <i class="fa fa-dashboard" style="font-size: 25px"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" style="font-size: 25px">
                            <i class="fa-solid fa-lock" style="font-size: 25px"></i>
                            <span>ADMIN</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php echo e(route('FirstFashion.admin_manager')); ?>" style="font-size: 20px">Admin Manager</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" style="font-size: 25px">
                            <i class="fa-solid fa-user" style="font-size: 25px"></i>
                            <span>CUSTOMER</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php echo e(route('FirstFashion.customer_manager')); ?>" style="font-size: 20px">Customer Manager</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" style="font-size: 25px">
                            <i class="fa-solid fa-box-archive" style="font-size: 25px"></i>
                            <span>CATEGORY</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php echo e(route('FirstFashion.category_manager')); ?>" style="font-size: 20px">Category Manager</a></li>
                            <li><a href="<?php echo e(route('FirstFashion.createCategory')); ?>" style="font-size: 20px">New Category</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" style="font-size: 25px">
                            <i class="fa-solid fa-shirt" style="font-size: 25px"></i>
                            <span>SHIRT</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?php echo e(route('FirstFashion.shirt_manager')); ?>" style="font-size: 20px">Shirt Manager</a></li>
                            <li><a href="<?php echo e(route('FirstFashion.createShirt')); ?>" style="font-size: 20px">New Shirt</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
        </section>
    </section>
</section>
<?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/partials/adminNav.blade.php ENDPATH**/ ?>