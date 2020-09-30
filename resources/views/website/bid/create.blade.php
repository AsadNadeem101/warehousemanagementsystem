@extends('layouts.website_subpages')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <div class="page-header-area">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="header-page">
                     <h1>Bid Create</h1>
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
                  <li><a class="active" href="#">Bid Create</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Small Breadcrumb -->
      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bg ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-">
                     <!--  Form -->
                     <div class="form-grid">
                        <form method="POST" action="{{route('warehouseadbid.store')}}">
                           @csrf
                           <div class="form-group">
                              <label>Ad title</label>
                              <input placeholder="" class="form-control" value="{{$ad->title}}" type="text" readonly>
                           </div>
                           <div class="form-group">
                              <label>Bid Amount</label>
                              <input placeholder="" name="bid_amount" class="form-control" type="number">
                           </div>
                          
                           <input type="hidden" name="warehouse_ad_id" value="{{$ad->id}}">

                           <input type="hidden" name="renter_id" value="{{$renter_id}}">
                           <input type="hidden" name="tenant_id" value="{{$tenant_id}}">
                          
                           <button class="btn btn-theme btn-lg btn-block">Submit</button>
                        </form>
                     </div>
                     <!-- Form -->
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


@endsection