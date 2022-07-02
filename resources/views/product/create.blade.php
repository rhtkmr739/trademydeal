@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/">Home</a><a href="/sellerdashboard">Seller Dashboard</a><span>Add Product</span></div>
                            
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
                            <form action="/seller/addProduct" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="col-md-12">
                                <div class="dashboard-title   fl-wrap">
                                    <h3>ADD PRODUCT DETAILS</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Product Name<i class="fal fa-user"></i></label>
                                                <input type="text" name="product_name" id="product_name" required  placeholder="Name of your product" value=""/>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Product Url<i class="far fa-globe"></i></label>
                                                <input type="text" readonly name="product_url" id="product_url" required placeholder="Url of your product" value=""/>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Product Short Description <i class="fal fa-pencil"></i></label>
                                                <input type="text" name="product_description" id="product_description" required placeholder="Maximum description 100 characters" value=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                    
                                <div class="dashboard-title  dt-inbox fl-wrap">
                                    <h3>ADD CATEGORY</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <label>Category</label>
                                                <select class="col-md-4 col-sm-4" style="width: 100%" id="category" required name="category">
                                                    <option disable value="" >Please select category</option>   
                                                @foreach($getCategories as $categories) 
                                                    <option value="{{ $categories->category_id }}">{{ $categories->category_name }}</option>
                                                @endforeach
                                                </select>                                                
                                            </div>
                                            <div class="col-sm-4 col-sm-4">
                                                <label>Sub Category</label>
                                                <select class="col-md-4 col-sm-4" style="width: 100%"  id="subcategory" required name="subcategory">
                                                    <option disable value="" >Please select category to get the options</option>
                                                </select>                                                
                                            </div>
                                            <div class="col-sm-4 col-sm-4">
                                                <label>Sub Sub Category</label>
                                                <select class="col-md-4 col-sm-4" style="width: 100%"  id="subsubcategory" required name="subsubcategory">
                                                    <option disable value="" >Please select sub category to get the options</option>
                                                </select>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile-edit-container end-->                                     
                                
                                
                                <!-- profile-edit-container end-->                                     
                                <div class="dashboard-title  dt-inbox fl-wrap">
                                    <h3>Header Media</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <!--col --> 
                                            <div class="col-md-4">
                                                <div class="add-list-media-header" style="margin-bottom:20px">
                                                    <label> 
                                                    <span>Primary Banner Image</span> 
                                                    </label>
                                                </div>
                                                <div class="add-list-media-wrap">
                                                    <div class="add-list-media-wrap">
                                                        <div class="listsearch-input-item fl-wrap">
                                                            <div class="fuzone">
                                                                
                                                                    <div class="fu-text">
                                                                        <span><i class="fal fa-images"></i> Click here or drop files to upload</span>
                                                                        <div class="photoUpload-files fl-wrap"></div>
                                                                    </div>
                                                                    <input type="file" id="product_banner_image" name="product_banner_image" class="upload">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--col end--> 
                                            <!--col --> 
                                            <div class="col-md-8">
                                                <div class="add-list-media-header" style="margin-bottom:20px">
                                                    <label> 
                                                    <span>Image Gallery</span> 
                                                    </label>
                                                </div>
                                                <div class="add-list-media-wrap">
                                                    <div class="listsearch-input-item fl-wrap">
                                                        <div class="fuzone">
                                                            
                                                                <div class="fu-text">
                                                                    <span><i class="fal fa-images"></i> Click here or drop files to upload</span>
                                                                    <div class="photoUpload-files fl-wrap"></div>
                                                                </div>
                                                                <input type="file" id="product_image_gallery" name="product_image_gallery[]"  class="upload" multiple>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--col end-->                                                 
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
                                        <div class="col-md-12">
                                                <!-- act-widget--> 
                                                <div class="act-widget fl-wrap">
                                                    <div class="act-widget-header">
                                                        <h4>Select YES if product's contact and location is same as of seller's contact and location.</h4>
                                                        <div class="onoffswitch">
                                                            <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="copy-seller-info" checked>
                                                            <label class="onoffswitch-label" for="copy-seller-info">
                                                            <span class="onoffswitch-inner"></span>
                                                            <span class="onoffswitch-switch"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- act-widget end-->
                                            </div>
                                        </div>
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
                                                <input type="text" name="mobile" id="mobile" required placeholder="Enter contact number of your product" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Email<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="email" id="email" required placeholder="Enter email address of your product" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Address<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="address" id="address" required placeholder="Enter address of your product" value=""/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>City<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="city"  id="city" required placeholder="Enter city of your product" value=""/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>State<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="state" id="state" required placeholder="Enter state of your product" value=""/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Pincode<i class="far fa-map-marker"></i>  </label>
                                                <input type="text" name="pincode"  id="pincode" required placeholder="Enter pincode of your product" value=""/> 
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <button type="submit" class="btn color2-bg float-btn pull-right">ADD PRODUCT<i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
<script src="{{ asset('theme/js/seller.js') }}"></script>
