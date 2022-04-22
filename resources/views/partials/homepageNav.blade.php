
<!-- header-bottom-->
<div class="header-bot my-md-4 my-3" id="site-header" style="padding-right: 100px;">
    <div class="container">
        <div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
            <!-- logo -->
            <div class="col-lg-3 col-md-3 logo_agile">
                <h1>
                    <img src="{{asset('image/logo_transparent.png')}}" style="width: 100px; margin-right: 10px;" alt="">
                    <a href="{{route('FirstFashion.homepage')}}"
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
            <div class="col-lg-9 col-md-8 header">
                <div class="row">
                    <!-- search -->
                    <div class="col-lg-9 col-sm-8 agileits_search"style="padding-left : 130px;padding-top : 10px;">

                        <form class="form-inline"
                              method="get" style="max-width:600px;">
                            @csrf
                            <input class="form-control" type="text" name="search"
                                   placeholder="Search for shirts and more" aria-label="Search"
                                   value="{{old('search')?? ''}}">
                            <button class="btn btn-outline-success" type="submit">
                                <i class="bi bi-search-heart" style="font-size: 25px" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <!-- //search -->
                    <!-- cart details -->
                    <div class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
                        <div class="col-lg-8 col-sm-7 header-right ml-auto text-sm-right text-center" style="padding-left : 50px;padding-top: 5px;">
                            {{--                header list--}}
                            <ul class="top-header-lists">
                                <li style="list-style: none">
                                    <a href="{{route('FirstFashion.registerCustomer')}}" style="font-size: 20px; color: whitesmoke;text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;">
                                        <i class="fa-solid fa-right-to-bracket"></i><b>Register</b>
                                    </a>
                                </li>
                            </ul>
                        </div>
{{--                        <div class="col-lg-6 col-sm-5 header-right ml-auto text-sm-right text-center">--}}
{{--                            --}}{{--                header list--}}
{{--                            <ul class="top-header-lists">--}}
{{--                                <li style="list-style: none">--}}
{{--                                    <a href="" style="font-size: 20px; color: orangered ">--}}
{{--                                        <i class="fa-solid fa-cart-shopping"></i>--}}
{{--                                        <b>Cart</b>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
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
                        <a style="font-size: 20px" class="nav-link" href="{{route('FirstFashion.homepage')}}"><b>Home</b>
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a style="font-size: 20px" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            <b>Categories</b>
                        </a>
                        <div class="dropdown-menu " aria-labelledby="navbarDropdown" style="background: linear-gradient(-30deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);text-align: left; margin-left: 50px; padding-left: -50px">
                            <div class="agile_inner_drop_nav_info p-1">
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                               class="dropdown-item"
                               href="{{route('FirstFashion.allShirt')}}">All Product</a>
                            <div class="dropdown-divider"></div>
                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                               class="dropdown-item"
                               href="#">Coat</a>
                                            <div class="dropdown-divider"></div>
                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                               class="dropdown-item"
                               href="#">Polo</a>
                                            <div class="dropdown-divider"></div>
                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                               class="dropdown-item"
                               href="#">Sweater</a>
                                            <div class="dropdown-divider"></div>
                            <a style="color:white;text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;"
                               class="dropdown-item"
                               href="#">T-shirt</a>
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

