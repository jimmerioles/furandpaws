<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset("css/mainstyle.css") }}">
    <link rel="shortcut icon" href="{{ asset("img/furpawlogo.png") }}">
    <link href="{{ asset("css/bootstrap.css") }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset("css/font-awesome.min.css") }}">
    <link href="{{ asset("css/hover-min.css") }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset("css/animate.css") }}">
    <title>FurAndPaws-Take a tour for your pets</title>

</head>

<body>
<!-- Modals	 -->

<!--Login Modal -->
<div id="login-modal">

    <div class="login-content">
        <div class="login-header">
            <div id="login-left" class="login-header-left">

                <h4><i class="fa fa-key"></i> LOG IN</h4>
            </div>
            <div id="login-right" class="login-header-right unselect">

                <h4><i class="fa fa-users"></i> CREATE AN ACCOUNT</h4>
            </div>

            <div class="clearfix"></div>

            <div class="login-main-content">

                <div class="content-signin"></div>
                <div class="clearfix"></div>
                <div class="content-signup"></div>

            </div>


        </div><!-- end of login-header -->
    </div>
</div>

</div>


<a href="#" class="scroll_to_top hvr-grow" id="scroll"><span class="fa fa-angle-up fa-2x"></span></a>

<div class="menu_user_wrap animated zoomIn">

    <div class="content_wrap clearfix">

        <div class="menu_user_area menu_user_right menu_user_contact_area">
            <ul>
                <li ><i class="fa fa-user fa-lg"></i><a href="#" id="loginmodal"> Login / Sign-up</a></li>


            </ul>
        </div>

        <div class="menu_user_area menu_user_contact_area menu_user_left">Welcome to Fur And Paws!
        </div>
    </div>




</div><!-- End of small header -->

<div class="nav_container">

    <div class="nav_main">
        <div class="nav_left">
            <a href="{{ url('/') }}"><img src="img/furpawlogo.png"></a>
        </div>

        <div class="nav_right">
            <ul>
                <li>
                    <a href="#" class="active">Home</a>

                    <ul class="sub_nav" id="sub1">
                        <li class="li-style"><a href="{{ url('pet-store') }}">Pet Store</a></li>
                        <li class="li-style"><a href="#">Pet Walking</a></li>
                        <li class="li-style"><a href="#">Adoption</a></li>
                        <li class="li-style"><a href="#">Club</a></li>
                    </ul>
                </li>
                <li>

                    <a href="#">Features</a>
                    <ul class="sub_nav" id="sub2">
                        <li class="li-style"><a href="#">Events</a></li>
                        <li class="li-style"><a href="#">Our Services</a></li>
                        <li class="li-style"><a href="#">Contact</a></li>
                        <li class="li-style"><a href="#">Our Team</a></li>
                    </ul>
                </li>
                <li>

                    <a href="#">Gallery</a>
                    <ul class="sub_nav" id="sub3">
                        <li class="li-style"><a href="#">Pets Adoption</a></li>
                        <li class="li-style"><a href="#">Pets Sale</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('post-sale') }}">Shop</a></li>
                <li><a href="{{ url('adopt') }}"><button class="button green hvr-pulse"><i class="fa fa-check-circle" ></i> ADOPT</button></a></li>
                <li><a href="{{ url('breed') }}"><button class="button red hvr-pulse"><span class="glyphicon glyphicon-heart"></span> FIND A COUPLE</button></a></li>

            </ul>
        </div>

    </div>
</div><!-- End of Nav -->

