@extends('masters.adminMaster')
@section('main')
    <?php
    use Carbon\Carbon;
    ?>
    <!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Mail :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <link href="css/minimal.css" rel="stylesheet">
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container" style="margin-top: -100px;">
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="mail-w3agile">
                <!-- page start-->
                <div class="row">
                    <div class="col-sm-3 com-w3ls">
                        <section class="panel">
                            <div class="panel-body">
                                <a href="mail_compose.html"  class="btn btn-compose">
                                    Compose Mail
                                </a>
                                <ul class="nav nav-pills nav-stacked mail-nav">
                                    <li class="active"><a href="{{route('FirstFashion.MailAdminContact')}}"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-danger pull-right inbox-notification">{{count($contact)}}</span></a></li>
                                </ul>
                            </div>
                        </section>

                        <section>
                        </section>
                    </div>
                    <div class="col-sm-9 mail-w3agile">
                        <section class="panel">
                            <header class="panel-heading wht-bg">
                                <h4 class="gen-case">Inbox ({{count($contact)}})
                                    <form action="#" class="pull-right mail-src-position">
                                    </form>
                                </h4>
                            </header>
                            <div class="panel-body minimal">
                                <div class="mail-option">
                                    <div class="chk-all">

                                        <div class="btn-group">
                                            <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown"
                                               class="btn mini tooltips">
                                                <i class=" fa fa-refresh"></i>
                                            </a>
                                        </div>



                                    </div>
                                    <div class="table-inbox-wrap ">
                                        <table class="table table-inbox table-hover">
                                            <tbody>

    @foreach($contact as $c)
                                                <tr class="unread">
                                                    <td class="inbox-small-cells">
                                                        <input type="checkbox" class="mail-checkbox">
                                                    </td>
                                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                                    <td class="view-message  dont-show">You have new feedback</td>
                                                    <td class="view-message ">From {{$c->email}}</td>
                                                    <td class="view-message ">{{$c->name}}</td>
                                                    <td class="view-message ">Message :{{$c->message}}</td>
                                                    <td class="view-message  text-right">{{$currentTime = Carbon::now()}}</td>
                                                </tr>
    @endforeach
                                            </tbody>

                                        </table>

                                    </div>
                                </div>



                                <!-- page end-->
                            </div>
                        </section>

        </section>
        <!--main content end-->
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>
</html>
@endsection
