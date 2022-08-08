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

                            <form action="" method="" id="editSellerProfile" enctype="multipart/form-data">
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
                                                <input type="text" name="sellerName" id="sellerName" required placeholder="Enter name" value="{{session('userdetail')[0]->userName}}" readonly/>
                                                                                        
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Company Name<i class="fal fa-building"></i></label>
                                                <input type="text" name="sellerCompany" id="sellerCompany" required placeholder="Enter company name" value="{{$getSellerProfileData[0]->user_company_name}}" readonly/>                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Email<i class="fal fa-envelope"></i></label>
                                                <input type="text" name="sellerEmail" id="sellerEmail" required placeholder="Enter your email address" value="{{$getSellerProfileData[0]->user_company_email}}" readonly/>                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Contact Number<i class="fal fa-phone"></i></label>
                                                <input type="text" name="sellerMobile" id="sellerMobile" required placeholder="Enter your contact number" value="{{$getSellerProfileData[0]->user_company_mobile}}"/>
                                                <span class="sellerMobileError allErrors" style="color:red;"></span>                                                
                                            </div>
                                            
                                            <div class="col-sm-6">
                                                <label>Address<i class="fal fa-map-marker"></i></label>
                                                <input type="text" name="sellerAddress" id="sellerAddress" required placeholder="Enter address of your company" value="{{$getSellerProfileData[0]->user_company_address}}"/><span class="sellerAddressError allErrors" style="color:red;"></span>                                                  
                                            </div>
                                            <div class="col-sm-6">
                                                <label>City<i class="far fa-city"></i>  </label>
                                                <input type="text" name="sellerCity"  id="sellerCity" required placeholder="Enter city" value="{{$getSellerProfileData[0]->user_company_city}}"/>
                                                <span class="sellerCityError allErrors" style="color:red;"></span>  
                                            </div>
                                            <div class="col-sm-6">
                                                <label>State<i class=""></i>  </label>
                                                <input type="text" name="sellerState" id="sellerState" required placeholder="Enter state" value="{{$getSellerProfileData[0]->user_company_state}}"/> 
                                                <span class="sellerStateError allErrors" style="color:red;"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Pincode<i class=""></i>  </label>
                                                <input type="text" name="sellerPincode"  id="sellerPincode" required placeholder="Enter pincode " value="{{$getSellerProfileData[0]->user_company_zipcode}}"/>
                                                <span class="sellerPincodeError allErrors" style="color:red;"></span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Country<i class="far fa-flag"></i>  </label>
                                                <input type="text" name="sellerCountry"  id="sellerCountry" required placeholder="Enter your country name" value="{{$getSellerProfileData[0]->country_name}}"/>
                                                
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Website<i class="far fa-globe"></i>  </label>
                                                <input type="text" name="sellerWebsite"  id="sellerWebsite" required placeholder="Enter your company website" value="{{$getSellerProfileData[0]->user_company_website}}"/>
                                                <span class="sellerWebsiteError allErrors" style="color:red;"></span>
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
                                            <button type="submit" class="btn color2-bg float-btn pull-right" id="editSellerProfileBtn">SAVE<i class="fal fa-paper-plane"></i></button>
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
