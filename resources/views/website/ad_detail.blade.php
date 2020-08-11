@extends('layouts.website_subpages')
@section('content')
<div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Ad Detial</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <div class="small-breadcrumb">
         <div class="container">
            <div class=" breadcrumb-link">
               <ul>
                  <li><a href="index.html">Home Page</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a class="active" href="#">Ad Detail</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bgs gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-8 col-xs-12 col-sm-12">
                     <!-- Single Ad -->
                     <div class="single-ad">
                        <!-- Title -->
                        <div class="ad-box">
                           <h1>Honda Civic Oriel 1.8 i-VTEC CVT 2017</h1>
                           <div class="short-history">
                              <ul>
                                 <li>Published on: <b>07 Oct 2017</b></li>
                                 <li>Category: <b><a href="#">Used Cars</a></b></li>
                                 <li>Location: <b>London</b></li>
                              </ul>
                           </div>
                        </div>
                        <!-- Listing Slider  --> 
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
                        <!-- Listing Slider Thumb --> 
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
                        <!-- Share Ad  --> 
                        <div class="ad-share text-center">
                           <div data-toggle="modal" data-target=".share-ad" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
                           </div>
                           <a class="ad-box col-md-4 col-sm-4 col-xs-12" href="#"><i class="fa fa-star active"></i> <span class="hidetext">Add to watchlist</span></a>
                           <div data-target=".report-quote" data-toggle="modal" class="ad-box col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-warning"></i> <span class="hidetext">Report</span>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Short Description  --> 
                        <div class="ad-box">
                           <div class="short-features">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    Description 
                                 </h3>
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Condition</strong> :</span> Used
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Brand</strong> :</span> Nokia
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Model</strong> :</span> Lumia 625
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Product Type</strong>:</span> Mobile
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Date</strong> :</span> 2014-10-06
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Price</strong> :</span> Rs. 22,000
                              </div>
                           </div>
                           <!-- Short Features  --> 
                           <div class="desc-points">
                              <ul>
                                 <li>
                                    Looking to sell the car urgently.
                                 </li>
                                 <li>
                                    Engine is good condition.
                                 </li>
                                 <li>
                                    Complete service history available.
                                 </li>
                                 <li>
                                    Original return file is available.
                                 </li>
                                 <li>
                                    After Market Alloy rims.
                                 </li>
                                 <li>
                                    As good as a brand new car.
                                 </li>
                                 <li>
                                    Lady Driven Car in Immaculate Condition.
                                 </li>
                                 <li>
                                    No Work Required in Car.
                                 </li>
                                 <li>
                                    Excellent Mileage , Local Average = 14 km , Long Average = 16 km .
                                 </li>
                              </ul>
                           </div>
                           <!-- Related Image  --> 
                           <div class="ad-related-img">
                              <img src="images/car-img1.png" alt="" class="img-responsive center-block">
                           </div>
                           <!-- Ad Specifications --> 
                           <div class="specification">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    Specifications 
                                 </h3>
                              </div>
                              <p>
                                 samsung galaxy note 2 new condition with handsfree and charger urgent sale. with book pouch original 4g lte. 16 gb condition 10/10 andriod kitkat4.4.2
                              </p>
                              <p>
                                 Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof 
                              </p>
                              <p>
                                 Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .
                              </p>
                              <p>
                                 Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .
                              </p>
                              <p>
                                 Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof 
                              </p>
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                     <!-- Single Ad End --> 
               
                  </div>
                  <!-- Right Sidebar -->
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="sidebar">
                        <!-- Contact info -->
                        <div class="contact white-bg">
                           <!-- Email Button trigger modal -->
                           <button class="btn-block btn-contact contactEmail" data-toggle="modal" data-target=".price-quote" >Contact Seller Via Email</button>
                           <!-- Email Modal -->
                           <button class="btn-block btn-contact contactPhone number" data-last="111111X" >0320<span>XXXXXXX</span></button>
                        </div>
                        <!-- Price info block -->   
                        <div class="ad-listing-price">
                           <p>Rs. 22,000</p>
                        </div><hr>
                        <a href="{{ route('warehouseadbid.create') }}">
                        <div class="ad-listing-price">
                           <p>Bid Request</p>
                        </div>
                        </a>
                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                           <div class="user-info-card">
                              <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                 <img src="images/users/3.jpg" alt="">
                              </div>
                              <div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                                 <span class="user-name"><a class="hover-color" href="profile.html">Sonu Monu</a></span>
                                 <div class="item-date">
                                    <span class="ad-pub">Published on: 10 Dec 2017</span><br>
                                    <a href="#" class="link">More Ads</a>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                           <div class="ad-listing-meta">
                              <ul>
                                 <li>Ad Id: <span class="color">4143</span></li>
                                 <li>Categories: <span class="color">Used Cars</span></li>
                                 <li>Visits: <span class="color">9</span></li>
                                 <li>Location: <span class="color">New York, USA</span></li>
                              </ul>
                           </div>
                           <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div>
                        </div>
                    
                        <!-- Recent Ads --> 
                        <div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>Recent Ads</a></h4>
                           </div>
                           <div class="widget-content recent-ads">
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="images/posting/thumb-1.jpg" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Sony Xperia Z1</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">New York</a>,</li>
                                          <li><a href="#">Brooklyn</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          $ 17,000
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="images/posting/thumb-2.jpg" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">2017 BMW i8</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">New York</a>,</li>
                                          <li><a href="#">Brooklyn</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          $ 66,000
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="images/posting/thumb-3.jpg" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Dell Latitude e7440</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">New York</a>,</li>
                                          <li><a href="#">Brooklyn</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          $ 37,000
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="images/posting/thumb-4.jpg" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Sport Stylish Steering</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">New York</a>,</li>
                                          <li><a href="#">Brooklyn</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          $ 11,000
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="images/posting/thumb-5.jpg" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Apple Wrist Watches</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">New York</a>,</li>
                                          <li><a href="#">Brooklyn</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          $ 20,000
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                           </div>
                        </div>
                        <!-- Saftey Tips  --> 
                        <div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>Safety tips for deal</a></h4>
                           </div>
                           <div class="widget-content saftey">
                              <ol>
                                 <li>Use a safe location to meet seller</li>
                                 <li>Avoid cash transactions</li>
                                 <li>Beware of unrealistic offers</li>
                              </ol>
                           </div>
                        </div>
                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
      
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
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
                  <div class="recent-ads">
                     <div class="recent-ads-list">
                        <div class="recent-ads-container">
                           <div class="recent-ads-list-image">
                              <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                              </a><!-- /.recent-ads-list-image-inner -->
                           </div>
                           <!-- /.recent-ads-list-image -->
                           <div class="recent-ads-list-content">
                              <h3 class="recent-ads-list-title">
                                 <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                              </h3>
                              <ul class="recent-ads-list-location">
                                 <li><a href="#">New York</a>,</li>
                                 <li><a href="#">Brooklyn</a></li>
                              </ul>
                              <div class="recent-ads-list-price">
                                 $ 17,000
                              </div>
                              <!-- /.recent-ads-list-price -->
                           </div>
                           <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                     </div>
                  </div>
                  <!-- content goes here -->
                  <form>
                     <div class="form-group  col-md-6  col-sm-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name"> 
                     </div>
                     <div class="form-group  col-md-6  col-sm-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email"> 
                     </div>
                     <div class="form-group  col-md-12  col-sm-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No"> 
                     </div>
                     <div class="form-group  col-md-12  col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                     </div>
                     <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
       <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
      <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title">Share</h3>
               </div>
               <div class="modal-body">
                  <div class="recent-ads">
                     <div class="recent-ads-list">
                        <div class="recent-ads-container">
                           <div class="recent-ads-list-image">
                              <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                              </a><!-- /.recent-ads-list-image-inner -->
                           </div>
                           <!-- /.recent-ads-list-image -->
                           <div class="recent-ads-list-content">
                              <h3 class="recent-ads-list-title">
                                 <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                              </h3>
                              <ul class="recent-ads-list-location">
                                 <li><a href="#">New York</a>,</li>
                                 <li><a href="#">Brooklyn</a></li>
                              </ul>
                              <div class="recent-ads-list-price">
                                 $ 17,000
                              </div>
                              <!-- /.recent-ads-list-price -->
                           </div>
                           <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                     </div>
                  </div>
                  <h3>Key Features</h3>
                  <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise Control, Driver Information System</p>
                  <h3>Link</h3>
                  <p><a href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a></p>
               </div>
               <div class="modal-footer">
                  <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                  <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
               </div>
            </div>
         </div>
      </div>
      
      <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
      <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title">Why are you reporting this ad?</h3>
               </div>
               <div class="modal-body">
                  <!-- content goes here -->
                  <form>
                     <div class="skin-minimal">
                        <div class="form-group col-md-6 col-sm-6">
                           <ul class="list">
                              <li >
                                 <input type="radio" id="spam" name="minimal-radio">
                                 <label for="spam">Spam</label>
                              </li>
                              <li>
                                 <input  type="radio" id="duplicated" name="minimal-radio" >
                                 <label for="duplicated">Duplicated</label>
                              </li>
                           </ul>
                        </div>
                        <div class="form-group  col-md-6 col-sm-6">
                           <ul class="list">
                              <li >
                                 <input  type="radio" id="offensive" name="minimal-radio">
                                 <label for="offensive">Offensive</label>
                              </li>
                              <li>
                                 <input  type="radio" id="expired" name="minimal-radio" checked>
                                 <label for="expired">Expired</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="form-group  col-md-12 col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                     </div>
                     <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
      <!-- =-=-=-=-=-=-= Ad Detail Modal =-=-=-=-=-=-= -->
      <div class="sticky-ad-detail">
         <div class="container">
            <div class="col-md-7 col-sm-12 col-xs-12 no-padding">
               <div class="">
                  <h3>Honda Civic Oriel 1.8 i-VTEC CVT 2017</h3>
                  <div class="short-history">
                     <ul>
                        <li>Published on: <b>07 Oct 2017</b></li>
                        <li>Location: <b>London</b></li>
                        <li>Category: <b><a href="#">Used Cars</a></b></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-5  col-sm-12 col-xs-12 no-padding">
               <div class="pull-left row">
                  <div class="col-md-6 col-sm-6 col-xs-12 ">
                     <a href="javascript:void(0)" class="btn btn-block pull-left btn-phone number " data-last="111111X"><i class="fa fa-phone"></i> 0320<span>XXXXXXX</span></a>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <a data-toggle="modal" data-target=".price-quote"  href="javascript:void(0)" class="btn btn-block pull-left btn-message"><i class="icon-envelope"></i> Message Seller</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Main Content Area End --> 
      <!-- Post Ad Sticky -->
      <a href="#" class="sticky-post-button hidden-xs">
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
                  <div class="recent-ads">
                     <div class="recent-ads-list">
                        <div class="recent-ads-container">
                           <div class="recent-ads-list-image">
                              <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                              </a><!-- /.recent-ads-list-image-inner -->
                           </div>
                           <!-- /.recent-ads-list-image -->
                           <div class="recent-ads-list-content">
                              <h3 class="recent-ads-list-title">
                                 <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                              </h3>
                              <ul class="recent-ads-list-location">
                                 <li><a href="#">New York</a>,</li>
                                 <li><a href="#">Brooklyn</a></li>
                              </ul>
                              <div class="recent-ads-list-price">
                                 $ 17,000
                              </div>
                              <!-- /.recent-ads-list-price -->
                           </div>
                           <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                     </div>
                  </div>
                  <!-- content goes here -->
                  <form>
                     <div class="form-group  col-md-6  col-sm-6">
                        <label>Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your Name"> 
                     </div>
                     <div class="form-group  col-md-6  col-sm-6">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email"> 
                     </div>
                     <div class="form-group  col-md-12  col-sm-12">
                        <label>Contact No</label>
                        <input type="text" class="form-control" placeholder="Contact No"> 
                     </div>
                     <div class="form-group  col-md-12  col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="What is the price of the Honda Civic 2017 you have in your inventory?" rows="3" class="form-control">What is the price of the 2015 Honda Accord EX-L you have in your inventory?</textarea>
                     </div>
                     <div class="col-md-12  col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
       <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
      <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title">Share</h3>
               </div>
               <div class="modal-body">
                  <div class="recent-ads">
                     <div class="recent-ads-list">
                        <div class="recent-ads-container">
                           <div class="recent-ads-list-image">
                              <a href="#" class="recent-ads-list-image-inner">
                              <img src="images/car.png" alt="">
                              </a><!-- /.recent-ads-list-image-inner -->
                           </div>
                           <!-- /.recent-ads-list-image -->
                           <div class="recent-ads-list-content">
                              <h3 class="recent-ads-list-title">
                                 <a href="#">Honda Civic Oriel 1.8 i-VTEC CVT 2017</a>
                              </h3>
                              <ul class="recent-ads-list-location">
                                 <li><a href="#">New York</a>,</li>
                                 <li><a href="#">Brooklyn</a></li>
                              </ul>
                              <div class="recent-ads-list-price">
                                 $ 17,000
                              </div>
                              <!-- /.recent-ads-list-price -->
                           </div>
                           <!-- /.recent-ads-list-content -->
                        </div>
                        <!-- /.recent-ads-container -->
                     </div>
                  </div>
                  <h3>Key Features</h3>
                  <p>Alarm, Alloy Wheels, Anti-Lock Brakes, Automatic Air Conditioning, Bluetooth Interface Telephone Equipment, Body Coloured Bumpers, Centre Console, Centre Rear Seat Belt, Cloth interior, Cruise Control, Driver Information System</p>
                  <h3>Link</h3>
                  <p><a href="https://themeforest.net/user/scriptsbundle/portfolio">https://themeforest.net/user/scriptsbundle/portfolio</a></p>
               </div>
               <div class="modal-footer">
                  <a href="" class="btn btn-fb btn-md"><i class="fa fa-facebook"></i></a>
                  <a class="btn btn-twitter btn-md"><i class="fa fa-twitter"></i></a>
                  <a class="btn btn-gplus btn-md"><i class="fa fa-google-plus"></i></a>
               </div>
            </div>
         </div>
      </div>
      
      <!-- =-=-=-=-=-=-= Report Ad Modal =-=-=-=-=-=-= -->
      <div class="modal fade report-quote" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  <h3 class="modal-title">Why are you reporting this ad?</h3>
               </div>
               <div class="modal-body">
                  <!-- content goes here -->
                  <form>
                     <div class="skin-minimal">
                        <div class="form-group col-md-6 col-sm-6">
                           <ul class="list">
                              <li >
                                 <input type="radio" id="spam" name="minimal-radio">
                                 <label for="spam">Spam</label>
                              </li>
                              <li>
                                 <input  type="radio" id="duplicated" name="minimal-radio" >
                                 <label for="duplicated">Duplicated</label>
                              </li>
                           </ul>
                        </div>
                        <div class="form-group  col-md-6 col-sm-6">
                           <ul class="list">
                              <li >
                                 <input  type="radio" id="offensive" name="minimal-radio">
                                 <label for="offensive">Offensive</label>
                              </li>
                              <li>
                                 <input  type="radio" id="expired" name="minimal-radio" checked>
                                 <label for="expired">Expired</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="form-group  col-md-12 col-sm-12">
                        <label>Comments</label>
                        <textarea placeholder="This ad not belong to me" rows="3" class="form-control">This ad not belong to me</textarea>
                     </div>
                     <div class="col-md-12 col-sm-12"> <img src="images/captcha.gif" alt="" class="img-responsive"> </div>
                     <div class="clearfix"></div>
                     <div class="col-md-12 col-sm-12 margin-bottom-20 margin-top-20">
                        <button type="submit" class="btn btn-theme btn-block">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="font-size: 16px" scope="col">Title</th>
                                <th style="font-size: 16px" scope="col">Bid Price</th>
                                <th style="font-size: 16px" scope="col">Ad Link</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="font-size: 16px"> </td>
                                    <td style="font-size: 16px"></td>
                                    <td style="font-size: 16px"><a href=""> click to view ad </a> </td>
                                </tr>   
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection
