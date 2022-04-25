@extends('masters.homepageMaster')

@section('main')
    <link rel="stylesheet" href="{{asset('css/aboutus.css')}}">

{{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>--}}
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    <!------ Include the above in your HEAD tag ---------->


{{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}

    <div class="container" style="padding-bottom: 50px">
        <div class="row" id="contatti">
            <div class="container mt-5" >

                <div class="row" style="height:450px;">
                    <div class="col-md-6 maps" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5343.480492313702!2d105.78725852670307!3d21.02304046669612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9f983e67af%3A0x41721163aff0f497!2zQ2h1bmcgY8awIEdvbGRlbiBQYXJrIETGsMahbmcgxJDDrG5oIE5naOG7hw!5e0!3m2!1svi!2s!4v1646664153637!5m2!1svi!2s" width="150" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6">
                        <h2 style="text-align: center" class="text-uppercase mt-3 font-weight-bold text-white">Contact Us</h2>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="Phone number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <input class="form-control mt-2" list="datalistOptions"
                                           placeholder="Gender">
                                    <datalist id="datalistOptions">
                                        <option value="Female">
                                        <option value="Male">
                                        <option value="Other">
                                    </datalist>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your Message" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-white">
                            <h3 class="text-uppercase mt-4 font-weight-bold">First Fashion</h3>
                            <i class="fas fa-phone"></i> <a href="tel:+"> +84 865798602 (QuanMinh)</a><br>
                            <p>&nbsp</p>
                            <i class="fa fa-envelope"></i> <a href=""> FirtsFashion@gmail.com</a><br>
                            <p>&nbsp</p>
                            <i class="fa fa-map"></i> <a href=""> Golden Park Tower, 2 Pham Van Bach, Cau Giay District, Ha Noi City</a><br>
                            <p>&nbsp</p>
                            <i class="fas fa-globe"></i> FirstFashion.com<br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
