@include('common.head')
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/">Home</a><a href="/admin/dashboard">Admin Dashboard</a><span>Promotional Users</span></div>
                            
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1>Hi, <span>{{session('userdetail')[0]->userCompanyName}}</span></h1>
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
                            @include('common.admin.sidebar')
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9">
                                <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>PROMOTIONAL GROUPS DETAIL</h3>
                                </div>
                                <div class="box-widget-item fl-wrap">
                                    <div class="search-widget col-md-6 pull-right" id="create-group-section">
                                            <input name="create-group" id="create-group" type="text" class="search" placeholder="ENTER NEW GROUP NAME HERE TO CREATE" value="" />
                                            <button class="search-submit color2-bg" id="create-group-btn"> <i>ADD</i> </button>
                                    </div>
                                </div>
                                <!-- dashboard-list-box--> 
                                <div class="dashboard-list-box  fl-wrap">

                                <!-- accordion-->
                                    <div class="accordion mar-top" id="sec5">
                                    @foreach($promotionalGroupList as $group)
                                        <a class="toggle act-accordion promotional-group-accordion" href="javascript:void(0)" data-groupid={{ $group->promotional_group_id }}> {{ $group->promotional_group_name }}  ({{$group->promotional_group_users_counts}} user)  <span></span></a>
                                        <div class="accordion-inner" data-groupid={{ $group->promotional_group_id }}>
                                            <div class="box-widget opening-hours fl-wrap">
                                                <textarea class="form-control ckeditor" name="mail-content-{{ $group->promotional_group_id }}" data-ckeditor={{ $group->promotional_group_id }}></textarea>
                                            </div>
                                            <div class="custom-form mail-otp-section box-widget opening-hours coupon-holder fl-wrap">
                                                <button class="btn color2-bg float-btn validate-mail-otp">Validate via OTP<i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                        @endforeach 
                                      
                                    </div>
                                <!-- accordion end -->
              
                                </div>
                                <!-- dashboard-list-box end--> 
                            </div>
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

<script src="{{ asset('theme/js/promotional.js') }}"></script>
<script src="{{ asset('theme/js/mail-otp.js') }}"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>