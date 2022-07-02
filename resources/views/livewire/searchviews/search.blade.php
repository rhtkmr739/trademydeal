@include('common.head')

           
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
                                <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
                            </div>
                            <!-- list-main-wrap-header end-->   
                            <div class="fl-wrap">
                                <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                                <div class="mob-nav-content-btn mncb_half color2-bg schm ntm fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
                                <!-- listsearch-input-wrap-->
                                <div class="listsearch-input-wrap fl-wrap tabs-act lws_mobile inline-lsiw" id="lisfw">
                                    <div class="listsearch-input-wrap_contrl fl-wrap">
                                        <ul class="tabs-menu fl-wrap no-list-style">
                                            <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i> Filters </a></li>
                                            <li><a href="#category-search"> <i class="fal fa-image"></i>Categories </a></li>
                                        </ul>
                                    </div>
                                    <!--tabs -->                       
                                    <div class="tabs-container fl-wrap">
                                        <!--tab -->
                                        <div class="tab">
                                            <div id="filters-search" class="tab-content  first-tab ">
                                                <div class="fl-wrap">
                                                    <div class="row">
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-4">
                                                            <div class="listsearch-input-item">
                                                                <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                                                                <input type="text" placeholder="What are you looking for ?" value=""/>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-4">
                                                            <div class="listsearch-input-item">
                                                                <select data-placeholder="Location" class="chosen-select no-search-select" >
                                                                    <option>All Categories</option>
                                                                    <option>Shops</option>
                                                                    <option>Hotels</option>
                                                                    <option>Restaurants</option>
                                                                    <option>Fitness</option>
                                                                    <option>Events</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-4">
                                                            <div class="listsearch-input-item">
                                                                <select data-placeholder="City/Location" class="chosen-select no-search-select" >
                                                                    <option>All Cities</option>
                                                                    <option>New York</option>
                                                                    <option>Chicago</option>
                                                                    <option>Los Angeles</option>
                                                                    <option>Washington</option>
                                                                    <option>Boston</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end-->  
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-5">
                                                            <div class="listsearch-input-item location autocomplete-container">
                                                                <span class="iconn-dec"><i class="far fa-map-marker"></i></span>
                                                                <input type="text" placeholder="Where to look?" class="autocomplete-input" id="autocompleteid3" value=""/>
                                                                <a href="#"><i class="fal fa-location"></i></a>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end--> 
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-5">
                                                            <div class="listsearch-input-item">
                                                                <div class="price-rage-wrap fl-wrap">
                                                                    <div class="price-rage-wrap-title"><i class="fal fa-hand-holding-usd"></i> Price :</div>
                                                                    <div class="price-rage-item fl-wrap">
                                                                        <input type="text" class="price-range" data-min="0" data-max="4"  name="price-range1"  data-step="1" value="$$">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-end-->                                                    
                                                        <!-- listsearch-input-item-->
                                                        <div class="col-md-2">
                                                            <div class="listsearch-input-item">
                                                                <button class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>Search</span></button>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end-->                                         
                                                    </div>
                                                    <!-- hidden-listing-filter -->
                                                    <div class="hidden-listing-filter fl-wrap">
                                                        <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tasks"></i>More Filters</div>
                                                        <div class="fl-wrap mar-btoom">
                                                            <div class="row">
                                                                <!-- listsearch-input-item-->
                                                                <div class="col-md-4">
                                                                    <div class="listsearch-input-item">
                                                                        <button class="toggle-filter-btn tsb_act "><i class="fal fa-clock"></i> <span>Open Now</span></button>
                                                                    </div>
                                                                </div>
                                                                <!-- listsearch-input-end-->                                        
                                                                <!-- listsearch-input-item-->
                                                                <div class="col-md-4">
                                                                    <div class="listsearch-input-item clact date-container">
                                                                        <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                                                        <input type="text" placeholder="Event Date"     name="datepicker-here"   value=""/>
                                                                        <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                                                                    </div>
                                                                </div>
                                                                <!-- listsearch-input-end--> 
                                                            </div>
                                                        </div>
                                                        <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tags"></i>Facilities</div>
                                                        <!-- listsearch-input-item-->
                                                        <div class="listsearch-input-item">
                                                            <div class=" fl-wrap filter-tags">
                                                                <ul class="no-list-style">
                                                                    <li>
                                                                        <input id="check-aa" type="checkbox" name="check">
                                                                        <label for="check-aa">Elevator in building</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-b" type="checkbox" name="check">
                                                                        <label for="check-b">Friendly workspace</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-c" type="checkbox" name="check" checked>
                                                                        <label for="check-c">Instant Book</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d" type="checkbox" name="check">
                                                                        <label for="check-d">Wireless Internet</label>
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d2" type="checkbox" name="check" checked>
                                                                        <label for="check-d2">Free WiFi</label> 
                                                                    </li>
                                                                    <li>
                                                                        <input id="check-d3" type="checkbox" name="check" checked>
                                                                        <label for="check-d3">Free Parking</label> 
                                                                    </li>
                                                                    <li>   
                                                                        <input id="check-d4" type="checkbox" name="check">
                                                                        <label for="check-d4">Smoking Allowed</label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- listsearch-input-item end-->
                                                    </div>
                                                    <!-- hidden-listing-filter end -->                                 
                                                    <div class="more-filter-option-wrap">
                                                        <div class="more-filter-option-btn act-hiddenpanel color2-bg"><i class="far fa-plus"></i> <span>More Options</span></div>
                                                        <div class="clear-filter-btn color"><i class="far fa-redo"></i> Reset Filters</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab end-->
                                        <!--tab --> 
                                        <div class="tab">
                                            <div id="category-search" class="tab-content">
                                                <!-- category-carousel-wrap -->  
                                                <div class="category-carousel-wrap fl-wrap">
                                                    <div class="category-carousel fl-wrap full-height">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper">
                                                                <!-- category-carousel-item -->  
                                                                <div class="swiper-slide">
                                                                    <a class="category-carousel-item fl-wrap full-height checket-cat" href="#">
                                                                        <img src="{{ asset('theme/images/all/1.jpg') }}" alt="">
                                                                        <div class="category-carousel-item-icon red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                                        <div class="category-carousel-item-container">
                                                                            <div class="category-carousel-item-title">Restaurants / Cafe</div>
                                                                            <div class="category-carousel-item-counter">6 listings</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- category-carousel-item end -->  
                                                                <!-- category-carousel-item -->  
                                                                <div class="swiper-slide">
                                                                    <a class="category-carousel-item fl-wrap full-height" href="#">
                                                                        <img src="{{ asset('theme/images/all/1.jpg') }}" alt=""> 
                                                                        <div class="category-carousel-item-icon yellow-bg"><i class="fal fa-bed"></i></div>
                                                                        <div class="category-carousel-item-container">
                                                                            <div class="category-carousel-item-title">Hotel / Hostel</div>
                                                                            <div class="category-carousel-item-counter">14 listings</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- category-carousel-item end --> 
                                                                <!-- category-carousel-item -->  
                                                                <div class="swiper-slide">
                                                                    <a class="category-carousel-item fl-wrap full-height" href="#">
                                                                        <img src="{{ asset('theme/images/all/1.jpg') }}" alt=""> 
                                                                        <div class="category-carousel-item-icon purp-bg"><i class="fal fa-cocktail"></i></div>
                                                                        <div class="category-carousel-item-container">
                                                                            <div class="category-carousel-item-title">Events / Nightlife</div>
                                                                            <div class="category-carousel-item-counter">6 listings</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- category-carousel-item end --> 
                                                                <!-- category-carousel-item -->  
                                                                <div class="swiper-slide">
                                                                    <a class="category-carousel-item fl-wrap full-height" href="#">
                                                                        <img src="{{ asset('theme/images/all/1.jpg') }}" alt=""> 
                                                                        <div class="category-carousel-item-icon blue-bg"><i class="fal fa-dumbbell"></i></div>
                                                                        <div class="category-carousel-item-container">
                                                                            <div class="category-carousel-item-title">Fitness / Gym</div>
                                                                            <div class="category-carousel-item-counter">18 listings</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- category-carousel-item end -->
                                                                <!-- category-carousel-item -->  
                                                                <div class="swiper-slide">
                                                                    <a class="category-carousel-item fl-wrap full-height" href="#">
                                                                        <img src="{{ asset('theme/images/all/1.jpg') }}" alt=""> 
                                                                        <div class="category-carousel-item-icon green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                                                        <div class="category-carousel-item-container">
                                                                            <div class="category-carousel-item-title">Shopping</div>
                                                                            <div class="category-carousel-item-counter">19 listings</div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- category-carousel-item end -->  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- category-carousel-wrap end-->  
                                                </div>
                                                <div class="catcar-scrollbar fl-wrap">
                                                    <div class="hs_init"></div>
                                                    <div class="cc-contorl">
                                                        <div class="cc-contrl-item cc-prev"><i class="fal fa-angle-left"></i></div>
                                                        <div class="cc-contrl-item cc-next"><i class="fal fa-angle-right"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--tab end-->
                                    </div>
                                    <!--tabs end-->
                                </div>
                                <!-- listsearch-input-wrap end-->                                
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                                    <!-- listing-item  -->
                                   

                                        <h1>No Results Found!</h1>
                             
                                    <!-- listing-item end -->                                                                             
                                    <div class="pagination fwmpag">
                                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
                                        <a href="#">1</a>
                                        <a href="#" class="current-page">2</a>
                                        <a href="#">3</a>
                                        <a href="#">...</a>
                                        <a href="#">7</a>
                                        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
                                    </div>
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
<script src="{{ asset('theme/js/map-listing-suplier.js') }}"></script>