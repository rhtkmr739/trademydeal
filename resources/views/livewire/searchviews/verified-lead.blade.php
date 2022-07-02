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
                                                              
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                                    <!-- listing-item  -->
                                    @foreach($getSearchVerifiedLeads as $verifiedLeads)
                                    <div class="col-md-6 verified-leads-container animate__animated">
                                        <div class="card-container">
                                            <div class="card u-clearfix">
                                                    <div  class="col-md-11">
                                                        <h2 class="card-title ">{{$verifiedLeads->title}}</h2>
                                                    </div>
                                                    <div  class="col-md-1">
                                                        <span class="verified-badge animate__animated"><i class="fal fa-check"></i></span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span class="card-author subtle col-md-6"><i class="fal fa-user"></i> {{$verifiedLeads->contact_name}}</span>
                                                        <span class="card-author subtle col-md-6"><img src="{{ asset('theme/images/country_flags/') }}/{{ $verifiedLeads->flag }}" alt="{{ $verifiedLeads->address }}"> {{$verifiedLeads->address}}</span>
                                                    </div>
                                                <div class="card-body col-md-12">
                                                    <div>
                                                        <span class="card-description subtle">{{$verifiedLeads->description}}...<a class="not-login-link" href="javascript:void(0);">Read More</a></span>
                                                    </div>
                                                    <div class="card-read not-login-link"><a class="pull-right" href="javascript:void(0);">view lead <i class="fas fa-chevron-right"></i></a> </div>
                                                </div>
                                                
                                            </div>
                                            <div class="card-shadow"></div>
                                        </div>
                                    </div>
                                    @endforeach

                                    @if (count($getSearchVerifiedLeads) == 0)
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
