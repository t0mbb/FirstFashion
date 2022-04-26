<script src="//code.jquery.com/jquery-3.5.1.slim.min.js"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $(".filter-button").click(function(){
            var value = $(this).attr('data-filter');

            if(value == "all")
            {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            }
            else
            {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });
</script>
<?php $__env->startSection('main'); ?>

<!------ Include the above in your HEAD tag ---------->
<style>
    main{
        background-color :black;
    }
    .gallery-title
    {
        text-align: center;
        font-weight: 500;
        margin-bottom: 70px;
        font-size: 40px;
        color:whitesmoke;
        text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
    }
    .gallery-title:after {
        content: "";
        position: absolute;
        width: 7.5%;
        left: 46.5%;
        height: 45px;

    }
    .filter-button
    {
        font-size: 18px;
        border: 0.7px solid #000000;
        border-radius: 10px;
        text-align: center;
        color: black;
        margin-bottom: 30px;
        background: linear-gradient(-30deg, #ee7752, #FFC312, #ffff00, #23d5ab);
        background-size: 100% 200%;

        text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
        margin-left: 15px;
    }

    .filter-button:hover
    {
        font-size: 18px;
        border: 1px solid #42B32F;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #42B32F;

    }
    .btn-default:active .filter-button:active
    {
        background-color: #42B32F;
        color: white;
    }

    .port-image
    {
        width: 100%;
    }

    .gallery_product
    {
        margin-bottom: 30px;
    }


    .popup {
        position: fixed;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.75);
        opacity: 0;
        -webkit-transition: opacity .5s ease-in-out .2s;
        transition: opacity .5s ease-in-out .2s;
    }
    .popup.pop {
        opacity: 1;
        -webkit-transition: opacity .2s ease-in-out 0s;
        transition: opacity .2s ease-in-out 0s;
    }
    .popup.pop figure {
        margin-top: -30px;
        margin-left: 80px;
        opacity: 1;
    }
    .popup figure {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        margin-top: 30px;
        opacity: 0;
        -webkit-animation: poppy 500ms linear both;
        animation: poppy 500ms linear both;
    }
    .popup figure img {
        position: relative;
        z-index: 2;
        border-radius: 15px;
        width: 560px;
        height: 703px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
    }
    .popup figure figcaption {
        position: absolute;
        bottom: 50px;
        background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
        background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
        z-index: 2;
        width: 100%;
        border-radius: 0 0 15px 15px;
        padding: 100px 20px 20px 20px;
        color: whitesmoke;
        text-align :center;
        font-family: 'Open Sans', sans-serif;
        text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
        font-size: 27px;
    }
    .popup figure figcaption small {
        font-size: 20px;
        text-align: center;
        display: block;
        text-transform: uppercase;
        margin-top: 12px;
        text-indent: 3px;
        opacity: .7;
        letter-spacing: 1px;

    }
    .popup figure .shadow {
        position: relative;
        z-index: 1;
        top: -15px;
        margin: 0 auto;
        background-position: center bottom;
        background-repeat: no-repeat;
        width: 98%;
        height: 50px;
        opacity: .6;
        -webkit-filter: blur(15px) contrast(2);
        filter: blur(15px) contrast(2);
    }
    .popup .close {
        position: absolute;
        z-index: 3;
        top: 10px;
        right: 10px;
        width: 25px;
        height: 25px;
        cursor: pointer;
        background: url(#close);
        border-radius: 25px;
        background: rgba(0, 0, 0, 0.1);
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
    }
    .popup .close svg {
        width: 100%;
        height: 100%;
    }

    @-webkit-keyframes poppy {
        0% {
            -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
        }
        3.4% {
            -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
        }
        4.3% {
            -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
        }
        4.7% {
            -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
        }
        6.81% {
            -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
        }
        8.61% {
            -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
        }
        9.41% {
            -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
        }
        10.21% {
            -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
        }
        12.91% {
            -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
        }
        13.61% {
            -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
        }
        14.11% {
            -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
        }
        17.22% {
            -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
        }
        17.52% {
            -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
        }
        18.72% {
            -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
        }
        21.32% {
            -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
        }
        24.32% {
            -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
        }
        25.23% {
            -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
        }
        28.33% {
            -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
        }
        29.03% {
            -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
        }
        29.93% {
            -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
        }
        35.54% {
            -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
        }
        36.74% {
            -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
        }
        39.44% {
            -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
        }
        41.04% {
            -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
        }
        44.44% {
            -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
        }
        52.15% {
            -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
        }
        59.86% {
            -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
        }
        61.66% {
            -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
        }
        63.26% {
            -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
        }
        75.28% {
            -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
        }
        83.98% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
        }
        85.49% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
        }
        90.69% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
        }
        100% {
            -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
        }
    }

    @keyframes  poppy {
        0% {
            -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
        }
        3.4% {
            -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
        }
        4.3% {
            -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
        }
        4.7% {
            -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
        }
        6.81% {
            -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
        }
        8.61% {
            -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
        }
        9.41% {
            -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
        }
        10.21% {
            -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
        }
        12.91% {
            -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
        }
        13.61% {
            -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
        }
        14.11% {
            -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
        }
        17.22% {
            -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
        }
        17.52% {
            -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
        }
        18.72% {
            -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
        }
        21.32% {
            -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
        }
        24.32% {
            -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
        }
        25.23% {
            -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
        }
        28.33% {
            -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
        }
        29.03% {
            -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
        }
        29.93% {
            -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
        }
        35.54% {
            -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
        }
        36.74% {
            -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
        }
        39.44% {
            -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
        }
        41.04% {
            -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
        }
        44.44% {
            -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
        }
        52.15% {
            -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
        }
        59.86% {
            -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
        }
        61.66% {
            -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
        }
        63.26% {
            -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
        }
        75.28% {
            -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
        }
        83.98% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
        }
        85.49% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
        }
        90.69% {
            -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
        }
        100% {
            -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
        }
    }

