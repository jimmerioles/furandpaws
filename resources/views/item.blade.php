<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/mainstyle.css">
    <link rel="shortcut icon" href="img/furpawlogo.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-stars.css">
    <link rel="stylesheet" type="text/css" href="css/thumbnail.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="css/hover-min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/animate.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>FurAndPaws-Take a tour for your pets</title>
    <script>

        $(function() {
            $('.star').barrating({
                theme: 'fontawesome-stars',
            });


        });
    </script>

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

<div class="menu_user_wrap">

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






<div class="nav_container clearfix" style="position:static">

    <div class="nav_main">
        <div class="nav_left">
            <a href="index.html"><img src="img/furpawlogo.png"></a>
        </div>

        <div class="nav_right">
            <ul>
                <li>
                    <a href="index.html" class="active">Home</a>

                    <ul class="sub_nav" id="sub1">
                        <li class="li-style"><a href="petstore.blade.php">Pet Store</a></li>
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
                <li><a href="post-sale.html">Shop</a></li>
                <li><a href="adopt.html"><button class="button green hvr-pulse"><i class="fa fa-check-circle" ></i> ADOPT</button></a></li>
                <li><a href="breed.html"><button class="button red hvr-pulse"><span class="glyphicon glyphicon-heart"></span> FIND A BREEDER</button></a></li>

            </ul>
        </div>

    </div>
</div><!-- End of Nav -->


<div class="header-container">

    <div class="header-content">

        <div class="header-left">
            <h1>My Item</h1>
        </div>

        <div class="header-right">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Item</a></li>
                <li class="active">My Item</li>
            </ol>
        </div>

    </div>


</div><!-- end of header container -->

