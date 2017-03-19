<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ristorante Con Fusion</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("static/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("static/css/freelancer.min.css")}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset("static/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    {{--<link href="css/mystyle.css" rel="stylesheet">--}}
    <link href="{{asset("static/css/font-awesome.min.css")}}" rel="stylesheet">
    <link href="{{asset("static/css/mystyle.css")}}" rel="stylesheet">

    <link href="{{asset("static/css/bootstrap-social.css")}}" rel="stylesheet">

    {{--<link rel="stylesheet" href="css/font-awesome.min.css">--}}
    {{--<link rel="stylesheet" href="css/bootstrap-social.css">--}}
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
{{--<nav class="navbar navbar-inverse navbar-fixed-to " role="navigation">--}}
    {{--<div class="container">--}}
        {{--<a class="navbar-brand" href="#">Title</a>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li class="active">--}}
                {{--<a href="#">Home</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">Link</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expended="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">
                <!--                     <img src="img/logo.png" alt="Image" height="30" width="41">
                 -->                </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
                    </a>
                </li>
                <li>
                    <a href="#">
                         Shock News
                    </a>
                </li>
                {{--<li class="dropdown">--}}
                    {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Menu--}}
                        {{--<span class="caret"></span></a>--}}
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li> <a href="#">Appetizers</a></li>--}}
                        {{--<li> <a href="#">Main courses</a></li>--}}
                        {{--<li> <a href="#">Desserts</a></li>--}}
                        {{--<li> <a href="#">Drinks</a></li>--}}
                        {{--<li role="separator" class="divider"></li>--}}
                        {{--<li class="dropdown-header">Specials</li>--}}
                        {{--<li><a href="#">Lunch Buffet</li>--}}
                        {{--<li><a href="#">Weekend</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--<a href="contacts.html">--}}
                        {{--<i class="fa fa-envelope-o"></i> Contact</a>--}}
                {{--</li>--}}
            </ul>
            <!-- <form class="form-inline navbar-form navbar-right">
                <div class="form-group">
                    <label class="sr-only" for="email">email</label>
                    <input type="text" placeholder="Email" id="email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="password">Password</label>
                    <input type="text" placeholder="Password" id="password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remeber me
                    </label>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form> -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <!-- <a data-toggle="modal" data-target="#loginModal"> -->
                    <!-- <a id="loginbtn">
                    <span class="glyphicon glyphicon-log-in"> </span> Login
                </a> -->
                </li>
            </ul>
        </div>
    </div>
</nav>










<div class="container">


    <?php foreach($stories as $story): ?>
        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center><a href="#">You may like these also</a></h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        {{--<a href="#">--}}
                        {{--<img class="media-object img-thumbnail" src="img/uthappizza.png" alt="Uthappizza">--}}
                        {{--</a>--}}
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading"> {{ $story->title }} </h2>

                            {{--<span class="label label-danger label-xs">Hot</span> <span class="badge">--}}

                            {{ $story->score }}</span></h4>
                            <p> {{ $story->text == "" ? $story->title : $story->text }}</p>
                            <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>

            </div>
        </div>

    <?php endforeach; ?>




    {{--<div class="row row-content">--}}
        {{--<div class="col-xs-12 col-sm-3 col-sm-push-9">--}}
            {{--<p style="padding:20px;"></p>--}}
            {{--<h3 align=center><a href="#">You may like these also</a></h3>--}}
        {{--</div>--}}
        {{--<div class="col-xs-12 col-sm-9 col-sm-pull-3">--}}
            {{--<div class="media">--}}
                {{--<div class="media-left media-middle">--}}
                    {{--<a href="#">--}}
                    {{--<img class="media-object img-thumbnail" src="img/uthappizza.png" alt="Uthappizza">--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="media-body">--}}
                    {{--<h2 class="media-heading">Uthappizza--}}
                        {{--<span class="label label-danger label-xs">Hot</span> <span class="badge">$4.99</span></h4>--}}
                        {{--<p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>--}}
                        {{--<p><a class="btn btn-primary btn-xs" ="#">More &raquo;</a></p>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}





</div>
<footer class="row-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm-offset-1">
                <h5>Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    {{--<li><a href="#">About</a></li>--}}
                    {{--<li><a href="#">Menu</a></li>--}}
                    {{--<li><a href="#">Contact</a></li>--}}
                </ul>
            </div>
            <div class="col-xs-6 col-sm-5">
                <h5>Our Address</h5>
                <address>
                    121, Shanghai
                    <br> Shanghai
                    <br> CHINA
                    <br>
                    <i class="fa fa-phone"></i>: +852 1234 5678
                    <br>
                    <i class="fa fa-fax"></i>: +852 8765 4321
                    <br>
                    <i class="fa fa-envelope"></i>:
                    <a href="mailto:new@shock.net">new@shock.net</a>
                </address>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="nav navbar-nav" style="padding: 120px 10px 10px 10px;">
                    <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                </div>
            </div>
            <div class="col-xs-12">
                <p style="padding:10px;"></p>
                <p align=center>© Copyright 2017 shock news</p>
            </div>
        </div>
    </div>
</footer>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $(document).ready(function() {
        $("#mycarousel").carousel({interval:2000});
        $("#carouselpause").click(function() {
            $("#mycarousel").carousel('pause');
        });
        $("#carouselplay").click(function() {
            $("#mycarousel").carousel('cycle');
        });
    });

    $("#reservebtn").click(function() {
        $("#reservemodal").modal("show");
    });

    $("#loginbtn").click(function() {
        $("#loginModal").modal("show");
    });

</script>
</body>

</html>
