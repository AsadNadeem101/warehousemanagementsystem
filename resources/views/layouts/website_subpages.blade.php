	<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>WMS | Warehouse Management System</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="{{asset('images/new.png')}}" type="image/x-icon">
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
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      
      <!-- =-=-=-=-=-=-= Light Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-8 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="/about"><i class="fa fa-heart-o" aria-hidden="true"></i> About</a></li>
                        <li><a href="/faqs"><i class="fa fa-folder-open-o" aria-hidden="true"></i> FAQS</a></li>
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
            <nav id="menu-1" class="mega-menu">
               <!-- menu list items container -->
               <section class="menu-list-items">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-12 col-md-12">
                           <!-- menu links -->
                           <ul class="menu-links">
                              <!-- active class -->
                              <li style="width: 120px; height: 50px">
                                 <a href="/index" style="width: 120px; height: 50px"><img src="images/new.png" alt="logo" style="width: 120px; height: 50px"> </a>
                              </li>
                              <li>
                                 <a href="/index"> Home </a>
                              </li>
                              <li>
                                 <a href="/termsandconditions">Terms and Conditions</a>
                                 
                              </li>
                              @if(Auth::check())
                              @if(Auth::user()->type == 'super_admin')
                              <li>
                                 <a href="\superadmindashboard">Dashboard </a>
                              </li>
                              @elseif(Auth::user()->type == 'warehouse_admin')
                              <li>
                                 <a href="\warehouseadmindashboard">Dashboard </a>
                              </li>
                              @elseif(Auth::user()->type == 'renter')
                              <li>
                                 <a href="\renterdashboard">Dashboard </a>
                              </li>
                              @elseif(Auth::user()->type == 'tenant')
                              <li>
                                 <a href="\tenantdashboard">Dashboard </a>
                              </li>
                              @endif
                              @endif
                              <li>
                                 <a href="\privacypolicy">Privacy Policy </a>
                              </li>
                              <li>
                                 <a href="\our_services">Our Services </a>
                              </li>
                              <li><a href="/contact">Contact </a></li>
                           </ul>
                           
                        </div>
                     </div>
                  </div>
               </section>
            </nav>
      </div>
       <!-- Navigation Menu End -->
      <main>
        @yield('content')
    </main>
             <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
         <footer>
            <!-- Footer Content -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                           <div class="logo">   
                              <a href="/index" style="width: 120px; height: 50px"><img src="images/new.png" alt="logo" style="width: 120px; height: 50px"> </a>
                           </div>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et dolor eget erat fringilla port.</p>
                           <ul>
                              <li><img src="images/appstore.png" alt=""></li>
                              <li><img src="images/googleplay.png" alt=""></li>
                           </ul>
                        </div>
                        <!-- Info Widget Exit -->
                     </div>
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                           <h5>Follow Us</h5>
                           <ul>
                              <li><a class="fb" href=""><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                              <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                              <li><a class="linkedin" href=""><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                              <li><a class="googleplus" href=""><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-6  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                           <h5>Singup for Weekly Newsletter</h5>
                           <div class="fieldset">
                              <p>We may send you information about related events, webinars, products and services which we believe.</p>
                              <form>
                                 <input class="" value="Enter your email address" type="text">
                                 <input class="submit-btn" name="submit" value="Submit" type="submit"> 
                              </form>
                           </div>
                        </div>
                        <!-- Newslatter -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- Copyrights -->
            <div class="copyrights">
               <div class="container">
                  <div class="copyright-content">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <p>© 2017 AForest All rights reserved. Design by <a href="http://themeforest.net/user/scriptsbundle/portfolio" target="_blank">Scriptsbundle</a> </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>
      
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <!-- Bootstrap Core Css  -->
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Jquery Easing -->
      <script src="{{asset('js/easing.js')}}"></script>
      <!-- Menu Hover  -->
      <script src="{{asset('js/forest-megamenu.js')}}"></script>
      <!-- Jquery Appear Plugin -->
      <script src="{{asset('js/jquery.appear.min.js')}}"></script>
      <!-- Numbers Animation   -->
      <script src="{{asset('js/jquery.countTo.js')}}"></script>
      <!-- Jquery Smooth Scroll  -->
      <script src="{{asset('js/jquery.smoothscroll.js')}}"></script>
      <!-- Jquery Select Options  -->
     <script src="{{asset('js/select2.min.js')}}"></script>
      <!-- noUiSlider -->
     </script><script src="{{asset('js/nouislider.all.min.js')}}"></script>
      <!-- Carousel Slider  -->
      </script><script src="{{asset('js/carousel.min.js')}}"></script>
      </script> <script src="{{asset('js/slide.js')}}"></script>
      <!-- Image Loaded  -->
      <script src="{{asset('js/imagesloaded.js')}}"></script>
     <script src="{{asset('js/isotope.min.js')}}"></script>
      <!-- CheckBoxes  -->
      <script src="{{asset('js/icheck.min.js')}}"></script>
      <!-- Jquery Migration  -->
     <script src="{{asset('js/jquery-migrate.mi.js')}}"></script>
      <!-- Sticky Bar  -->
     <script src="{{asset('js/theia-sticky-sidebar.js')}}"></script>
      <!-- Style Switcher -->
      <script src="{{asset('js/color-switcher.js')}}"></script>

      <!-- Template Core JS -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/color-switcher.js')}}"></script>
      <!-- For This Page Only -->
     
   </body>
</html>
