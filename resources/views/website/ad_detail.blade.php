@extends('layouts.website_subpages')
@section('content')
<div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Ad Detail</h1>
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
                  <li><a href="/index">Home Page</a></li>
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
                           <h1>{{$ad->title}}</h1>
                           <div class="short-history">
                              <ul>
                                 <li>Published on: <b>{{$ad->created_at}}</b></li>
                                 <li>Category: <b><a href="#">{{$ad->category}}</a></b></li>
                                 <li>City: <b>{{$ad->warehouse->city}}</b></li>
                              </ul>
                           </div>
                        </div>
                        <!-- Listing Slider  --> 
                        <!-- Listing Slider  -->
                        <div class="flexslider single-page-slider">
                           <div class="flex-viewport">

                           </div>
                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides slide-main" style="width: 1200%; transition-duration: 0s; transform: translate3d(-3750px, 0px, 0px);">
                                 @foreach($ad->adImages as $media)
                                 <li class="" style="width: 750px; float: left; display: block;"><img alt="" src="{{asset($media->path)}}" title="" draggable="false"></li>
                                 @endforeach
                              </ul></div>
                              <ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next flex-disabled" href="#" tabindex="-1"></a></li></ul></div>
                        <!-- Listing Slider Thumb -->
                        <div class="flexslider" id="carousels">
                           <div class="flex-viewport">

                           </div>
                           <div class="flex-viewport" style="overflow: hidden; position: relative;">
                              <ul class="slides slide-thumbnail" style="width: 1200%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                 @foreach($ad->adImages as $media)
                                 <li class="flex-active-slide" style="width: 110px; float: left; display: block;"><img alt="" draggable="false" src="{{asset($media->picture_link)}}"></li>
                                 @endforeach

                              </ul>
                        </div>
                        <ul class="flex-direction-nav"><li><a class="flex-prev flex-disabled" href="#" tabindex="-1"></a></li><li><a class="flex-next flex-disabled" href="#" tabindex="-1"></a></li></ul></div>
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
                              {{$ad->description}}
                           </div>
                           
                           <!-- Related Image  --> 
                           <div class="ad-related-img">
                              <img src="images/car-img1.png" alt="" class="img-responsive center-block">
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
                       
                        <!-- Price info block -->   
                        <div class="ad-listing-price">
                           <p>Rs. {{$ad->rent}}</p>
                        </div><hr>
                        
                        @if(Auth::user()->type == 'tenant')
                        <a href="warehouseadbid/create/{{$ad->id}}">
                        <div class="ad-listing-price">
                           <p>Bid Request</p>
                        </div>
                        </a>
                        @endif
                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                           <div class="user-info-card">
                              <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                 <img src="images/users/3.jpg" alt="">
                              </div>
                              <div class="user-information no-padding col-md-8 col-sm-9 col-xs-8">
                                 <span class="user-name"><a class="hover-color" href="">{{$ad->warehouse->user->name}}</a></span>
                                
                              </div>
                              <div class="clearfix"></div>
                           </div>
                           <div class="ad-listing-meta">
                              <ul>
                                 <li>Ad Id: <span class="color">{{$ad->id}}</span></li>
                                 <li>Categories: <span class="color">{{$ad->category}}</span></li>
                                 <li>Country: <span class="color">{{$ad->warehouse->country}}</span></li>
                                 <li>City: <span class="color">{{$ad->warehouse->city}}</span></li>
                                 <li>Address: <span class="color">{{$ad->warehouse->address}}</span></li>
                                 <li>Marla: <span class="color">{{$ad->marla}}</span></li>
                                 <li>Rooms: <span class="color">{{$ad->room}}</span></li>
                                 <li>Duration: <span class="color">{{$ad->duration}} month</span></li>
                              </ul>
                           </div>
                           <div id="itemMap" style="width: 100%; height: 370px; margin-bottom:5px;"></div>
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
      
   
      
       <!-- =-=-=-=-=-=-= Share Modal =-=-=-=-=-=-= -->
      <div class="modal fade share-ad" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               
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
     
@endsection
