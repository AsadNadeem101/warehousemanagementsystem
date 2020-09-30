@extends('layouts.website')
@section('content')
      <!-- =-=-=-=-=-=-= Transparent Header =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Home Banner 2 =-=-=-=-=-=-= -->
      <div id="banner">
         <div class="container">
            <div class="search-container">
               <!-- Form -->
               <h2>What are you looking for ?</h2>
               <form>
                  <!-- Search Input -->
                  <div class="col-md-4 col-sm-6 col-xs-12 no-padding">
                     <div class="form-group">
                        <input type="text" class="form-control banner-icon-search" name="keyword" placeholder="used car, mobiles or looking for house" value=""> 
                     </div>
                  </div>
                  <!-- Search Category -->
                  <div class="col-md-3 col-sm-6 col-xs-12 no-padding">
                     <div class="form-group">
                        <select class="category form-control">
                           <option label="Select Option"></option>
                           <option value="0">Cars & Bikes</option>
                           <option value="1">Mobile Phones</option>
                           <option value="2">Home Appliances</option>
                           <option value="3">Clothing</option>
                           <option value="4">Human Resource</option>
                           <option value="5">Information Technology</option>
                           <option value="6">Marketing</option>
                           <option value="7">Others</option>
                           <option value="8">Sales</option>
                        </select>
                     </div>
                  </div>
                  <!-- Search Location -->
                  <div class="col-md-3 col-sm-9 col-xs-12 no-padding">
                     <div class="form-group">
                        <select class="cities form-control">
                           <option value="0">SriLanka</option>
                           <option value="1">Australia</option>
                           <option value="2">Bahrain</option>
                           <option value="3">Canada</option>
                           <option value="4">Denmark</option>
                           <option value="5">Germany</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-2 col-sm-3 col-xs-12 no-padding">
                     <div class="form-group form-action">
                        <button type="button" class="btn btn-theme btn-search-submit">Search</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Popular Categories =-=-=-=-=-=-= -->
         
         <!-- =-=-=-=-=-=-= Popular Categories End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Ads =-=-=-=-=-=-= -->
         <section class="custom-padding">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Browse <span class="heading-color"> Featured</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Featured Ads</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <div class="featured-slider owl-carousel owl-theme">
                           
                           @if($status == 1 )
                           <div style="text-align: center">
                              <b>
                                <h3> {{$warehouse_ad_featureds}}</h3>
                              </b>
                           </div>
                           
                           @else
                           @foreach($warehouse_ad_featureds as $warehouse_ad_featured)
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                      <img alt="" src="{{asset($warehouse_ad_featured->adImage()->first()->path)}}" title="">
                                       <!-- User Review -->
                                       <span class="ad-status"> Featured </span>
                                       <!-- View Details -->
                                       <a href="/ad_detail/{{$warehouse_ad_featured->id}}" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p></p>
                                          <p> Duration {{$warehouse_ad_featured->duration}}</p>
                                          <p> Marla {{$warehouse_ad_featured->marla}}</p>
                                          <p> Room {{$warehouse_ad_featured->room}}</p>
                                          
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Warehouses</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">{{$warehouse_ad_featured->title}} </a></h3>
                                       <!-- Price -->
                                       <div class="price">Rs {{$warehouse_ad_featured->rent}} </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-globe"></i>  {{$warehouse_ad_featured->warehouse->country}}</li>
                                          <li><i class="fa fa-map-marker"></i> {{$warehouse_ad_featured->warehouse->city}}</li>
                                          
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           @endforeach
                           @endif


                           
                        </div>
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Trending Ads =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Uploaded</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Latest ads are uploaded here.You can just select and get the warehouse on rent.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <ul class="list-unstyled">
                        <!-- Listing Grid -->
                        @foreach($active_ads as $ad)
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->                      
                                 <div class="img-box" style="height:186px">
                                     <img alt="" src="{{asset($ad->adImage()->first()->path)}}" title="">
                                    <div class="total-images"><strong>8</strong> photos </div>
                                 </div>
                                 <!-- User Preview -->
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Warehouses</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>{{$ad->title}}</a></h3>
                                          <!-- Info Icons -->
                                          <!-- <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul> -->
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-globe"></i>{{$ad->warehouse->country}} </li>
                                             <li> <i class="fa fa-map-marker"></i>{{$ad->warehouse->city}} </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>{{$ad->description}} </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Duration  : </span>{{$ad->duration}} months</div>
                                             <div class="ad-stats hidden-xs"><span>Marla : </span>{{$ad->marla}}</div>
                                             <div class="ad-stats hidden-xs"><span>Rooms : </span>{{$ad->room}}</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>Rs {{$ad->rent}}</span><span style="font-size: 13px; color: grey">(per month)</span> </div>
                                          <!-- Ad View Button -->
                                          <a href="/ad_detail/{{$ad->id}}">
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                                
                              </div>
                           </div>
                        </li>
                         @endforeach
                           <div style="text-align: right">
                              {!! $active_ads->links() !!}    
                           </div>
                          
                     </ul>
                  
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Trending Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Featured Ad Parallex =-=-=-=-=-=-= -->
         <section class="parallex bg-3 featured-ads">
            <div class="container">
               <!-- Container -->
               <div class="container">
                  <div class="col-md-8 col-sm-6 no-padding">
                     <div class="app-text-section">
                        <h5>Featured Ads</h5>
                        <h3>Get more exposure </h3>
                        <ul>
                           <li>Find nearby warehouse in your network with Scholar</li>
                           <li>You ads are in high priority</li>
                           <li>Rent a warehouse so easy with a tap !</li>
                           
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 no-padding">
                     <div class="pricing-fancy ">
                        <div class="icon-bg"><i class="flaticon-money-2"></i></div>
                        <h3><strong>Featured</strong> <span class="thin">Ads</span></h3>
                        <div class="price-box">
                           <div class="price-large"> <span class="dollartext">Rs</span>200<span class="monthtext">/month</span> </div>
                           <p>Regulary <del>Rs 450</del></p>
                           @if(Auth::check())
                              @if(Auth::user()->type == 'renter')
                                 <a href="/warehouse" class="btn btn-lg btn-theme">REGISER OUR WAREHOUSE</a> 
                              @endif
                           @endif
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container /- -->
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Featured Ad Parallex End =-=-=-=-=-=-= -->
         
@endsection