</style>

<div class="container" style="margin-top: -75px;">
    <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12" >
            <h1 class="gallery-title" style="margin-bottom: 10px;">Gallery</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All product</button>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <button class="btn btn-default filter-button" data-filter="<?php echo e($cat->cat_id); ?>"><?php echo e($cat->cat_name); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <br/>

            <div class="gallery_product filter all" style="margin-top : -30px;">
            </div>


        <?php $__currentLoopData = $polo2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 2">
            <figure>
                <img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" style="width: 300px; height: 400px;" alt="" />
                <figcaption style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;">
                    <a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_name); ?></a>
                    <small><a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: greenyellow;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_price); ?>$</a></small>
                </figcaption>
            </figure>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $shirt1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 1">
                <figure>
                    <img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" style="width: 300px; height: 400px;"alt="" />
                    <figcaption style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;">
                        <a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_name); ?></a>
                        <small><a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: greenyellow;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_price); ?>$</a></small>
                    </figcaption>
                </figure>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $sweater3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 3">
                <figure>
                    <img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" style="width: 300px; height: 400px;" alt="" />
                    <figcaption style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;">
                        <a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_name); ?></a>
                        <small><a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: greenyellow;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_price); ?>$</a></small>

                    </figcaption>
                </figure>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $tshirt4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter 4">
                <figure>
                    <img src="<?php echo e(asset('storage/images/shirt/' .$s->shirt_image)); ?>" style="width: 300px; height: 400px;" alt="" />
                    <figcaption style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;">
                        <a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: whitesmoke;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_name); ?></a>
                        <small><a style="text-shadow: 0 -1px 4px #FFF, 0 -2px 5px #fcb216, 0 -10px 10px #FF5549, 0 -18px 40px #FF5549,0 -10px 60px #FF5549;
                color: greenyellow;
                font-size: 20px;
                margin-top:10px;" href="<?php echo e(route('FirstFashion.detailShirt', ['shirt_id' => $s->shirt_id])); ?>"><?php echo e($s->shirt_price); ?>$</a></small>


                    </figcaption>
                </figure>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>
<script>
    popup = {
        init: function(){
            $('figure').click(function(){
                popup.open($(this));
            });

            $(document).on('click', '.popup img', function(){
                return false;
            }).on('click', '.popup', function(){
                popup.close();
            })
        },
        open: function($figure) {
            $('.gallery').addClass('pop');
            $popup = $('<div class="popup" />').appendTo($('body'));
            $fig = $figure.clone().appendTo($('.popup'));
            $bg = $('<div class="bg" />').appendTo($('.popup'));
            $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
            $shadow = $('<div class="shadow" />').appendTo($fig);
            src = $('img', $fig).attr('src');
            $shadow.css({backgroundImage: 'url(' + src + ')'});
            $bg.css({backgroundImage: 'url(' + src + ')'});
            setTimeout(function(){
                $('.popup').addClass('pop');
            }, 10);
        },
        close: function(){
            $('.gallery, .popup').removeClass('pop');
            setTimeout(function(){
                $('.popup').remove()
            }, 100);
        }
    }
    popup.init()
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('masters.homepageMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/t0mbb./Documents/c03/FirstFashion/resources/views/FirstFashion/homepage/gallery.blade.php ENDPATH**/ ?>