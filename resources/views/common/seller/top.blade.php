<section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="#">Home</a><span>Seller</span></div>
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
                                                            Max Lead Limit	
                                                            <span id="max-lead-purchase-limit">{{session('sellerProfileCounts')[0]->maxLeadPurchaseLimit}}</span>
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-chart-bar"></i>
                                                            Current Lead Count
                                                            <span  id="current-lead-purchase-count">{{session('sellerProfileCounts')[0]->currentLeadPurchaseCount}}</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-comments-alt"></i>
                                                            Remaining Lead Limit
                                                            <span id="remaining-lead-purchase-count">{{session('sellerProfileCounts')[0]->remainingLeadPurchaseCount}}</span>	
                                                        </div>
                                                    </div>
                                                    <!--  dashboard-header-stats-item end -->
                                                    <!--  dashboard-header-stats-item -->
                                                    <div class="swiper-slide">
                                                        <div class="dashboard-header-stats-item">
                                                            <i class="fal fa-heart"></i>
                                                            Total Product Added
                                                            <span id="total-product-added-count">{{session('sellerProfileCounts')[0]->totalProductAddedCount}}</span>	
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
                                    <a href="/seller/createProduct" class="add_new-dashboard">ADD PRODUCT <i class="fal fa-layer-plus"></i></a>
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