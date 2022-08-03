@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    @include('common.seller.top')
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg main-dashboard-sec" id="sec1">
                        <div class="container">
                             <!--  dashboard-menu-->
                             @include('common.seller.sidebar') 
                            <!-- dashboard-menu  end-->

                            <!-- dashboard content-->

                            <form action="/seller/addProduct" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="col-md-9">
                                <div class="dashboard-title   fl-wrap">
                                    <h3 class="text-uppercase">{{{$getSellerProfileData[0]->user_type_name}}} PROFILE</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Name<i class="fal fa-user"></i></label>
                                                <input type="text" name="name" id="name" required placeholder="Enter name" value="{{session('userdetail')[0]->userName}}" readonly/>                                             
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Company Name<i class="fal fa-building"></i></label>
                                                <input type="text" name="company" id="company" required placeholder="Enter company name" value="{{$getSellerProfileData[0]->user_company_name}}"/>                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Email<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="email" id="email" required placeholder="Enter email address of your product" value="{{$getSellerProfileData[0]->user_company_email}}" readonly/>                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Contact Number<i class="fal fa-phone"></i></label>
                                                <input type="text" name="mobile" id="mobile" required placeholder="Enter contact number of your product" value="{{$getSellerProfileData[0]->user_company_mobile}}"/>                                                
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <label>Address<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="address" id="address" required placeholder="Enter address of your product" value="{{$getSellerProfileData[0]->user_company_address}}"/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>City<i class="far fa-city"></i>  </label>
                                                <input type="text" name="city"  id="city" required placeholder="Enter city of your product" value="{{$getSellerProfileData[0]->user_company_city}}"/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>State<i class=""></i>  </label>
                                                <input type="text" name="state" id="state" required placeholder="Enter state of your product" value="{{$getSellerProfileData[0]->user_company_state}}"/> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Pincode<i class=""></i>  </label>
                                                <input type="text" name="pincode"  id="pincode" required placeholder="Enter pincode of your product" value="{{$getSellerProfileData[0]->user_company_zipcode}}"/> 
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Country<i class="far fa-flag"></i>  </label>
                                                <input type="text" name="pincode"  id="pincode" required placeholder="Enter pincode of your product" value="{{$getSellerProfileData[0]->country_name}}"/> 
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Website<i class="far fa-globe"></i>  </label>
                                                <input type="text" name="pincode"  id="pincode" required placeholder="Enter pincode of your product" value="{{$getSellerProfileData[0]->user_company_website}}"/> 
                                            </div>

                                            <div class="col-sm-12">
                                                <label>Description </label>
                                                <textarea name="" id="" cols="20" rows="5">{{$getSellerProfileData[0]->user_detail_desc}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>                                                            
                                <!-- profile-edit-container end-->   
                                <div class="dashboard-title  dt-inbox fl-wrap">
                                    <h3>SUBSCRIPTION DETAILS</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Subscription Plan Name </label>
                                                <input type="text" name="sub_name" id="sub_name" value="{{$getSellerProfileData[0]->subscription_plan_name}}" readonly/>                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label>Subscription Plan Price <i class="far fa-inr"></i>  </label>
                                                <input type="text" name="sub_price" id="sub_price" value="{{$getSellerProfileData[0]->subscription_plan_price}}" readonly/>                                            
                                            </div>
                                        </div>
                                                                               
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Subscription Plan Cycle <i class="fal fa-calendar"></i></label>
                                                <input type="text" name="sub_plan_cyc" id="sub_plan_cyc" value="{{$getSellerProfileData[0]->subscription_plan_cycle}}" readonly/>                                                
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Subscription Plan Monthly Leads<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="sub_plan_cyc" id="sub_plan_cyc" value="{{$getSellerProfileData[0]->subscription_plan_monthly_leads}}" readonly/>                                                
                                            </div>
                                           
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                            <button type="submit" class="btn color2-bg float-btn pull-right">CONFIRM<i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
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
