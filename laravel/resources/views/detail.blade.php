<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Freelancer - Start Bootstrap Theme</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("static/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="{{asset("static/css/freelancer.min.css")}}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{asset("static/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>
<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Shock Comment</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about"></a>
                </li>
                <li class="page-scroll">
                    <a href="#contact"></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header style="height: 800px">
    <div class="container" id="maincontent" tabindex="-1" style="height: 100%">
        <div class="row">
            <div class="col-md-7 col-md-offset-2">
					<p>1111111111111</p>
                    <p style="word-break: break-all;
  word-wrap: break-word;">{{ $name }}</p>
                  <!--  <p style="word-break: break-all;
  word-wrap: break-word;">{{ $stories->title }}</p> -->


               <?php foreach($stories as $story): ?>
                <p style="word-break: break-all;
  word-wrap: break-word;">{{ $story->text }}</p>
                <?php endforeach; ?>
                {{--@foreach($stories as $story)--}}
                {{--<div>--}}
                {{--<h2>{{ $story->title }}</h2>--}}
                {{--<div>{{ $story->text }}</div>--}}
                {{--</div>--}}
                {{--@endforeach--}}

            </div>
            <div class="col-lg-12">
                <!--                     <img class="img-responsive" src="img/profile.png" alt="">
-->
                {{--<div class="intro-text">--}}
                    {{--<h1 class="name">Start Shock</h1>--}}
                    {{--<hr class="star-light">--}}
                    {{--<form action="" method="POST" role="form">--}}
                        {{--<div class="form-group col-md-4 col-md-offset-4 floating-label-form-group center controls">--}}
                            {{--<label for="name"></label>--}}
                            {{--<input type="text" class="form-control" placeholder="Start Words" id="name"--}}
                            {{-->--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                        {{--<div class="form-group col-xs-12" style="margin-top: 20px">--}}
                            {{--<button type="submit" style="width: 200px" class="btn btn-primary btn-lg">Send</button>--}}
                        {{--</div>--}}
                    {{--</form  >--}}
                {{--</div>--}}

            </div>
        </div>
    </div>
</header>
</div>
<!-- jQuery -->
<script src="{{asset("static/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset("static/bootstrap/js/bootstrap.min.js")}}"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- Theme JavaScript -->
<script src="js/freelancer.min.js"></script>
</body>

</html>
