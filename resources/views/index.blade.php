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
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cars.png">
                        <h4><a href="#">Cars & Bikes</a></h4>
                        <strong>1,265 Jobs</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/mobile-1.png">
                        <h4><a href="#">Mobile Phones</a></h4>
                        <strong>1,265 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/applinces.png">
                        <h4><a href="#">Home Appliances</a></h4>
                        <strong>6,213 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/cloths.png">
                        <h4><a href="#">Clothing</a></h4>
                        <strong>3,750 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/education.png">
                        <h4><a href="#">Education & Art</a></h4>
                        <strong>5,913 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/computer-1.png">
                        <h4><a href="#">Computer & Laptops</a></h4>
                        <strong>9,942 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/pets.png">
                        <h4><a href="#">Pets & Animals</a></h4>
                        <strong>3,891 Ads</strong> 
                     </div>
                  </div>
                  <!-- Category Grid  -->
                  <div class="col-md-3 col-xs-12 col-sm-6">
                     <div class="box">
                        <img alt="img" src="images/category/newspaper.png">
                        <h4><a href="#">Newspaper Jobs</a></h4>
                        <strong>7,418 Ads</strong> 
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
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
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class="row">
                        <div class="featured-slider owl-carousel owl-theme">
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/1.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">2017 Honda Civic EX</a></h3>
                                       <!-- Price -->
                                       <div class="price">$18,200 <span class="negotiable">(Negotiable)</span></div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/mob-2.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Released 2015, November</p>
                                          <p> 5.5 inches</p>
                                          <p> 23 MP</p>
                                          <p>3GB RAM</p>
                                          <p> 3430mAh</p>
                                          <p> Android OS, v6.0</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Mobile Phones</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Sony Xperia Z5 </a></h3>
                                       <!-- Price -->
                                       <div class="price">$250 <span class="negotiable">(Negotiable)</span></div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/house-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Real Estate</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Cras ut eleifend quam</a></h3>
                                       <!-- Price -->
                                       <div class="price">$103,000 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Audi A7 3.0T quattro Prestige</a></h3>
                                       <!-- Price -->
                                       <div class="price">$57,988 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/lap-2.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/8.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>13.3-inch </p>
                                          <p> 1.6GHz dual-core</p>
                                          <p> Intel HD Graphics 6000</p>
                                          <p>8GB Ram </p>
                                          <p>LED-backlit glossy widescreen</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Sony Vaio Pro 13 Ultrabook</a></h3>
                                       <!-- Price -->
                                       <div class="price">$595.99 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/spo-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Vestibulum est nunc</a></h3>
                                       <!-- Price -->
                                       <button data-toggle="modal" data-target=".price-quote" class="btn btn-success">Email For Price</button>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/fur-3.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>5 Executive Tables</p>
                                          <p>7 Sitting Chairs </p>
                                          <p> 1 Sofa Set</p>
                                          <p>2 executive Cabins </p>
                                          <p> Double sofa 1</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Furniture And Toys</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html"> Pedding design bed set  </a></h3>
                                       <!-- Price -->
                                       <div class="price">$550 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/spo-5.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Size: 800 Sq. Ft</p>
                                          <p> 2 Beds</p>
                                          <p> 1 Full Bath</p>
                                          <p> Single Family</p>
                                          <p> Built in 2015</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Sports & Equipment</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">Cras ut eleifend quam</a></h3>
                                       <!-- Price -->
                                       <div class="price">$103,000 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                              <div class="col-md-12 col-xs-12 col-sm-12 clearfix">
                                 <!-- Ad Box -->
                                 <div class="category-grid-box">
                                    <!-- Ad Img -->
                                    <div class="category-grid-img">
                                       <img class="img-responsive" alt="" src="images/posting/car-4.jpg">
                                       <!-- User Review -->
                                       <div class="user-preview">
                                          <a href="#"> <img src="images/users/4.jpg" class="avatar avatar-small" alt=""> </a>
                                       </div>
                                       <!-- View Details --><a href="" class="view-details">View Details</a>
                                       <!-- Additional Info -->
                                       <div class="additional-information">
                                          <p>Registration 2017</p>
                                          <p> 3.0 Diesel</p>
                                          <p> 230 HP</p>
                                          <p> Body Coupe</p>
                                          <p> 80 000 Miles</p>
                                       </div>
                                       <!-- Additional Info End-->
                                    </div>
                                    <!-- Ad Img End -->
                                    <div class="short-description">
                                       <!-- Ad Category -->
                                       <div class="category-title"> <span><a href="#">Electronics & Gedgets</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3><a title="" href="single-page-listing.html">2007 BMW 3 Series 335i</a></h3>
                                       <!-- Price -->
                                       <div class="price">$9,995 </div>
                                    </div>
                                    <!-- Addition Info -->
                                    <div class="ad-info">
                                       <ul>
                                          <li><i class="fa fa-map-marker"></i>London</li>
                                          <li><i class="fa fa-clock-o"></i> 15 minutes ago </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
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
                        <h1>Latest <span class="heading-color"> Trending</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <ul class="list-unstyled">
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/car-4.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>8</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/2.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Honda Civic 2017 Sports Edition</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$18,640</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/list-2.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>4</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/6.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Honda CBR 1000RR  for Sale</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$900</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/12.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>5</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/5.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Art & Toys</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a> Xbox 360 + Games + Accessories </a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$120</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/lap-4.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>3</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/3.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Laptops</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a> Sony VAIO Duo Convertible 13.3" i7 </a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$1,129</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                        <!-- Listing Grid -->
                        <li>
                           <div class="well ad-listing clearfix">
                              <div class="col-md-3 col-sm-5 col-xs-12 grid-style no-padding">
                                 <!-- Image Box -->
                                 <div class="img-box">
                                    <img src="images/posting/list-10.jpg" class="img-responsive" alt="">
                                    <div class="total-images"><strong>4</strong> photos </div>
                                    <div class="quick-view"> <a href="#ad-preview" data-toggle="modal" class="view-button"><i class="fa fa-search"></i></a> </div>
                                 </div>
                                 <!-- Ad Status --><span class="ad-status"> Featured </span>
                                 <!-- User Preview -->
                                 <div class="user-preview">
                                    <a href="#"> <img src="images/users/4.jpg" class="avatar avatar-small" alt=""> </a>
                                 </div>
                              </div>
                              <div class="col-md-9 col-sm-7 col-xs-12">
                                 <!-- Ad Content-->
                                 <div class="row">
                                    <div class="content-area">
                                       <div class="col-md-9 col-sm-12 col-xs-12">
                                          <!-- Category Title -->
                                          <div class="category-title"> <span><a href="#">Mobiles</a></span> </div>
                                          <!-- Ad Title -->
                                          <h3><a>Sony Xperia Z5 Waterproof</a></h3>
                                          <!-- Info Icons -->
                                          <ul class="additional-info pull-right">
                                             <li>
                                                <a data-toggle="tooltip" title="Send Message" href="#" class="fa fa-envelope"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="+92-4567-123" href="#" class="fa fa-phone"></a>
                                             </li>
                                             <li>
                                                <a data-toggle="tooltip" title="Bookmark" href="#" class="fa fa-heart"></a>
                                             </li>
                                          </ul>
                                          <!-- Ad Meta Info -->
                                          <ul class="ad-meta-info">
                                             <li> <i class="fa fa-map-marker"></i><a href="#">London</a> </li>
                                             <li> <i class="fa fa-clock-o"></i>15 minutes ago </li>
                                          </ul>
                                          <!-- Ad Description-->
                                          <div class="ad-details">
                                             <p>Lorem ipsum dolor sit amet consectetur adiscing das elited ultricies facilisis lacinia pell das elited ultricies facilisis ... </p>
                                          </div>
                                       </div>
                                       <div class="col-md-3 col-xs-12 col-sm-12">
                                          <!-- Ad Stats -->
                                          <div class="short-info">
                                             <div class="ad-stats hidden-xs"><span>Condition  : </span>Used</div>
                                             <div class="ad-stats hidden-xs"><span>Warranty : </span>7 Days</div>
                                             <div class="ad-stats hidden-xs"><span>Sub Category : </span>Mobiles</div>
                                          </div>
                                          <!-- Price -->
                                          <div class="price"> <span>$350</span> </div>
                                          <!-- Ad View Button -->
                                          <button class="btn btn-block btn-success"><i class="fa fa-eye" aria-hidden="true"></i> View Ad.</button>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Ad Content End -->
                              </div>
                           </div>
                        </li>
                     </ul>
                     <div class="text-center">
                        <ul class="pagination ">
                           <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                           <li><a href="#">1</a></li>
                           <li class="active"><a href="#">2</a></li>
                           <li><a href="#">...</a></li>
                           <li><a href="#">10</a></li>
                           <li><a href="#">20</a></li>
                           <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                     </div>
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
                           <li>Find nearby cars in your network with Scholar</li>
                           <li>Browse real hirers reviews to know why choose Scholar</li>
                           <li>Rent a car so easy with a tap !</li>
                           <li>Rent a car so easy with a tap !</li>
                        </ul>
                        <button class="btn btn-lg btn-theme"> Join Us now <i class="fa fa-refresh"></i> </button>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 no-padding">
                     <div class="pricing-fancy ">
                        <div class="icon-bg"><i class="flaticon-money-2"></i></div>
                        <h3><strong>Featured</strong> <span class="thin">Ads</span></h3>
                        <div class="price-box">
                           <div class="price-large"> <span class="dollartext">$</span>1.99<span class="monthtext">/month</span> </div>
                           <p>Regulary <del>$5.00</del></p>
                           <a href="#" class="btn btn-lg btn-theme">Submit Featured Ad</a> 
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container /- -->
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Featured Ad Parallex End =-=-=-=-=-=-= -->
         
@endsection

         

<!-- 

 <link rel="stylesheet" href="{{asset('css/forest-menu.css')}}" type="text/css">
<script src="{{asset('js/color-switcher.js')}}"></script> -->