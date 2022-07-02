@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><span>Become a Seller</span></div>
                            
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1><span>Hi, {{Auth::user()->name}} </span></h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
                            <div class="circle_bg-bal circle_bg-bal_small"></div>
                        </div>
                        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
                            <div class="circle_bg-bal circle_bg-bal_big"></div>
                        </div>
                        <div class="circle-wrap" style="left:40%;bottom:-70px;"  >
                            <div class="circle_bg-bal circle_bg-bal_middle"></div>
                        </div>
                        <div class="circle-wrap" style="right:40%;top:-10px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                        <div class="circle-wrap" style="right:55%;top:90px;"  >
                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '-350px' }"></div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg main-dashboard-sec" id="sec1">
                        <div class="container">
                            <!-- dashboard content-->
                            <form action="/seller/addSeller" method="post">
                            @csrf

                                <div class="col-md-12">
                                <div class="dashboard-title   fl-wrap">
                                    <h3>ADD SELLER DETAILS</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Business Name<i class="fal fa-user"></i></label>
                                                <input type="text" name="name" id="name" required  placeholder="Name of your business" value=""/>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Business Catalog Url<i class="far fa-globe"></i></label>
                                                <input type="text" readonly name="catalogurl" id="catalogurl" required  placeholder="Name of your catalog url" value=""/>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Business Website<i class="far fa-globe"></i></label>
                                                <input type="text" name="website" required placeholder="Website of your business" value=""/>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Business Short Description <i class="fal fa-pencil"></i></label>
                                                <input type="text" name="description" required placeholder="Maximum description 100 characters" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                    
                                <div class="dashboard-title  dt-inbox fl-wrap">
                                    <h3>ADD LOCATION / CONTACT</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Longitude (Drag marker on the map)<i class="fal fa-long-arrow-alt-right"></i>  </label>
                                                <input type="text" name="long" readonly required placeholder="Map Longitude"  id="long" value=""/>                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label>Latitude (Drag marker on the map) <i class="fal fa-long-arrow-alt-down"></i> </label>
                                                <input type="text" name="lat" readonly required placeholder="Map Latitude"  id="lat" value=""/>                                            
                                            </div>
                                        </div>
                                        <div class="map-container">
                                            <div id="singleMap" class="drag-map" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Contact Number<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="mobile" required placeholder="Enter contact number of your business" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Email<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="email" required placeholder="Enter email address of your business" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Address<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="address" required placeholder="Enter address of your business" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>City<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="city" required placeholder="Enter city of your business" value=""/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>State<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="state" required placeholder="Enter state of your business" value=""/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Pincode<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="pincode" required placeholder="Enter pincode of your business" value=""/> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <button type="submit" class="btn color2-bg float-btn pull-right">CONFIRM<i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                     
                                   
                                <!-- profile-edit-container end-->                                    
                            </div>
                            </form>
                            <!-- dashboard content end-->
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
@include('common.foot') 
<script src="{{ asset('theme/js/map-add.js') }}"></script>
<script src="{{ asset('theme/js/seller-catalog.js') }}"></script>
