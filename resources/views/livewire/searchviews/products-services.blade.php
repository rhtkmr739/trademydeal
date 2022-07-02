@include('common.head')
<link rel="stylesheet" href="{{ asset('theme/css/card.css') }}">
           
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!-- <div class="breadcrumbs top-breadcrumbs fl-wrap">
                        <div class="container">
                            <a href="#">Home</a><a href="#">Listings</a><a href="#">New York</a><span>Listing Single</span> 
                        </div>
                    </div> -->
                    <!-- Map -->
                    <div class="map-container  fw-map big_map hid-mob-map">
                        <div id="map-main"></div>
                        <ul class="mapnavigation no-list-style">
                            <li><a href="#" class="prevmap-nav mapnavbtn"><span><i class="fas fa-caret-left"></i></span></a></li>
                            <li><a href="#" class="nextmap-nav mapnavbtn"><span><i class="fas fa-caret-right"></i></span></a></li>
                        </ul>
                        <div class="scrollContorl mapnavbtn tolt"   data-microtip-position="top-left" data-tooltip="Enable Scrolling"><span><i class="fal fa-unlock"></i></span></div>
                        <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location"><span><i class="fal fa-location"></i></span></div>
                        <div class="map-close"><i class="fas fa-times"></i></div>
                    </div>
                    <!-- Map end -->  
                    <div class="clearfix"></div>
                    <section class="gray-bg small-padding no-top-padding-sec">
                        <div class="container">
                            <!-- list-main-wrap-header-->
                            <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2>Results For : <span>{{$searchTerm}} </span></h2>
                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt-->
                                    <div class="price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                                                <option>Popularity</option>
                                                <option>Average rating</option>
                                                <option>Price: low to high</option>
                                                <option>Price: high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- price-opt end-->
                                    <!-- price-opt-->
                                    <div class="grid-opt">
                                        <ul class="no-list-style">
                                            <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                            <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                        </ul>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                                <!-- list-main-wrap-opt end-->                    
                            </div>
                            <!-- list-main-wrap-header end-->   
                            <div class="fl-wrap">
                                <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                                <div class="mob-nav-content-btn mncb_half color2-bg schm ntm fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
                                <!-- PRODUCT SEARCH  -->
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap three-columns-grid">
                                    <!-- listing-item  -->
                                    @foreach($getSearchProductsServices as $product)
                                    <div class="col-md-6 product-search-container animate__animated">
                                        <div class="card-container">
                                            <div class="card u-clearfix">
                                                <div class="col-md-5">
                                                <img src="{{ asset('theme/images/products/') }}/{{$product->product_image}}" alt="" class="card-media animate__animated" />
                                                </div>
                                                
                                                <div class="card-body col-md-7">
                                                    <h2 class="card-title">{{$product->product_name}}</h2>
                                                    <span class="card-author subtle">{{$product->user_company_name}}</span>
                                                    <div>
                                                        <span class="card-description subtle">{{$product->product_description}}</span>
                                                    </div> 
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="col-md-6 card-action-link">
                                                        <div class="card-read"> <a class="pull-left" href="/detail/{{$product->product_url}}">View Product <i class="fas fa-chevron-right"></i></a> </div>
                                                    </div>
                                                    <div class="col-md-6 card-action-link">
                                                        <div class="card-read"><a class="pull-right" href="/catalog/{{$product->user_catalog_url}}">visit catalog <i class="fas fa-chevron-right"></i></a> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-envelope"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Inquiry Now</button>
                                                    </div>
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-mobile"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Contact Info</button>
                                                    </div>
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-globe"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Visit Website</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="card-shadow"></div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- listing-item-container end -->
                                <!-- SELLER SEARCH -->
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                                    <!-- listing-item  -->
                                    @foreach($getSearchServices as $seller)
                                    <div class="col-md-6 search-service-container animate__animated">
                                        <div class="card-container">
                                            <div class="card u-clearfix">
                                                <img src="{{ asset('theme/images/seller/') }}/{{$seller->userProfileImage}}" alt="" class="card-media col-md-5 animate__animated" />
                                                <div class="card-body col-md-7">
                                                    <h2 class="card-title">{{$seller->userCompanyName}}</h2>
                                                    <span class="card-author subtle">{{$seller->userCompanyAddress}}</span>
                                                    <div>
                                                    <span class="card-description subtle">{{$seller->user_detail_desc}}</span>
                                                    </div>
                                                    
                                                    <div class="card-read"><a class="pull-right" href="/catalog/{{$seller->userCatalogUrl}}">visit catalog <i class="fas fa-chevron-right"></i></a> </div>
                                                    
                                                </div>
                                                <div class="col-md-12">
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-envelope"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Inquiry Now</button>
                                                    </div>
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-mobile"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Contact Info</button>
                                                    </div>
                                                    <div  class="col-md-4">
                                                    <i class="fas fa-globe"></i>
                                                    <button type="button" class="btn btn-link btn-sm no-border not-login-link capital-space">Visit Website</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="card-shadow"></div>
                                        </div>
                                    </div>
                                    @endforeach

                                    @if ((count($getSearchProductsServices) == 0) && (count($getSearchServices) == 0))
                                        <h1>No Results Found!</h1>
                                    @endif
                                    <!-- listing-item end -->                                                                             
                                    <!-- <div class="pagination fwmpag">
                                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                        <a href="#">1</a>
                                        <a href="#" class="current-page">2</a>
                                        <a href="#">3</a>
                                        <a href="#">...</a>
                                        <a href="#">7</a>
                                        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                    </div> -->
                                </div>
                                <!-- listing-item-container end --> 
                                
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->


@include('common.foot') 
<script>
    localStorage.setItem("map-listing-productservice-search", "<?php echo implode($allDataInArray,'~~')?>");
</script>  
<script src="{{ asset('theme/js/map-listing-productservice-search.js') }}"></script>