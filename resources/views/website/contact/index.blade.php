
@extends('layouts.website_subpages')
@section('content')

      <!-- =-=-=-=-=-=-= Transparent Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Get In Touch</h1>
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
                  <li><a class="active" href="/contact">Contact</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12 no-padding commentForm">
                     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="">
                           <h2 >Send a Message</h2>
                           <form method="post"  action="#">
                              <div class="row">
                                 <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                       <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                       <textarea cols="12" rows="7" placeholder="Message..." id="message" name="message" class="form-control" required></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button class="btn btn-theme" type="submit">Send Message</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="contactInfo">
                           <h2>Contact Info</h2>
                           <div class="singleContadds">
                              <i class="fa fa-map-marker"></i>
                              <p>
                                 Model Town Link Road Lahore, 60 Street. Pakistan 54770
                              </p>
                           </div>
                           <div class="singleContadds phone">
                              <i class="fa fa-phone"></i>
                              <p>
                                 +(92)304-496-666-9 <span>Mobile</span>
                              </p>
                           </div>
                           <div class="singleContadds">
                              <i class="fa fa-envelope"></i>
                              <a href="#">warehousemanagement07@gmail.com</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
        @endsection