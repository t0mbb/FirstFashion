<?php $__env->startSection('main'); ?>
    <style type="text/css">

        @import  url('https://fonts.googleapis.com/css?family=Dosis:400,600,700,800');
        @font-face {
            font-family: 'Uni Sans';
            src: url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168547/unisans-font/UniSansHeavyCAPS.woff2') format('woff2'), url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168547/unisans-font/UniSansHeavyCAPS.woff') format('woff'), url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168548/unisans-font/UniSansHeavyCAPS.ttf') format('truetype');
            font-weight: 900;
            font-style: normal;
        }
        @font-face {
            font-family: 'Uni Sans';
            src: url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168545/unisans-font/UniSansThinCAPS.woff2') format('woff2'), url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168545/unisans-font/UniSansThinCAPS.woff') format('woff'), url('https://res.cloudinary.com/muhammederdem/raw/upload/v1536168548/unisans-font/UniSansThinCAPS.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        body {
            font-family: 'Uni Sans', sans-serif;
            font-weight: 500;
        }
        * {
            box-sizing: border-box;
        }
        img {
            max-width: 100%;
        }
        a {
            text-decoration: none;
        }
        .icon {
            display: inline-block;
            width: 1em;
            height: 1em;
            stroke-width: 0;
            stroke: currentColor;
            fill: currentColor;
        }
        .wrapper {
            width: 100%;
            height: 100vh;
            min-height: 750px;
            background: url(https://res.cloudinary.com/muhammederdem/image/upload/v1536405234/starwars/death_star.jpg) center no-repeat;
            background-size: cover;
            position: relative;
            overflow: hidden;
            display: flex;
        }
        @media  screen and (max-width: 992px) {
            .wrapper {
                height: auto;
                min-height: 100vh;
            }
        }
        .content {
            height: 600px;
            margin: auto;
            width: 100%;
            max-width: 1050px;
            display: flex;
            align-items: center;
            position: relative;
        }
        @media  screen and (max-width: 1200px) {
            .content {
                max-width: 920px;
            }
        }
        @media  screen and (max-width: 992px) {
            .content {
                max-width: 920px;
                margin-top: 100px;
                height: auto;
                min-height: 100vh;
            }
        }
        @media  screen and (max-width: 767px) {
            .content {
                margin-top: 20px;
            }
        }
        @media  screen and (max-width: 576px) {
            .content {
                margin-top: 20px;
                margin-bottom: 20px;
            }
        }
        .bg-shape {
            height: 100%;

            box-shadow: 0px 30px 139px 0px rgba(10, 22, 31, 0.26);
            border-radius: 30px;
            padding: 45px 40px;
            width: 50%;
            position: absolute;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
        }
        @media  screen and (max-width: 1200px) {
            .bg-shape {
                width: 45%;
            }
        }
        @media  screen and (max-width: 992px) {
            .bg-shape {
                width: 90%;
                height: 290px;
                align-items: flex-start;
                padding: 50px;
                left: 50%;
                transform: translateX(-50%);
            }
        }
        @media  screen and (max-width: 767px) {
            .bg-shape {
                padding: 30px;
                width: 95%;
                border-radius: 20px;
            }
        }
        @media  screen and (max-width: 576px) {
            .bg-shape {
                height: 200px;
                padding: 30px;
            }
        }
        .bg-shape img {
            object-fit: contain;
            width: 510px;
            display: block;
            object-position: left center;
            opacity: 0.2;
            transform: rotate(-90deg) translateY(-50%);
            max-width: inherit;
            left: 10px;
            position: absolute;
        }
        @media  screen and (max-width: 1200px) {
            .bg-shape img {
                width: 430px;
                left: 10px;
            }
        }
        @media  screen and (max-width: 992px) {
            .bg-shape img {
                transform: none;
                width: 100%;
                position: relative;
                left: auto;
                margin-left: auto;
                margin-right: auto;
                object-fit: contain;
                height: 100%;
                object-position: top center;
            }
        }
        .next, .prev {
            z-index: 22;
            display: inline-flex;
            border: none;
            width: 61px;
            height: 61px;
            border-radius: 50%;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            position: absolute;
            top: 50%;
            outline: none;
            cursor: pointer;
        }
        .next.disabled, .prev.disabled {
            cursor: not-allowed;
        }
        .next:focus, .prev:focus {
            outline: none;
        }
        @media  screen and (max-width: 992px) {
            .next, .prev {
                top: 170px;
            }
        }
        .prev {
            left: -30%;
            transform: translate(-100%, -50%);
        }
        @media  screen and (max-width: 1200px) {
            .prev {
                left: -21%;
            }
        }
        @media  screen and (max-width: 992px) {
            .prev {
                left: 0;
                transform: translate(-50%, -50%);
            }
        }
        @media  screen and (max-width: 576px) {
            .prev {
                transform: translate(20%, -50%);
            }
        }
        .next {
            right: 0;
            transform: translate(50%, -50%);
        }
        @media  screen and (max-width: 576px) {
            .next {
                transform: translate(-20%, -50%);
            }
        }
        .product-slider {
            width: 75%;
            height: 85%;
            border-radius: 30px;
            box-shadow: 0 28px 79px 0 rgba(10, 22, 31, 0.35);
            position: absolute;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
        }
        @media  screen and (max-width: 1200px) {
            .product-slider {
                width: 80%;
            }
        }
        @media  screen and (max-width: 992px) {
            .product-slider {
                width: 80%;
                left: 50%;
                transform: translateX(-50%);
                height: auto;
                position: relative;
                top: 0;
                margin-top: 170px;
                margin-bottom: 100px;
            }
            .product-slider br {
                display: none;
            }
        }
        @media  screen and (max-width: 767px) {
            .product-slider {
                border-radius: 20px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-slider {
                width: 85%;
                margin-top: 130px;
            }
        }
        .product-slider__wrp {
            height: 100%;
        }
        .product-slider__item {
            position: relative;
            height: 100%;
            width: 100%;
        }
        @media  screen and (max-width: 992px) {
            .product-slider__item {
                height: auto;
            }
        }
        .product-slider__item.swiper-slide-active .product-slider__content > * {
            opacity: 1;
            transform: none;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(1) {
            transition-delay: 0s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(2) {
            transition-delay: 0.2s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(3) {
            transition-delay: 0.4s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(4) {
            transition-delay: 0.6s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(5) {
            transition-delay: 0.8s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(6) {
            transition-delay: 1s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(7) {
            transition-delay: 1.2s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(8) {
            transition-delay: 1.4s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(9) {
            transition-delay: 1.6s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(10) {
            transition-delay: 1.8s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(11) {
            transition-delay: 2s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(12) {
            transition-delay: 2.2s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(13) {
            transition-delay: 2.4s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(14) {
            transition-delay: 2.6s;
        }
        .product-slider__item.swiper-slide-active .product-slider__content > *:nth-child(15) {
            transition-delay: 2.8s;
        }
        .product-slider__item.swiper-slide-active circle {
            animation: progress 1s ease-out forwards;
            animation-delay: 0.5s;
            opacity: 0.75;
        }
        .product-slider__card {
            height: 100%;
            display: flex;
            align-items: center;
            width: 100%;
            transition: all 0.5s;
            overflow: hidden;
            position: relative;
            border-radius: 30px;
        }
        @media  screen and (max-width: 992px) {
            .product-slider__card {
                align-items: flex-start;
            }
        }
        @media  screen and (max-width: 767px) {
            .product-slider__card {
                border-radius: 20px;
            }
        }
        .product-slider__cover {
            border-radius: 30px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }
        @media  screen and (max-width: 767px) {
            .product-slider__cover {
                border-radius: 20px;
            }
        }
        .product-slider__content {
            color: #fff;
            padding-top: 1px;
            position: relative;
            z-index: 0;
            width: 100%;
            padding-left: 250px;
            padding-right: 80px;
        }
        @media  screen and (max-width: 1200px) {
            .product-slider__content {
                padding-left: 220px;
            }
        }
        @media  screen and (max-width: 992px) {
            .product-slider__content {
                padding: 20px 60px 100px;
                padding-top: 280px;
                text-align: center;
            }
        }
        @media  screen and (max-width: 767px) {
            .product-slider__content {
                padding: 20px 30px 50px;
                padding-top: 300px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-slider__content {
                padding-top: 220px;
                padding-left: 15px;
                padding-right: 15px;
            }
        }
        .product-slider__title {
            margin: 0;
            margin-bottom: 10px;
            font-weight: 900;
            font-size: 41px;
            line-height: 1.2em;
            letter-spacing: 2px;
            opacity: 0;
            transform: translateY(55px);
            transition: all 0.5s;
        }
        @media  screen and (max-width: 1200px) {
            .product-slider__title {
                font-size: 34px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-slider__title {
                font-size: 24px;
            }
        }
        .product-slider__price {
            display: block;
            font-size: 42px;
            opacity: 0;
            transform: translateY(55px);
            transition: all 0.5s;
        }
        @media  screen and (max-width: 1200px) {
            .product-slider__price {
                font-size: 36px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-slider__price {
                font-size: 30px;
            }
        }
        .product-slider__price sup {
            top: -20px;
            font-size: 65%;
        }
        .product-slider__cart {
            box-shadow: 0 7px 99px 0 rgba(204, 51, 66, 0.6);
            background-image: linear-gradient(-45deg, #cc3843 0%, #cb193f 100%);
            border: none;
            color: #fff;
            padding: 10px 30px;
            border-radius: 50px;
            min-height: 50px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 2px;
            margin-right: 40px;
            cursor: pointer;
        }
        @media  screen and (max-width: 768px) {
            .product-slider__cart {
                margin-right: 30px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-slider__cart {
                width: 100%;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 50px;
            }
        }
        .product-slider__fav {
            color: #888e94;
            background: none;
            border: none;
            position: relative;
            padding-left: 25px;
            outline: none;
            cursor: pointer;
        }
        .product-slider__fav:focus {
            outline: none;
        }
        .product-slider__fav .heart {
            display: block;
            position: absolute;
            left: 0;
            transform: translate(-50%, -50%) scale(0.7);
            top: 50%;
            pointer-events: none;
            width: 100px;
            height: 100px;
            background: url("https://res.cloudinary.com/muhammederdem/image/upload/v1536405215/starwars/heart.png") no-repeat;
            background-position: 0 0;
            cursor: pointer;
            transition: background-position 1s steps(28);
            transition-duration: 0s;
        }
        .product-slider__fav .heart.is-active {
            transition-duration: 1s;
            background-position: -2800px 0;
        }
        .product-slider__bottom {
            margin-top: 20px;
            opacity: 0;
            transform: translateY(55px);
            transition: all 0.5s;
        }
        .product-ctr {
            display: flex;
            align-items: center;
            min-height: 150px;
            margin-top: 40px;
            opacity: 0;
            transform: translateY(55px);
            transition: all 0.5s;
        }
        @media  screen and (max-width: 992px) {
            .product-ctr {
                justify-content: center;
            }
        }
        .product-ctr .hr-vertical {
            width: 1px;
            background: #9fa3a7;
            align-self: stretch;
            margin: 0 35px;
            flex-shrink: 0;
            opacity: 0.5;
        }
        @media  screen and (max-width: 767px) {
            .product-ctr {
                justify-content: center;
                flex-wrap: wrap;
                margin-bottom: 40px;
            }
            .product-ctr .hr-vertical {
                width: 100%;
                margin: 35px 0;
                height: 1px;
            }
        }
        @media  screen and (max-width: 767px) {
            .product-labels {
                width: 100%;
            }
        }
        .product-labels__checkbox {
            display: none;
        }
        .product-labels__checkbox:checked + .product-labels__txt {
            border-color: #cc3743;
            padding: 10px 13px;
        }
        .product-labels__title {
            font-family: 'Dosis', sans-serif;
            font-weight: 700;
            letter-spacing: 3px;
            font-size: 16px;
            margin-bottom: 10px;
        }
        .product-labels__group {
            display: flex;
            margin-bottom: 15px;
        }
        @media  screen and (max-width: 992px) {
            .product-labels__group {
                justify-content: center;
            }
        }
        .product-labels__group:last-child {
            margin-bottom: 0;
        }
        .product-labels__item {
            margin: 5px;
            cursor: pointer;
        }
        .product-labels__item:first-child {
            margin-left: 0;
        }
        .product-labels__txt {
            display: block;
            border: 2px solid transparent;
            font-size: 14px;
            padding: 10px 20px;
            padding-left: 0;
            border-radius: 50px;
            transition: all 0.3s;
            letter-spacing: 2px;
        }
        @keyframes  progress {
            0% {
                stroke-dasharray: 0 100;
            }
        }
        .product-inf {
            text-align: center;
        }
        @media  screen and (max-width: 767px) {
            .product-inf {
                width: 100%;
            }
        }
        .product-inf__percent {
            font-weight: 700;
            font-size: 22px;
            letter-spacing: 1px;
            margin-bottom: 12px;
            font-family: 'Dosis', sans-serif;
            position: relative;
        }
        .product-inf__percent circle {
            transform: rotate(180deg) scaleY(-1);
            transform-origin: 50%;
        }
        .product-inf__percent-txt {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .product-inf__title {
            font-family: 'Dosis', sans-serif;
            font-weight: 700;
            letter-spacing: 2px;
            font-size: 18px;
        }
        .product-img {
            position: absolute;
            z-index: 1;
            width: 300px;
            left: 25%;
            max-height: 500px;
            height: 100%;
            pointer-events: none;
            transition: all 1s;
            transform: translateX(-50%) translateY(5%);
        }
        @media  screen and (max-width: 1200px) {
            .product-img {
                width: 430px;
                left: 20%;
            }
        }
        @media  screen and (max-width: 992px) {
            .product-img {
                width: 430px;
                left: 50%;
                transform: translateX(-50%);
                top: 0;
                height: 350px;
            }
        }
        @media  screen and (max-width: 767px) {
            .product-img {
                width: 100%;
                max-width: 400px;
                top: 30px;
                height: 390px;
            }
        }
        @media  screen and (max-width: 576px) {
            .product-img {
                max-width: 300px;
                height: 300px;
            }
        }
        .product-img__item {
            display: flex;
            align-items: center;
            position: absolute;
            pointer-events: none;
            user-select: none;
            top: 50%;
            right: 0;
            transform: translateY(-50%) translateX(-130px);
            opacity: 0;
            transition: all 1s;
        }
        .product-img__item.active {
            opacity: 0.85;
            transform: translateY(-50%) translateX(0);
            transition-delay: 0.5s;
        }
        .product-img__item img {
            object-fit: contain;
            object-position: center right;
        }
        .social {
            position: absolute;
            bottom: 10px;
            right: 0;
            width: 100%;
            display: flex;
            padding: 20px 55px;
            justify-content: space-between;
        }
        @media  screen and (max-width: 576px) {
            .social {
                flex-direction: column;
                bottom: 0;
            }
        }
        .social__item {
            color: rgba(255, 255, 255, 0.75);
            font-family: 'Dosis', sans-serif;
            font-weight: 700;
            letter-spacing: 2px;
            line-height: 1em;
            display: flex;
            align-items: center;
            transition: all 0.3s;
        }
        .social__item:hover {
            color: #fff;
        }
        @media  screen and (max-width: 576px) {
            .social__item {
                margin-bottom: 10px;
            }
        }
        .social__img {
            width: 24px;
            margin-right: 15px;
        }
    </style>
    <style>
        .modal-confirm {
            color: #636363;
            width: 325px;
            font-size: 14px;
        }
        .modal-confirm .modal-content {
            padding: 20px;
            border-radius: 5px;
            border: none;
            background: #080808;
            color: whitesmoke;
        }
        .modal-confirm .modal-header {
            border-bottom: none;
            position: relative;
        }
        .modal-confirm h4 {
            text-align: center;
            font-size: 26px;
            margin: 30px 0 -15px;
        }
        .modal-confirm .form-control, .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px;
        }
        .modal-confirm .close {
            position: absolute;
            top: -5px;
            right: -5px;
        }
        .modal-confirm .modal-footer {
            border: none;
            text-align: center;
            border-radius: 5px;
            font-size: 13px;
        }
        .modal-confirm .icon-box {
            color: #fff;
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: -70px;
            width: 95px;
            height: 95px;
            border-radius: 50%;
            z-index: 9;
            background-image: linear-gradient(-45deg, #cc3843 0%, #cb193f 100%);
            padding: 15px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
        }
        .modal-confirm .icon-box i {
            font-size: 58px;
            position: relative;
            top: 3px;
        }
        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }
        .modal-confirm .btn {
            color: #fff;
            border-radius: 4px;
            background-image: linear-gradient(-45deg, #cc3843 0%, #cb193f 100%);
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border: none;
        }
        .modal-confirm .btn:hover, .modal-confirm .btn:focus {
            background-image: linear-gradient(-45deg, #cc3843 0%, #cb193f 100%);
            outline: none;
        }
    </style>
    <div class="wrapper" style="margin-top: -100px;">
        <div class="content">
            <div class="bg-shape">
                <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405214/starwars/logo.webp" alt="">
            </div>
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-confirm">
                    <div class="modal-content" style="margin-top: 137px;">
                        <div class="modal-header">
                            <div class="icon-box">
                                <i class="material-icons">&#xE876;</i>
                            </div>
                            <h4 class="modal-title w-100">Awesome!</h4>
                        </div>
                        <div class="modal-body">
                            <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                        </div>
                    </div>
                </div>
            </div>

            <?php $__currentLoopData = $shirt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="product-img">
                <div class="product-img__item" id="img4">
                    <img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" alt="star wars" class="product-img__img">
                </div>
            </div>


            <div class="product-slider" >
                <div class="product-slider__wrp swiper-wrapper">
                    <div class="product-slider__item swiper-slide" data-target="img4">
                        <div class="product-slider__card">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1536405223/starwars/item-4-bg.webp" alt="star wars" class="product-slider__cover">
                            <div class="product-slider__content">
                                <h1 class="product-slider__title">
                                    <?php echo e($s->shirt_name); ?> <br>
                                </h1>
                                <span class="product-slider__price"><?php echo e($s->shirt_price); ?>$</span>
                                <div class="product-ctr">
                                    <div class="product-labels">
                                        <div class="product-labels__title">SIZE</div>

                                        <div class="product-labels__group">
                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="type5" >
                                                <span class="product-labels__txt">S</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="type5" checked>
                                                <span class="product-labels__txt">M</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="type5" >
                                                <span class="product-labels__txt">L</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="type5" >
                                                <span class="product-labels__txt">XL</span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="hr-vertical"></span>
                                    <div class="product-inf">
                                        <div class="product-inf__percent">
                                            <div class="product-inf__percent-circle">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
                                                    <defs>
                                                        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                                                            <stop offset="0%" stop-color="#0c1e2c" stop-opacity="0" />
                                                            <stop offset="100%" stop-color="#cb2240" stop-opacity="1" />
                                                        </linearGradient>
                                                    </defs>
                                                    <circle cx="50" cy="50" r="47" stroke-dasharray="240, 300" stroke="#cb2240" stroke-width="4" fill="none"/>
                                                </svg>
                                            </div>
                                            <div class="product-inf__percent-txt">
                                                80%
                                            </div>
                                        </div>
                                        <span class="product-inf__title">Hot Selling Percent</span>
                                    </div>

                                </div>

                                <div class="product-slider__bottom" style="">
                                    <a href="#myModal" class="trigger-btn" data-toggle="modal">
                                    <button class="product-slider__cart">
                                        ADD TO CART
                                    </button>
                                    </a>
                                    <a href="<?php echo e(route('FirstFashion.download')); ?>">
                                    <button class="product-slider__fav js-fav"><span class="heart"></span> Download Documents Info</button>
                                    </a>
                                </div>



                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var swiper = new Swiper('.product-slider', {
            spaceBetween: 30,
            effect: 'fade',
            // initialSlide: 2,
            loop: false,
            navigation: {
                nextEl: '.next',
                prevEl: '.prev'
            },
            // mousewheel: {
            //     // invert: false
            // },
            on: {
                init: function(){
                    var index = this.activeIndex;

                    var target = $('.product-slider__item').eq(index).data('target');

                    console.log(target);

                    $('.product-img__item').removeClass('active');
                    $('.product-img__item#'+ target).addClass('active');
                }
            }

        });

        swiper.on('slideChange', function () {
            var index = this.activeIndex;

            var target = $('.product-slider__item').eq(index).data('target');

            console.log(target);

            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');

            if(swiper.isEnd) {
                $('.prev').removeClass('disabled');
                $('.next').addClass('disabled');
            } else {
                $('.next').removeClass('disabled');
            }

            if(swiper.isBeginning) {
                $('.prev').addClass('disabled');
            } else {
                $('.prev').removeClass('disabled');
            }
        });

        $(".js-fav").on("click", function() {
            $(this).find('.heart').toggleClass("is-active");
        });
    </script>
<?php $__env->stopSection(); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>


<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage/detailShirt.blade.php ENDPATH**/ ?>