<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SE-Sestems</title>
<!--

Template 2089 Meteor

http://www.tooplate.com/view/2089-meteor

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontAwesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/hero-slider.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/tooplate-style.css')}}">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
           .modal:before {
            content: '';
            display: inline-block;
            height: 100%;
            vertical-align: middle;
        }
          
        .modal-dialog {
            display: inline-block;
            vertical-align: middle;
            margin-left: 25%;
        }
          
        .modal .modal-content {
            padding: 20px 20px 20px 20px;
            -webkit-animation-name: modal-animation;
            -webkit-animation-duration: 0.5s;
            animation-name: modal-animation;
            animation-duration: 0.5s;
        }
      
        @media screen and (max-width: 768px) {
  .modal:before {
    display: inline-block;
    vertical-align: top;
    content: " ";
    height: 25%;

  }
  .modal-dialog {
            display: inline-block;
            vertical-align: top;
            margin-left:0%;
        }
 .bar{
     margin-top:100px;
 }
}
    @media only screen and (max-width: 1180px) {
  .pushdownlogo {
    margin-top: 25px;
  }

} 

        </style>
    </head>

<body>
    <div class="header bg-wheat">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a href="#" class="navbar-brand scroll-top">
                        <div class="logo"></div>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li ><a href="#" class="scroll-top"><b class="text-black">Home</b></a></li>
                          <li><a href="#" class="scroll-link" data-id="services"><b class="text-black">Services</b></a></li>
                        <li><a href="#" class="scroll-link" data-id="what-we-do"><b class="text-black">About Us</b></a></li>
                       
                        <li><a href="#" class="scroll-link" data-id="portfolio"><b class="text-black">Our Work</b></a></li>
                        <li><a href="#" class="scroll-link" data-id="blog"><b class="text-black">Blog</b></a></li>
                        
                        
                        
                        <li><a href="#" class="scroll-link" data-id="contact"><b class="text-black">Contact Us</b></a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right bar" style="position:relative;top:-100px;right:0px">
                       
                        <li><a href="{{ route('login') }}"><b class="text-black">login</b></a></li>
                        <li><a href="{{ route('register') }}"><b class="text-black">Register</b></a></li>
                      </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->