@include('common.head')

<link type="text/css" rel="stylesheet" href="{{ asset('theme/css/selectize.css') }}">

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Employee Dashboard</a><span>Create Seller</span></div>
                            
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1><span>Hi, {{session('userdetail')[0]->userName}} </span></h1>
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
                        <div class="">
                            <!--  dashboard-menu-->
                           @include('common.admin.employee.sidebar')
                            <!-- dashboard-menu  end-->
                            <div class="col-md-9">
                            <!-- dashboard content-->
                            <form action="/employee/addSeller" method="post">
                            @csrf

                            <div class="col-md-12">
                                <div class="dashboard-title   fl-wrap">
                                    <h3>ADD SELLER DETAILS</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="col-md-12">
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
                                        
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <label>Business Short Description <i class="fal fa-pencil"></i></label>
                                                <input type="text" name="description" required placeholder="Maximum description 100 characters" value=""/>
                                            </div>
                                            <div class="col-md-12">
                                                <label>Select Categories</label>
                                                <select style="width: 100%" id="categories" required multiple="multiple" name="categories[]">
                                                    <option disable value="" ></option> 
                                                    @foreach($getAllActiveCategoriesForSeller as $category)
                                                    <option  value="{{$category->category_id}}" >{{$category->category_name}}</option>  
                                                    @endforeach  
                                                </select> 
                                            </div>
                                            <div class="col-md-12">
                                                <label>Select Custom Tags</label>
                                                <input type="text" id="customtags" name="customtags" class="demo-default" value="new,trend"> 
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
                                        <div class="col-md-12">
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
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <label>Contact Number<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="mobile" required placeholder="Enter contact number of your business" value=""/>                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label>Email<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="email" required placeholder="Enter email address of your business" value=""/>                                                
                                            </div>
                                            <div class="col-md-12">
                                                <label>Address<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="address" required placeholder="Enter address of your business" value=""/>                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label>City<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="city" required placeholder="Enter city of your business" value=""/> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>State<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="state" required placeholder="Enter state of your business" value=""/> 
                                            </div>
                                            <div class="col-md-6">
                                                <label>Pincode<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="pincode" required placeholder="Enter pincode of your business" value=""/> 
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label>County</label>
                                                <select style="width: 100%" id="countryid" required name="countryid">
                                                    @foreach($countryList as $country)
                                                    <option  value="{{$country->id}}" >{{$country->country_name}}</option>  
                                                    @endforeach  
                                                </select> 
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <label>Account Status</label>
                                                    <select style="width: 100%" id="status_code_id" required name="status_code_id">
                                                        @foreach($getStatusList as $status)
                                                        <option  value="{{$status->status_code_id}}" >{{$status->status_code_name}}</option>  
                                                        @endforeach  
                                                    </select> 
                                                </div>

                                                <div class="col-md-6">
                                                    <label>Account Login Password<i class="far fa-map-marker"></i>  </label>
                                                    <input type="text" name="password" id="password" required placeholder="Enter login password of seller" value=""/> 
                                                </div>
                                            </div>
                                            



                                        </div>
                                        <div class="col-md-12">
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
<script src="{{ asset('theme/js/selectize.js') }}"></script>
<script src="{{ asset('theme/js/employee.js') }}"></script>
