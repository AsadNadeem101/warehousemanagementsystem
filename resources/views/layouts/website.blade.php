
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>WRMS | Home</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/et-line-fonts.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/forest-menu.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/animate.min.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/select2.min.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/slider.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('skins/minimal/minimal.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{asset('css/responsive-media.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="{{asset('css/colors/defualt.css')}}" type="text/css">
      <!-- =-=-=-=-=-=-= For Style Switcher =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="theme-color" type="text/css" href="#" />
      <!-- JavaScripts -->
      <script src="{{asset('js/modernizr.js')}}"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!-- [if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif] -->
   </head>
   <body>
      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
      <div class="color-switcher" id="choose_color">
         <a href="#." class="picker_close"><i class="fa fa-gear"></i></a>
         <h5>STYLE SWITCHER</h5>
         <div class="theme-colours">
            <p> Choose Colour style </p>
            <ul>
               <li>
                  <a href="#." class="defualt" id="defualt"></a>
               </li>
               <li>
                  <a href="#." class="green" id="green"></a>
               </li>
               <li>
                  <a href="#." class="blue" id="blue"></a>
               </li>
               <li>
                  <a href="#." class="red" id="red"></a>
               </li>
               
               <li>
                  <a href="#." class="sea-green" id="sea-green"></a>
               </li>
              
            </ul>
         </div>
         <div class="clearfix"> </div>
      </div>
      <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
      <div class="transparent-header">
         <!-- Top Bar -->
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="about.html"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="faqs.html"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-4 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           @if(!Auth::check())
                           <li><a href="/login"><i class="fa fa-sign-in"></i> Log in</a></li>
                           <li><a href="register"><i class="fa fa-unlock" aria-hidden="true"></i> Register</a></li>
                           @else
                           <li><a href="/logout"><i class="fa fa-sign-out"></i> Log out</a></li>
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-profile-male" aria-hidden="true"></i> {{Auth::user()->name}} <span class="caret"></span></a>
                              @if(Auth::user()->type == 'renter')
      
                              <ul class="dropdown-menu">
                                 <li><a href="\profile">User Profile</a></li>
                                 <li><a href="\warehouse">My Warehouse</a></li>
                                 <li><a href="\warehouseadbid">My Ads Bids</a></li>
                                 <li><a href="active-ads.html">Active Ads</a></li>
                              <li><a href="pending-ads.html">Pending Ads</a></li>
                                 <li><a href="favourite.html">Favourite Ads</a></li>
                                 <li><a href="messages.html">Message Panel</a></li>
                                 <li><a href="deactive.html">Account Deactivation</a></li>
                              </ul>
                              @elseif(Auth::user()->type == 'warehouse_admin')
                               <ul class="dropdown-menu">
                                 <li><a href="\profile">User Profile</a></li>
                                 <li><a href="#">My Warehouse</a></li>
                                 <li><a href="\employee">Employees</a></li>
                                 <li><a href="\markAttendancePage">Mark Employeed Attendence</a></li>
                              <li><a href="/viewattendance/today">View Today Attendance</a></li>
                                 <li><a href="/profile/change-password">Change Password</a></li>
                              </ul>
                              @endif
                           </li>
                           @endif
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
         <nav id="menu-1" class="mega-menu">
               <!-- menu list items container -->
               <section class="menu-list-items">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <!-- menu logo -->
                           <ul class="menu-logo">
                              <li>
                                 <a href="index.html"><img src="images/logo-1.png" alt="logo"> </a>
                              </li>
                           </ul>
                           <!-- menu links -->
                           <ul class="menu-links">
                              <!-- active class -->
                              <li>
                                 <a href="#"> Home </a>
                              </li>
                              <li>
                                 <a href="/termsandconditions">Terms and Conditions</a>
                                 
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Categories <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    
                                    <li><a href="category-2.html">Modern Variation</a></li>
                                    <li><a href="category-3.html">Minimal Variation</a></li>
                                    <li><a href="category-4.html">Fancy Variation</a></li>
                                    
                                    <li><a href="category-6.html">Flat Variation</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="\home">Dashboard </a>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down full width -->
                                 <div class="drop-down grid-col-12">
                                    <!--grid row-->
                                    <div class="grid-row">
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Blog</h4>
                                          <ul>
                                             <li><a href="blog.html">Blog With Right Sidebar</a></li>
                                             <li><a href="blog-1.html">Blog With Masonry Style</a></li>
                                             <li><a href="blog-2.html">Blog Without Sidebar</a></li>
                                             <li><a href="blog-details.html">Single Blog </a></li>
                                             <li><a href="blog-details-1.html">Single Blog (Adsense) </a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Miscellaneous</h4>
                                          <ul>
                                             <li><a href="about.html">About Us</a></li>
                                             <li><a href="cooming-soon.html">Comming Soon</a></li>
                                             <li><a href="elements.html">Shortcodes</a></li>
                                             <li><a href="error.html">404 Page</a></li>
                                             <li><a href="faqs.html">FAQS</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
            
                                       <div class="grid-col-3">
                                          <h4>Others</h4>
                                          <ul>
                                             <li><a href="login.html">Login</a></li>
                                             <li><a href="register.html">Register</a></li>
                                             <li><a href="pricing.html">Pricing</a></li>
                                             <li><a href="site-map.html">Site Map</a></li>
                                             <li><a href="post-ad-1.html">Post Ad</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                       <div class="grid-col-3">
                                          <h4>Detail Page</h4>
                                          <ul>
                                             <li><a href="post-ad-2.html">Post Ad 2</a></li>
                                             <li><a href="single-page-listing.html">Single Ad Detail</a></li>
                                             <li><a href="single-page-listing-2.html">Single Ad 2</a></li>
                                             <li><a href="single-page-listing-3.html">Single Ad (Adsense)</a></li>
                                             <li><a href="single-page-expired.html">Single Ad (Closed)</a></li>
                                          </ul>
                                       </div>
                                       <!--grid column 2-->
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <a href="javascript:void(0)">Drop Down <i class="fa fa-angle-down fa-indicator"></i></a>
                                 <!-- drop down multilevel  -->
                                 <ul class="drop-down-multilevel">
                                    <li><a href="#">Item one</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Right Side <i class="fa fa-angle-right fa-indicator"></i> </a>
                                       <!-- drop down second level -->
                                       <ul class="drop-down-multilevel">
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-buysellads"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-dashcube"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-medium"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i></a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-leanpub"></i> Level 2 <i class="fa fa-angle-right fa-indicator"></i> </a>
                                             <!-- drop down third level -->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 2</a></li>
                                    <li>
                                       <a href="javascript:void(0)">Items Left Side <i class="fa fa-angle-left fa-indicator"></i> </a>
                                       <!-- add class left-side -->
                                       <ul class="drop-down-multilevel left-side">
                                          <li>
                                             <a href="#"> <i class="fa fa-forumbee"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-hotel"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-automobile"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0)"> <i class="fa fa-heartbeat"></i> Level 2 <i class="fa fa-plus fa-indicator"></i> </a>
                                             <!--drop down second level-->
                                             <ul class="drop-down-multilevel">
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                                <li><a href="#">Level 3</a></li>
                                             </ul>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bookmark"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-bell"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-soccer-ball-o"></i> Level 2</a>
                                          </li>
                                          <li>
                                             <a href="#"> <i class="fa fa-life-ring"></i> Level 2</a>
                                          </li>
                                       </ul>
                                    </li>
                                    <li><a href="#">Item 4</a>
                                    </li>
                                 </ul>
                              </li>
                              <li><a href="contact.html">Contact </a></li>
                           </ul>
                           <ul class="menu-search-bar">
                              <li>
                                 <a href="post-ad-1.html" class="btn btn-light"><i class="fa fa-plus" aria-hidden="true"></i> Post Free Ad</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
            </nav>
         <!-- menu end -->
      </div>
      <!-- Navigation Menu End -->
      <main>
        @yield('content')
    </main>

    <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer class="footer-area no-bg">
            <!--Footer Upper-->
            <div class="footer-content">
               <div class="container">
                  <div class="row clearfix">
                     <!--Two 4th column-->
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                           <div class="col-lg-7 col-sm-6 col-xs-12 column">
                              <div class="footer-widget about-widget">
                                 <div class="logo">
                                    <a href="index.html"><img alt="" class="img-responsive" src="images/logo.png"></a>
                                 </div>
                                 <div class="text">
                                    <p>Lorem ipsum dolor sit amet, eu me.</p>
                                 </div>
                                 <ul class="contact-info">
                                    <li><span class="icon fa fa-map-marker"></span> 60 Link Road Lhr. Pakistan 54770</li>
                                    <li><span class="icon fa fa-phone"></span> (042) 1234567890</li>
                                    <li><span class="icon fa fa-envelope-o"></span> contant@scriptsbundle.com</li>
                                    <li><span class="icon fa fa-fax"></span> (042) 1234 7777</li>
                                 </ul>
                                 <div class="social-links-two clearfix"> 
                                    <a class="facebook img-circle" href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a class="twitter img-circle" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="google-plus img-circle" href="#"><span class="fa fa-google-plus"></span></a>
                                    <a class="linkedin img-circle" href="#"><span class="fa fa-pinterest-p"></span></a>
                                    <a class="linkedin img-circle" href="#"><span class="fa fa-linkedin"></span></a> 
                                 </div>
                              </div>
                           </div>
                           <!--Footer Column-->
                           <div class="col-lg-5 col-sm-6 col-xs-12 column">
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">Our Services</h3>
                              </div>
                              <div class="footer-widget links-widget">
                                 <ul>
                                    <li><a href="#">Web Development</a></li>
                                    <li><a href="#">Web Designing</a></li>
                                    <li><a href="#">Android Development</a></li>
                                    <li><a href="#">Theme Development</a></li>
                                    <li><a href="#">IOS Development</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--Two 4th column End-->
                     <!--Two 4th column-->
                     <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="row clearfix">
                           <!--Footer Column-->
                           <div class="col-lg-7 col-sm-6 col-xs-12 column">
                              <div class="footer-widget news-widget">
                                 <div class="heading-panel">
                                    <h3 class="main-title text-left"> Latest News</h3>
                                 </div>
                                 <!--News Post-->
                                 <div class="news-post">
                                    <div class="icon"></div>
                                    <div class="news-content">
                                       <figure class="image-thumb"><img alt="" src="images/blog/popular-2.jpg"></figure>
                                       <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                    </div>
                                    <div class="time">July 2, 2014</div>
                                 </div>
                                 <!--News Post-->
                                 <div class="news-post">
                                    <div class="icon"></div>
                                    <div class="news-content">
                                       <figure class="image-thumb"><img alt="" src="images/blog/popular-1.jpg"></figure>
                                       <a href="#">If you need a crown or lorem an implant you will pay it gap it</a>
                                    </div>
                                    <div class="time">July 2, 2014</div>
                                 </div>
                              </div>
                           </div>
                           <!--Footer Column-->
                           <div class="col-lg-5 col-sm-6 col-xs-12 column">
                              <div class="footer-widget links-widget">
                                 <div class="heading-panel">
                                    <h3 class="main-title text-left"> Quick Links</h3>
                                 </div>
                                 <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Our Team</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="index-7.html">One Page</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--Two 4th column End-->
                  </div>
               </div>
            </div>
            <!--Footer Bottom-->
            <div class="footer-copyright">
               <div class="container clearfix">
                  <!--Copyright-->
                  <div class="copyright text-center">Copyright 2017 © Theme Created By <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> All Rights Reserved</div>
               </div>
            </div>
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button">
         <span class="sell-icons">
         <i class="flaticon-transport-9"></i>
         </span>
         <h4>SELL</h4>
      </a>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= Quote Modal =-=-=-=-=-=-= -->
      <div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title" id="lineModalLabel">Email for Price</h3>
               </div>
               <div class="modal-body">
                  <!-- content goes here -->
                  <form>
                     <div class="form-group  col-md-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name"> 
                     </div>
                     <div class="form-group  col-md-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email"> 
                     </div>
                     <div class="form-group  col-md-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No"> 
                     </div>
                     <div class="form-group  col-md-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                     </div>
                     <div class="col-md-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- Product Preview Popup -->
      <div class="quick-view-modal modalopen" id="ad-preview" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-lg ad-modal">
            <button class="close close-btn popup-cls" aria-label="Close" data-dismiss="modal" type="button"> <i class="fa-times fa"></i> </button>
            <div class="modal-content single-product">
               <div class="diblock">
                  <div class="col-lg-7 col-sm-12 col-xs-12">
                     <div class="clearfix"></div>
                     <div class="flexslider single-page-slider">
                        <div class="flex-viewport">
                           <ul class="slides slide-main">
                              <li class=""><img alt="" src="images/single-page/1.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/2.jpg" title=""></li>
                              <li class="flex-active-slide"><img alt="" src="images/single-page/3.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/4.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/5.jpg" title=""></li>
                              <li><img alt="" src="images/single-page/6.jpg" title=""></li>
                           </ul>
                        </div>
                     </div>
                     <div class="flexslider" id="carousels">
                        <div class="flex-viewport">
                           <ul class="slides slide-thumbnail">
                              <li><img alt="" draggable="false" src="images/single-page/1_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/2_thumb.jpg"></li>
                              <li class="flex-active-slide"><img alt="" draggable="false" src="images/single-page/3_thumb.jpg"> </li>
                              <li><img alt="" draggable="false" src="images/single-page/4_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/5_thumb.jpg"></li>
                              <li><img alt="" draggable="false" src="images/single-page/6_thumb.jpg"></li>
                              <!-- items mirrored twice, total of 12 -->
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class=" col-sm-12 col-lg-5 col-xs-12">
                     <div class="summary entry-summary">
                        <div class="ad-preview-details">
                           <a href="#">
                              <h4>Honda Civic Sports Edition 2017</h4>
                           </a>
                           <div class="overview-price">
                              <span>$36.000</span>
                           </div>
                           <div class="clearfix"></div>
                           <p>Tattooed fashion axe Blue Bottle butcher tilde. Pitchfork leggings meh Odd Future.Drinking vinegar. </p>
                           <ul class="car-info col-md-6 col-sm-6">
                              <li>
                                 <span>Fabrication:</span>
                                 <p>2013/2014</p>
                              </li>
                              <li>
                                 <span>Speed:</span>
                                 <p>160p/h</p>
                              </li>
                              <li>
                                 <span>Mileage:</span>
                                 <p>30.000km - 40.000km</p>
                              </li>
                              <li>
                                 <span>Fuel:</span>
                                 <p>Petrol</p>
                              </li>
                           </ul>
                           <ul class="ad-preview-info col-md-6 col-sm-6">
                              <li>
                                 <span>Color:</span>
                                 <p>Black</p>
                              </li>
                              <li>
                                 <span>Transmition:</span>
                                 <p>Automatic</p>
                              </li>
                              <li>
                                 <span>Dors:</span>
                                 <p>4/5</p>
                              </li>
                              <li>
                                 <span>Engine:</span>
                                 <p>2500cm3</p>
                              </li>
                           </ul>
                           <button class="btn btn-theme btn-block" type="submit">Contact Dealer</button>
                        </div>
                     </div>
                     <!-- .summary -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- / Product Preview Popup -->
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap Core Css  -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Jquery Easing -->
      <script src="js/easing.js"></script>
      <!-- Menu Hover  -->
      <script src="js/forest-megamenu.js"></script>
      <!-- Jquery Appear Plugin -->
      <script src="js/jquery.appear.min.js"></script>
      <!-- Numbers Animation   -->
      <script src="js/jquery.countTo.js"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="{{asset('js/jquery.smoothscroll.js')}}"></script>
      <!-- Jquery Select Options  -->
      <script src="js/select2.min.js"></script>
      <!-- noUiSlider -->
      <script src="js/nouislider.all.min.js"></script>
      <!-- Carousel Slider  -->
      <script src="js/carousel.min.js"></script>
      <script src="js/slide.js"></script>
      <!-- Image Loaded  -->
      <script src="js/imagesloaded.js"></script>
      <script src="js/isotope.min.js"></script>
      <!-- CheckBoxes  -->
      <script src="js/icheck.min.js"></script>
      <!-- Jquery Migration  -->
      <script src="js/jquery-migrate.min.js"></script>
      <!-- Sticky Bar  -->
      <script src="js/theia-sticky-sidebar.js"></script>
      <!-- Style Switcher -->
      <script src="js/color-switcher.js"></script>

      <!-- Template Core JS -->
      <script src="js/custom.js"></script>
      <script src="{{asset('js/color-switcher.js')}}"></script>
   </body>
</html>