<div class="content-wrap clearfix">

    <div class="section-content clearfix">

             <div class="content-left">

                 <div class="items-thumbnail-border">
                    <div class="items-thumbnail">

                            <div class="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="img/carousel/carousel.jpg" alt="...">
                                    </div>
                                    <div class="item">
                                        <img src="img/carousel/carousel2.jpg" alt="...">
                                    </div>

                                    <div class="item">
                                        <img src="img/carousel/carousel3.jpg" alt="...">
                                    </div>

                                    <div class="item">
                                        <img src="img/carousel/carousel4.jpg" alt="...">
                                    </div>
                                </div>
                                <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>


                    </div><!--end of thumbnail-->
                 </div><!--end border thumbnail-->

                 <div class="bs-example bs-example-tabs" data-example-id=togglable-tabs>
                     <ul id=myTabs class="nav nav-tabs" role=tablist>
                         <li role=presentation class=active> <a href=#desc id=desc-tab role=tab data-toggle=tab aria-controls=home aria-expanded=true>Description</a> </li>
                         <li role=presentation> <a href=#reviews role=tab id=reviews-tab data-toggle=tab aria-controls=profile>Reviews (2)</a> </li>
                     </ul>
                     <div id=myTabContent class=tab-content style="padding:30px 20px; border: 1px solid #e7e7e7">
                         <div role=tabpanel class="tab-pane fade in active" id=desc aria-labelledby=desc-tab>
                             <h3 style="font-weight:700">Product Description</h3>
                             <br>
                             <p><span class="fa fa-check-circle-o blue"></span> Selling my fucking pets nga batig nawng</p>
                             <p><span class="fa fa-check-circle-o blue"></span> No defects kay gi tangkal</p>
                             <p><span class="fa fa-check-circle-o blue"></span> Naay bun-i sa lubot gamay pero butangi lang ug salicylic acid</p>
                             <p><span class="fa fa-check-circle-o blue"></span> 3 months old with papers</p>
                             <p><span class="fa fa-check-circle-o blue"></span> Negotiable pani contact me or pm:D</p>

                             <hr>
                             <h4>Document photos</h4>
                             <br>
                             <div class="thumbnails">
                                 <img src="img/thumbnail/karen.jpg" />
                                 <img src="img/thumbnail/zetta.jpg" />
                                 <img src="img/thumbnail/lyndon.jpg" />
                                 <img src="img/thumbnail/default-image.png"/>
                             </div>
                         </div>
                         <div class="clearfix"></div>
                         <!--for description-->
                         <div role=tabpanel class="tab-pane fade" id=reviews aria-labelledby=reviews-tab>
                            <div class="reviews-content">
                                <h3 style="font-weight:300">(2) Review for this item</h3>
                                <br>
                                <ol class="commentlist">
                                    <li>
                                        <div class="comment-16">
                                            <img src="img/thumbnail/default-image.png" class="avatar">

                                            <div class="comment-text">
                                                    <div class="star-rating">
                                                        <select class="star" id="star1">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>

                                                <p class="meta">
                                                    <strong>John Louise Berdida</strong>
                                                    -
                                                    <time>Posted: 1 Hour ago:</time>
                                                </p>
                                                <div class="description">
                                                    Batiag nawng ana imong pets oie . .Bdw interesting ko nga mopalit ana niya kay ipakaon nako sa akong binuhi nga dragon
                                                    mo ask lang ta ko kung dili bana matakdan sa bun.i akong dragon nig kaon ana niya kay gi bun.i raba na imong pets or
                                                    tambalan lang sa nako na ang lubot ana imong pets usa akong ipakaon ?
                                                </div>
                                            </div>
                                        </div>

                                    </li> <!--end of first comment-->

                                    <li>
                                        <div class="comment-16">
                                            <img src="img/thumbnail/zetta.jpg" class="avatar">

                                            <div class="comment-text">
                                                <div class="star-rating">
                                                    <select class="star">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>

                                                <p class="meta">
                                                    <strong>Pet ni John</strong>
                                                    -
                                                    <time> Posted 32 minutes ago</time>
                                                </p>
                                                <div class="description">
                                                    Ka hinawayon ba nimong animala ka matay paka mura kag gwapo da . . tseee ayaw nalang mi palita pak u nimo ./.
                                                </div>
                                            </div>
                                        </div>

                                    </li> <!--end of first comment-->
                                </ol>
                                <div class="clearfix"></div>
                            </div>

                             <div>
                                 <h4>Add Review</h4>
                                 <br>
                                 <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
                                 <p class="comment-form-rating">
                                     <label for="">Your Rating</label>
                                 <div class="comment-star-rating">
                                     <select class="star">
                                         <option value="1">1</option>
                                         <option value="2">2</option>
                                         <option value="3">3</option>
                                         <option value="4">4</option>
                                         <option value="5">5</option>
                                     </select>
                                 </div>
                                 <div class="clearfix"></div>
                                 <hr>
                                 <textarea name="" cols="10" rows="6" class="form-control" placeholder="Send your message here....."></textarea>
                                 <br>
                                  <div class="review-input">

                                      <div class="review-label">
                                          <label>Name: <span style="color:red">*</span></label>
                                      </div>

                                      <div class="review-inputs">
                                          <input type="text" placeholder="Your name here..."/>
                                      </div>

                                      <div class="review-label">
                                          <label>Email: <span style="color:red">*</span></label>
                                      </div>

                                      <div class="review-inputs">
                                          <input type="text" placeholder="John Doe@yahoo.com"/>
                                      </div>

                                  </div>
                                 <div class="clearfix"></div>
                                 <br>
                                 <center><button class="button-search hvr-pulse">Submit Message</button></center>
                                 <div class="clearfix"></div>
                                 </p>
                             </div>


                         </div>
                         <!--for reviews-->
                     </div>
                 </div>

             </div> <!-- dir-form -->




            <div class="widget-right-details">

                <div class="widget-navbar">
                    39 Views
                </div>

                <div class="widget-content">
                    <div class="widget-price"><span class="fa fa-money fa-lg" style="padding-right:3px;"></span>  Price:	₱ 1,000</div>
                    <hr>
                    <div class="widget-number"><span class="fa fa-mobile fa-2x" style="padding-right:8px;"> </span> Contact no: 09123456789</div>
                    <hr>
                    <div class="widget-number"><span class="fa fa-clock-o fa-lg" style="padding-right:8px;"> </span> Posted: 21 hours ago</div>
                    <hr>
                    <textarea name="" id="" cols="2" rows="3" class="form-control" placeholder="Send your message here....."></textarea>
                    <br>
                    <center><button class="button-submit hvr-pulse-shrink" onclick="bookmarks()">Send Message</button></center>
                </div>

            </div>

        <div class="widget-right-details" style="margin-top:20px;">

            <div class="widget-navbar">Member Details</div>

            <div class="widget-content">
                <div class="item-avatar">
                    <a href="#">
                        <img src="img/thumbnail/lyndon.jpg" alt="...">
                    </a>
                </div>

                <div class="custom-item">
                    <div class="item-title">
                        <a href="#">John Louise Berdida</a>
                    </div>

                    <div class="item-meta">

                        <span class="fa fa-clock-o"></span> Posted 21 hours ago
                        <br>
                        <span class="fa fa-map-marker" style="padding:0 2px"> </span> Cebu City
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
<!--end of content-wrap-->


<footer class="clearfix">
    <div class="copyright_wrap">
        <center><p>Fur and Paws &copy; 2016 All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p></center>
        <center>
            <div class="login_social_list">
                <ul>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="img/icon/social/facebook.ico" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="img/icon/social/twitter.ico" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="img/icon/social/google_plus.ico" class="icon-circle"></a></li>
                    <li><a href="#" class="hvr-wobble-vertical"><img src="img/icon/social/instagram.ico" class="icon-circle"></a></li>

                </ul>
            </div>
        </center>
    </div>
</footer><!-- end of footer -->


<!-- Bootstrap And Core JavaScript
  ================================================== -->


<script type="text/javascript" src="js/jquery.barrating.min.js"></script>
<script type="text/javascript" src="js/custom-elevate.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/loginmodal.js"></script>
<script type="text/javascript" src="js/custom-scroll.js"></script>
<script type="text/javascript" src="js/custom-tooltip.js"></script>

</body>
</html>