<div class="carousel-header clearfix">

    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/carousel/carousel.jpg" alt="...">
                <div class="carousel-caption">
                    <div class="caption-right">
                        <h1>Join The Dating Club Today</h1>
                        <p>an awesome social network community
                            for pet owners and their pets
                        </p>

                        <a href="#" class="sc_button sc_button_blue">MORE INFORMATION  <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/carousel/carousel2.jpg" alt="...">
                <div class="carousel-caption">
                    <div class="caption-left">
                        <h1>Open Your Heart and Your Home</h1>
                        <p>to a pet who needs help, and they will be showing
                            their appreciation to you for the rest of their lives!

                        </p>

                        <a href="#" class="sc_button sc_button_blue">MORE INFORMATION  <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel/carousel3.jpg" alt="...">
                <div class="carousel-caption ">
                    <div class="caption-right">
                        <h1 class="black">Pet Services & Dog Walking</h1>
                        <p class="black">we specialize in mid-day potty breaks, puppy breaks, senior doggy breaks,<br> feline care and much more...

                        </p>

                        <a href="#" class="sc_button sc_button_blue">MORE INFORMATION  <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="img/carousel/carousel4.jpg" alt="...">
                <div class="carousel-caption">
                    <div class="caption-left">
                        <h1>Visit Our Pet <br>Boutique</h1>
                        <p>for treats your dog or cat will love and pet apparel from latest collections
                        </p>

                        <a href="#" class="sc_button sc_button_blue">MORE INFORMATION  <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<section class="section-layout clearfix">

    <div class="section-container">

        <h1>We Provide Best Services</h1>
        <div class="par-section">
            <h3>TAKING CARE OF PET ANIMALS IS NOT MUST WHAT WE DO. THAT’S WHAT WE LOVE
                AND SO PASSIONATE ABOUT. YOUR PET IS SAFE WITH US!
            </h3>
        </div>

        <div class="four-column">
            <div class="service-block">
                <center><div class="service-count">1</div></center>
                <center><i class="fa fa-gift fa-5x"></i></center>
                <br>
                <center><h4>Register is free</h4></center>
                <br>
                <center><p>Create profiles for you and your pets. Use our search to find pets in your area.</p></center><br>
                <center><a href="#" class="a_green">Learn More <i class="fa fa-angle-right"></i></a></center>
            </div>

            <div class="service-block">
                <center><div class="service-count">2</div></center>
                <center><i class="fa fa-user fa-5x"></i></center>
                <br>
                <center><h4>Friendly Community</h4></center>
                <br>
                <center><p>Be part of the our community where you can schedule play dates.</p></center><br>
                <center><a href="#" class="a_green">Learn More <i class="fa fa-angle-right"></i></a></center>

            </div>

            <div class="service-block">
                <center><div class="service-count">3</div></center>
                <center><i class="fa fa-heart-o fa-5x"></i></center>
                <br>
                <center><h4>Adoption Center</h4></center>
                <br>
                <center><p>You Can adopt or list a pet for adoption lorem ipsum dolor sitam amet.</p></center><br>
                <center><a href="#" class="a_green">Learn More <i class="fa fa-angle-right"></i></a></center>

            </div>

            <div class="service-block">
                <center><div class="service-count">4</div></center>
                <center><i class="fa fa-shopping-cart fa-5x"></i></center>
                <br>
                <center><h4>Online Store</h4></center>
                <br>
                <center><p>Connect and share with other pet owners and find an answer to a question.</p></center><br>
                <center><a href="#" class="a_green">Learn More <i class="fa fa-angle-right"></i></a></center>

            </div>

        </div>

    </div>

</section>

<section class="content-wrap clearfix">

    <div class="section-content">

        <div class="column-2">
            <img src="img/bg/pets.jpg">
        </div>

        <div class="column-2">
            <h2 class="main_color">Pet Adoption. Be Part <br> of Something Beautiful!</h2>
            <div class="accent_color">
                <p>WE HAVE A LARGE SELECTION OF CATS AND DOGS. OUR ANIMALS <br> ARE SPAYED-NEUTERED, MICRO CHIPPED AND GIVEN VACCINES.</p>
            </div>


            <div class="sc_section">
                <span class="fa fa-circle main_color"></span>
                <span class="span-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do emod tempor inct labore et dolore magna aliqua.</span>

            </div>

            <div class="sc_section">
                <span class="fa fa-circle main_color"></span>
                <span class="span-section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do emod tempor inct labore et dolore magna aliqua.</span>

            </div>

            <button class="button green font-size18 hvr-wobble-vertical">LEARN MORE <span class="caret"></span></button>

        </div>
    </div>

</section>


<div class="carousel-header bg-fp">
    <div class="section-content">

        <div class="column-2">
            <h2 class="red_color">Join The Dating Pet <br> Club Today</h2>
				<span class="section-span">We know how important your pets are to you. We’ve 
				<br>
				created the Pet Club to provide you with everything you</span>
            <div class="clearfix"></div>
            <button class="button red font-size18 hvr-wobble-vertical margin-top " ><span class="fa fa-heart-o"></span> SIGN UP TODAY  <span class="fa fa-angle-right"></span></button>
        </div>
    </div>
</div>


<footer>
    <div class="copyright_wrap">
        <center><p>Fur and Paws &copy; 2016 All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p></center>
        <center>
            <div class="login_social_list">
                <ul>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/facebook.ico") }}" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/twitter.ico") }}" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/instagram.ico") }}" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="{{ asset("img/icon/social/google_plus.ico") }}" class="icon-circle"></a></li>

                </ul>
            </div>

        </center>
    </div>
</footer>


<!-- Bootstrap And Core JavaScript
  ================================================== -->
<script type="text/javascript" src="{{ asset("js/jquery.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/loginmodal.js") }}"></script>
<script type="text/javascript" src="{{ asset("js/custom-scroll.js") }}"></script>

</body>
</html>