<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delicious</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <!-- =======================================================
        Theme Name: Delicious
        Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body class="body">
<!--banner-->
<section id="banner">
    <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="{{ url('/') }}">Home</a>
                    <a href="#about" class="link">About</a>
                    <a href="#event" class="link">Event</a>
                    <a href="#menu-list" class="link">Menu</a>
                    <a href="#contact" class="link">Book a table</a>
                    @if (Auth::check())
                        <a href="{{ url('/admin') }}">Admin</a>

                    @endif
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @else

                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>

                    @endif
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon">☰</span>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="inner text-center">
                    <h1 class="logo-name">Salad Island</h1>
                    @if(Auth::check())
                        <h2> Wlecome {{ Auth::user()->name }}</h2>
                    @endif
                    <h2>Food To fit your lifestyle & health.</h2>
                    <p>Specialized in Algerian Cuisine!!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / banner -->
@yield('middle')
<!--/ event -->
@yield('menu')
<!--/ menu -->
<!-- contact -->
<section id="contact" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="header-h">Contact Us</h1>
                <p class="header-p">
                     </p>
            </div>
        </div>
        <div class="row msg-row">
            <div class="col-md-4 col-sm-4 mr-15">
                <div class="media-2">
                    <div class="media-left">
                        <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                    </div>
                    <div class="media-body">
                        <h4 class="dark-blue regular">Phone Numbers</h4>
                        <p class="light-blue regular alt-p">+440 875369208 - <span class="contacts-sp">Phone </span></p>
                    </div>
                </div>

            </div>
            <div class="col-md-8 col-sm-8">
                <form action="" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group label-floating is-empty">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>

                    </div>

                    <div class="col-md-6 col-sm-6 contact-form pad-form">
                        <div class="form-group">
                            <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="col-md-12 contact-form">
                        <div class="form-group label-floating is-empty">
                            <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                    </div>
                    <div class="col-md-12 btnpad">
                        <div class="contacts-btn-pad">
                            <button class="contacts-btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- / contact -->
<!-- footer -->
<footer class="footer text-center">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 text-center">
                <div class="widget">
                    <h4 class="widget-title">SaladIsland</h4>
                    <address>Created by:<br>ukcoding.com</address>
                    <div class="social-list">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <p class="copyright clear-float">
                        © ukcoding.com | Nour Latreche 2017

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<script src="{{asset('js/libs.js')}}">


</script>
<script>
  $(function () {
    $('#write-comment').click(function () {
        $('#display-comment').fadeToggle();
        if ($(this).text() == 'Write a Comment') {
            $('#write-comment').text('Hide Comment Section');
        }else{
            $('#write-comment').text('Write a Comment');


        }


    });
   /*   $('.replies .write-reply').click(function () {

          $('.replies .display-reply').fadeToggle();
          if ($(this).text() == 'Reply') {
              $('.write-reply').text('Hide Reply');
          } else {
              $('.write-reply').text('Reply');


          }
      });*/
  });
</script>

</body>
</html>