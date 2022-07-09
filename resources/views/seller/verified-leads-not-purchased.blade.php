@include('common.head')

           
            
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><span>Seller Purchased Leads</span></div>
                            <!--Tariff Plan menu-->
                            <div   class="tfp-btn"><span>Membership Name : </span> <strong>{{session('userdetail')[0]->userSubscriptionPlanName}}</strong></div>
                            <div class="tfp-det">
                                <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                <a href="#" class="tfp-det-btn color2-bg">Details</a>
                            </div>
                            <!--Tariff Plan menu end-->
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1>Hi, <span>{{session('userdetail')[0]->userCompanyName}}</span></h1>
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
                                                            Latest Buy Leads	
                                                            <span>1054</span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Product/ Services
                                                            <span>40</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-comments-alt"></i>
                                                            Business Details
                                                            <span>79</span>	
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
                                    <a href="/seller/createProduct" class="add_new-dashboard">Add Product <i class="fal fa-layer-plus"></i></a>
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
                            @include('common.seller.sidebar')
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9">
                                <div class="dashboard-title   fl-wrap">
                                    <h3>Verified Leads</h3>
                                </div>
                                <!-- dashboard-list-box--> 
                                <div class="dashboard-list-box  fl-wrap">
                                @foreach($getVerifiedNotPurchasedLeadsDetails as $lead)
                                    <!-- dashboard-list -->    
                                    <div class="dashboard-list fl-wrap">
                                        <div class="dashboard-message">
                                            <div class="booking-list-contr">
                                                <a href="#" class="color-bg tolt" data-microtip-position="left" data-tooltip="Purchase Leads"><i class="far fa-shopping-cart"></i></a>
                                            </div>
                                            <div class="dashboard-message-text">
                                                <img src="/theme/images/trade-logo.jpg" alt="">
                                                <h4><a href="listing-single.html">{{$lead->lead_title}}</a></h4>
                                                <div class="geodir-category-location clearfix"><a href="#">BY : {{$lead->contact_name}}, FROM :  {{$lead->stateName}}, {{$lead->countryName}}</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dashboard-list end-->   
                                    @endforeach                                     
                                </div>
                                <!-- dashboard-list-box end--> 
                                <div class="pagination">
                                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                    <a href="#">1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                    <a href="#">...</a>
                                    <a href="#">7</a>
                                    <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                </div>
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