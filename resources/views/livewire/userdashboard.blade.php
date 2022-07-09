@include('common.head')

           
            
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><span>User dashboard page</span></div>
                            <!--Tariff Plan menu-->
                            <div   class="tfp-btn"><span>Membership Name : </span> <strong>FREE MEMBER</strong></div>
                            <div class="tfp-det">
                                <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                <a href="#" class="tfp-det-btn color2-bg">Details</a>
                            </div>
                            <!--Tariff Plan menu end-->
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1>Welcome, <span>{{Auth::user()->name}}</span></h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="dashboard-header fl-wrap">
                            <div class="container">
                                <div class="dashboard-header_conatiner fl-wrap">
                                    <div class="dashboard-header-avatar">
                                        <img src="{{ asset('theme/images/avatar/1.jpg') }}" alt="">
                                        <a href="dashboard-myprofile.html" class="color-bg edit-prof_btn"><i class="fal fa-edit"></i></a>
                                    </div>
                                    <div class="dashboard-header-stats-wrap">
                                        <div class="dashboard-header-stats">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper">
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Total Monthly Leads
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                      <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Purchased Leads
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                      <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Remaining Leads
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-map-marked"></i>
                                                            Latest Buy Leads	
                                                            <span>1998054</span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                           Your Product/ Services
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-comments-alt"></i>
                                                            Business Details
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-heart"></i>
                                                            Total Viewed Leads
                                                            <span>0</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!--  dashboard-header-stats  end -->
                                        <div class="dhs-controls">
                                            <div class="dhs dhs-prev"><i class="fal fa-angle-left"></i></div>
                                            <div class="dhs dhs-next"><i class="fal fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                    <!--  dashboard-header-stats-wrap end -->
                                    <a id="post_your_requirment" data-toggle="modal" data-target="#post-requirement" class="add-list color-bg">Post Your Requirement<span><i class="fal fa-layer-plus"></i></span></a>
                                </div>
                            </div>
                        </div>
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
                            <!--  dashboard-menu-->
                            <div class="col-md-3">
                                <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
                                <div class="clearfix"></div>
                                <div class="fixed-bar fl-wrap" id="dash_menu">
                                    <div class="user-profile-menu-wrap fl-wrap block_box">
                                        <!-- user-profile-menu-->
                                        <div class="user-profile-menu">
                                            <h3>Main</h3>
                                            <ul class="no-list-style">
                                                <li><a href="#" class="user-profile-act"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                                                <li><a href="#"><i class="fal fa-user-edit"></i> Edit profile</a></li>
                                                <li><a href="#"><i class="fal fa-envelope"></i> Messages <span>3</span></a></li>
                                                <li><a href="#"><i class="fal fa-key"></i>Change Password</a></li>
                                              
                                            </ul>
                                        </div>
                                        <!-- user-profile-menu end-->
                                        <!-- user-profile-menu-->
                                        <div class="user-profile-menu">
                                            <h3>Listings</h3>
                                            <ul  class="no-list-style">
                                                <li><a href="#"><i class="fal fa-th-list"></i> My listigs  </a></li>
                                              
                                                                                            
                                            </ul>
                                        </div>
                                        <!-- user-profile-menu end-->                                        
                                        <button class="logout_btn color2-bg">Log Out <i class="fas fa-sign-out"></i></button>
                                    </div>
                                </div>
                                <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Back to Menu<i class="fas fa-caret-up"></i></a>
                            </div>
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                         <div class="col-md-9">
                                <div class="dashboard-title fl-wrap">
                                    <h3>Your Analytics</h3>
                                    <marquee attribute_name = "attribute_value"....more attributes>
  <h6 style="color:#FF0000";>Dear Free Member, Kindly Visit the  link (<a href="https://trademydeal.com/plans">View Plans</a>) to register your company to Deal World Wide Buyers for your products. </h6>

</marquee>
                                </div>
                                <!-- list-single-facts -->                               
                                <div class="list-single-facts fl-wrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">
                                                    <i class="fal fa-chart-bar"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="1998054">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>Latest Buy Leads</h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 2 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">
                                                    <i class="fal fa-comments-alt"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="0">0%</div>
                                                        </div>
                                                    </div>
                                                    <h6>Products/Services</h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap gradient-bg ">
                                                <div class="inline-facts">
                                                    <i class="fal fa-envelope-open-dollar"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            <div class="num" data-content="0" data-num="0">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>Contact / Business Detail </h6>
                                                </div>
                                                <div class="stat-wave">
                                                    <svg viewbox="0 0 100 25">
                                                        <path fill="#fff" d="M0 30 V12 Q30 12 55 5 T100 11 V30z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->  
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-facts end -->                                          
                                <div class="list-single-main-item fl-wrap block_box">
                                    <!-- chart-wra-->           
                                    <div class="chart-wrap   fl-wrap">
                                        <div class="chart-header fl-wrap">
                                            <div class="listsearch-input-item">
                                                <select data-placeholder="Week" class="chosen-select no-search-select" >
                                                    <option>Week</option>
                                                    <option>Month</option>
                                                    <option>Year</option>
                                                </select>
                                            </div>
                                            <div id="myChartLegend"></div>
                                        </div>
                                        <canvas id="canvas-chart"></canvas>
                                    </div>
                                    <!--chart-wrap end-->                                         
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

    <script src="{{ asset('theme/js/charts.js') }}"></script>
    <script src="{{ asset('theme/js/dashboard.js') }}"></script>
@include('common.foot')   
