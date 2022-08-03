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

                            <form action="" method="" enctype="multipart/form-data">
                            @csrf

                                <div class="col-md-9">
                                <div class="dashboard-title   fl-wrap">
                                    <h3>CHANGE PASSWORD</h3>
                                </div>
                                <!-- profile-edit-container--> 
                                <div class="profile-edit-container fl-wrap block_box">
                                    <div class="custom-form">
                                        <div class="row">
                                            
                                        <div class="col-sm-6">
                                                <label>Current Password<i class="fal fa-eye"></i></label>
                                                <input type="password" name="current_password" id="current_password" placeholder="Enter your current password" required/>                                             
                                            </div>

                                            <div class="col-sm-6">
                                                <label>New Password<i class="fal fa-eye"></i></label>
                                                <input type="password" name="new_password" id="new_password" placeholder="Enter new password" required/>
                                             </div>

                                            <div class="col-sm-6">
                                                <label>Confirm New Password<i class="fal fa-eye"></i></label>
                                                <input type="password" name="conf_new_password" id="conf_new_password" placeholder="Confirm password" required/>                                                             
                                            </div>                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn color2-bg float-btn pull-right" id="change-seller-password">SAVE<i class="fal fa-paper-plane"></i></button>
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
