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
                            <div class="col-md-9">
                            <div class="box-widget-item fl-wrap">
                                <div class="search-widget">
                                   
                                        <input name="se" id="search-verified-lead-text" type="text" class="search" placeholder="SEARCH VERIFIED LEADS.." value="" />
                                        <button class="search-submit color2-bg" id="search-verified-lead-btn"><i class="fal fa-search"></i> </button>
                                    
                                </div>
                            </div>
                                
                                <!-- dashboard-list-box--> 
                                <div class="dashboard-list-box  fl-wrap" id="seller-verified-lead-list">
                                @foreach($getVerifiedNotPurchasedLeadsDetails as $lead)
                                      
                                    <!-- list-single-header -->
                                    <div class="list-single-header list-single-header-inside block_box fl-wrap">
                                        <div class="list-single-header-item  fl-wrap">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h1>{{$lead->lead_title}} <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{$lead->stateName}}, {{$lead->countryName}}</a></div>
                                                </div>
                                                <div class="col-md-4">
                                                <a href="javascript:void(0)" class="btn color2-bg float-btn purchase-lead-btn"  id="lead-{{$lead->lead_id}}" data-microtip-position="left" data-tooltip="Purchase Leads">Purchase Leads<i class="far fa-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-single-header_bottom fl-wrap">
                                            <a class="listing-item-category-wrap" href="javascript:void(0)">
                                                <div class="listing-item-category  blue-bg"><i class="{{$lead->category_icon}}"></i></div>
                                                <span>{{$lead->category_name}}</span>
                                            </a>
                                            <div class="list-single-author"> <a href="javascript:void(0)"><span class="author_avatar"> <img alt='' src='/theme/images/trade-logo.jpg'>  </span>By  {{$lead->contact_name}}</a></div>
                                            <div class="geodir_status_date gsd_open">Available Now</div>
                                            <div class="list-single-stats">
                                                <ul class="no-list-style">
                                                    <li><span class="viewed-counter"><i class="fas fa-eye"></i> Viewed -  156 </span></li>
                                                    <li><span class="bookmark-counter"><i class="fas fa-heart"></i> Favorite -  24 </span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- list-single-header end -->

                                    @endforeach                                     
                                </div>
                                <!-- dashboard-list-box end--> 
                                <div class="load-more-section">
                                <a href="javascript:void(0)" class="btn dec_btn color2-bg" data-limit="{{$limit}}" data-page="{{$page}}" id="load-more-verified-lead-btn">Load More Leads<i class="fal fa-arrow-down"></i></a>
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


@include('common.foot')
<script src="{{ asset('theme/js/charts.js') }}"></script>
<script src="{{ asset('theme/js/dashboard.js') }}"></script>
<script src="{{ asset('theme/js/seller.js') }}"></script>
