@include('common.head')

           
            
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/employee/dashboard">Home</a><span>Employee Dashboard</span></div>
                           
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1>Hi, <span>{{session('userdetail')[0]->userName}}</span></h1>
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
                                                            <i class="fal fa-map-marked"></i>
                                                            Verified Leads	
                                                            <span>{{$getEmployeeDashboardData[0]->verifiedLeadsCounts}}</span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-map-marked"></i>
                                                            Unverified Leads	
                                                            <span>{{$getEmployeeDashboardData[0]->newLeadRequirementsCounts}}</span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Total Sellers Count
                                                            <span>{{$getEmployeeDashboardData[0]->sellerCounts}}</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-comments-alt"></i>
                                                            Total Products Count
                                                            <span>{{$getEmployeeDashboardData[0]->productCounts}}</span>	
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
                                    <div>
                                    <a href="/employee/create-new-lead" class="add_new-dashboard">Add Lead <i class="fal fa-layer-plus"></i></a>
                                &nbsp;
                                
                                    <!--  dashboard-header-stats-wrap end -->
                                    <a href="/employee/create-seller" class="add_new-dashboard">Add Seller <i class="fal fa-user"></i></a>
                                    </div>
                                   
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
                        <div class="">
                           <!--  dashboard-menu-->
                           @include('common.admin.employee.sidebar')
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9">
                                <div class="dashboard-title fl-wrap">
                                    <h3>Your Analytics</h3>
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
                                                            <div class="num" data-content="0" data-num="{{$getEmployeeDashboardData[0]->newLeadRequirementsCounts}}">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>New Leads Requirement</h6>
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
                                                            <div class="num" data-content="0" data-num="{{$getEmployeeDashboardData[0]->sellerCounts}}">0%</div>
                                                        </div>
                                                    </div>
                                                    <h6>Total Sellers Count</h6>
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
                                                            <div class="num" data-content="0" data-num="{{$getEmployeeDashboardData[0]->productCounts}}">0</div>
                                                        </div>
                                                    </div>
                                                    <h6>Total Products Count</h6>
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