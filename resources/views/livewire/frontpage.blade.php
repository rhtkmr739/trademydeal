@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--section  -->
                    <section class="hero-section"   data-scrollax-parent="true">
                    <div class="bg-tabs-wrap">
                            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                                <div class="video-container">
                                    <video autoplay  loop muted  class="bgvid">
                                        <source src="/theme/video/4.mp4" type="video/mp4">
                                    </video>
                                </div>
                                <!--  
                                    Vimeo code
                                    
                                     <div  class="background-vimeo" data-vim="97871257"> </div> --> 
                                <!--  
                                    Youtube code 
                                    
                                     <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                                <div class="bg mob_bg" data-bg="images/bg/1.jpg"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Explore Best B2B Services In The World</h1>
                                </div>
                                <h3>Find some of the best products or services from around the city from our sellers or buyers.</h3>
                            </div>
                            <!-- main-search-input-tabs-->
                            <div class="main-search-input-tabs  tabs-act fl-wrap">
                                <ul class="tabs-menu change_bg no-list-style">
                                    <li class="current"><a href="#tab-inpt1" data-bgtab="theme/images/bg/hero/1.jpg">Products / Services</a></li>
                                    <li><a href="#tab-inpt2" data-bgtab="theme/images/bg/hero/1.jpg"> Companies</a></li>
                                    <li><a href="#tab-inpt3" data-bgtab="theme/images/bg/hero/1.jpg"> Buy Leads</a></li>
                                </ul>
                                <!--tabs -->                       
                                <div class="tabs-container fl-wrap  ">
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt1" class="tab-content first-tab">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <form action="/search/productservice">
                                                        <div class="full-width-search-bar main-search-input-item">
                                                            <label><i class="fal fa-keyboard"></i></label>
                                                            <input type="text" required name="keyword" placeholder="What are you looking for?" value=""/>
                                                        </div>
                                                        <button type="submit" class="main-search-button color2-bg">Search <i class="far fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt2" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <form action="/search/company">
                                                        <div class="full-width-search-bar main-search-input-item">
                                                            <label><i class="fal fa-keyboard"></i></label>
                                                            <input type="text" required name="keyword" placeholder="Enter the compay name here" value=""/>
                                                        </div>
                                                        <button type="submit" class="main-search-button color2-bg">Search <i class="far fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->                                
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-inpt3" class="tab-content">
                                            <div class="main-search-input-wrap fl-wrap">
                                                <div class="main-search-input fl-wrap">
                                                    <form action="/search/verifiedlead">
                                                        <div class="full-width-search-bar main-search-input-item">
                                                            <label><i class="fal fa-keyboard"></i></label>
                                                            <input type="text" required name="keyword" placeholder="What are you looking for as lead?" value=""/>
                                                        </div>
                                                        <button type="submit" class="main-search-button color2-bg">Search <i class="far fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end-->                                    
                                </div>
                                <!--tabs end-->
                            </div>
                            <!-- main-search-input-tabs end-->
                            <div class="hero-categories fl-wrap">
                                <h4 class="hero-categories_title">Just looking around ? Use quick search by category :</h4>
                                <ul class="no-list-style">
                                    @foreach($getCategoryBelowFilter as $Category)
                                    <li><a href="/industry/{{$Category->category_sku}}"><i class="{{$Category->category_icon}}"></i><span>{{$Category->category_name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <!--section end-->
					<div class="sec-circle fl-wrap"></div>
                    
                    <!--section  -->
                    <section>
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Most Popular Categories</span></h2>
                                <div class="section-subtitle">Best Categories</div>
                                <span class="section-separator"></span>
                                <p> Best and trending categories.</p>
                            </div>
                            <div class="listing-filters gallery-filters fl-wrap">
                                <?php $getMostPolpularCategoriesNamesCounter = 0;?>
                                @foreach($getMostPolpularCategoriesNames as $Category)
                                <a href="/industry/{{$Category->category_sku}}" class="gallery-filter {{($getMostPolpularCategoriesNamesCounter == 0) ? 'gallery-filter-active' :''}}" data-filter=".{{$Category->category_sku}}">{{$Category->category_name}}</a>
                                <?php ++$getMostPolpularCategoriesNamesCounter;?>
                                @endforeach
                            </div>
                            <div class="grid-item-holder gallery-items fl-wrap">
                            @foreach($getMostPolpularCategoriesWithSubCategoryDetails as $SubCategory)
                                <!--  gallery-item-->
                                <div class="gallery-item {{$SubCategory->parent_category_sku}}">
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <a href="/market/{{$SubCategory->category_sku}}" class="geodir-category-img-wrap fl-wrap">
                                                <img class="most-popular-categories-images" src="theme/images/subcategory/{{$SubCategory->category_image}}" alt=""> 
                                                </a>
                                                
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="/industry/{{$SubCategory->category_sku}}">{{$SubCategory->category_name}}</a></h3>
                                                    </div>
                                                </div>
                                              <!--  <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text">{{$SubCategory->category_description}}</p>
                                                </div>-->
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->                              
                                </div>
                                <!-- gallery-item  end-->
                            @endforeach    
                                
                            </div>
                            <a href="/categories" class="btn  dec_btn  color2-bg">Check Out All Categories<i class="fal fa-arrow-alt-right"></i></a>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section end-->
                    <section class="parallax-section small-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="{{ asset('theme/images/bg/home/counter-banner.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay  op7"></div>
                        <div class="container">
                            <div class=" single-facts single-facts_2 fl-wrap">
                                <!-- inline-facts -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="1254">1254</div>
                                            </div>
                                        </div>
                                        <h6>New Visiters Every Week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="12168">12168</div>
                                            </div>
                                        </div>
                                        <h6>Happy customers every year</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="2172">2172</div>
                                            </div>
                                        </div>
                                        <h6>Won Amazing Awards</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="732">732</div>
                                            </div>
                                        </div>
                                        <h6>New Listing Every Week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                    </section>
                    <!--section end--> 
                    <!--section  -->
                   <br><br>
                    <!--section end-->
                    <!--section  -->
                   <!-- <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="theme/images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        
                        <div class="container">
                            <div class="video_section-title fl-wrap">
                                <h4>Aliquam erat volutpat interdum</h4>
                                <h2>Get ready to start your exciting journey. <br> Our agency will lead you through the amazing digital world</h2>
                            </div>
                            <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>
                        </div>
                    </section>-->
                    <!--section end-->
                    <!--section  -->
                    <section data-scrollax-parent="true" class="verified-leads-section particles-wrapper">
                        <div class="container">
                            <div class="section-title">
                                <h2>LATEST VERIFIED LEADS</h2>
                                <div class="section-subtitle">Discover &amp; Connect </div>
                                <span class="section-separator"></span>
                                <div>
                                    <ul id="progressbar" class="no-list-style lead-verification-step">
                                        <li class="lead-verification-step-1"><span class="tolt" data-microtip-position="top" data-tooltip="Post Your Requirement">01.</span></li>
                                        <li class="lead-verification-step-2"><span class="tolt" data-microtip-position="top" data-tooltip="We Verify Requirement">02.</span></li>
                                        <li class="lead-verification-step-3"><span class="tolt" data-microtip-position="top" data-tooltip="Successfully Verified">03.</span></li>
                                        <li class="lead-verification-step-4"><span class="tolt" data-microtip-position="top" data-tooltip="Ready For All">04.</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 table-responsive side-shadow">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">PRODUCT NAME</th>
                                            <th scope="col">CATEGORY NAME</th>
                                            <th scope="col">CONTACT NAME</th>
                                            <th scope="col">COUNTRY NAME</th>
                                            <th scope="col">VIEW DETAIL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($getVerifiedLeads as $lead)
                                            <tr>
                                            <td title="Product name" scope="row">{{ $lead->lead_title }}</td>
                                            <td title="Category name">{{ $lead->category_name }}</td>
                                            <td title="Contact name">{{ $lead->contact_name }}</td>
                                            <td title="Country name"><img src="{{ asset('theme/images/country_flags/') }}/{{ $lead->country_image }}" alt="{{ $lead->country_name }}"> {{ $lead->country_name }}</td>
                                            <td title="View Lead Details" class="not-login-link"><i class="fal fa-eye"></i></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="particles-js" class="particles-js"></div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section      data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2>How it works</h2>
                                <div class="section-subtitle">Discover &amp; Connect </div>
                                <span class="section-separator"></span>
                                <p>Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            </div>
                            <div class="process-wrap fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">01 </span>
                                            <div class="time-line-icon"><i class="fal fa-map-marker-alt"></i></div>
                                            <h4> Find Interested Buyers/Suppliers</h4>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">02</span>
                                            <div class="time-line-icon"><i class="fal fa-mail-bulk"></i></div>
                                            <h4> Instant Deal With Buyers/Suppliers</h4>
                                        </div>
                                        <span class="pr-dec"></span>
                                    </li>
                                    <li>
                                        <div class="process-item">
                                            <span class="process-count">03</span>
                                            <div class="time-line-icon"><i class="fal fa-layer-plus"></i></div>
                                            <h4> Instant Product Listing in catalog</h4>
                                        </div>
                                    </li>
                                </ul>
                                <div class="process-end"><i class="fal fa-check"></i></div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                    <!--section  -->
                    <section class="gradient-bg hidden-section" data-scrollax-parent="true">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="colomn-text  pad-top-column-text fl-wrap">
                                        <div class="colomn-text-title">
                                            <h3>Our App   Available Now</h3>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i>  Apple Store </a>
                                            <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i>  Google Play </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="collage-image">
                                        <img src="theme/images/api.png" class="main-collage-image" alt="">                               
                                        <div class="images-collage_icon green-bg" style="right:-20px; top:120px;"><i class="fal fa-thumbs-up"></i></div>
                                        <div class="collage-image-min cim_1"><img src="theme/images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-min cim_2"><img src="theme/images/api/1.jpg" alt=""></div>
                                        <div class="collage-image-btn green-bg">Booking now</div>
                                        <div class="collage-image-input">Search <i class="fa fa-search"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
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
                    <!--section end-->   
                    <!--section  -->
                    <section>
                        <div class="container">
                            <div class="section-title">
                                <h2> Testimonials</h2>
                                <div class="section-subtitle">Clients Reviews</div>
                                <span class="section-separator"></span>
                                <h3>"Our Client Says" </h4>
                                <h3>"Why We Do What We Do" </h4>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="testimonilas-carousel-wrap fl-wrap">
                            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
                            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
                            <div class="testimonilas-carousel">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="theme/images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"My business on trademydeal.com has proven an excellent decision of mine, we have increased our products supply, business presence and clientele in the market."</p>
                                                    <a href="#" class="testi-link" target="_blank"></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Andy Dimasky</h3>
                                                        <h4></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="theme/images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"I am regularly getting guaranteed buyers for trade from trademydeal.com, I am happy to be associated with this truly the best B2B company of the India."</p>
                                                    <a href="#" class="testi-link" target="_blank"></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Frank Dellov</h3>
                                                        <h4></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="theme/images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"I consider myself blessed to be taken this decision of choosing trademydeal.com."</p>
                                                    <a href="#" class="testi-link" target="_blank"></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Centa Simpson</h3>
                                                        <h4></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                        <!--testi-item-->
                                        <div class="swiper-slide">
                                            <div class="testi-item fl-wrap">
                                                <div class="testi-avatar"><img src="theme/images/avatar/1.jpg" alt=""></div>
                                                <div class="testimonilas-text fl-wrap">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <p>"trademydeal.com is a right choice for growing business, Right from the time, I registered my company on this B2B portal, I am witnessing continuous success for my business."</p>
                                                    <a href="#" class="testi-link" target="_blank"></a>
                                                    <div class="testimonilas-avatar fl-wrap">
                                                        <h3>Linda Svensky</h3>
                                                        <h4></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--testi-item end-->
                                    </div>
                                </div>
                            </div>
                            <div class="tc-pagination"></div>
                        </div>
                        <div class="waveWrapper waveAnimation">
                          <div class="waveWrapperInner bgMiddle">
                            <div class="wave-bg-anim waveMiddle" style="background-image: url('theme/images/wave-top.png')"></div>
                          </div>
                          <div class="waveWrapperInner bgBottom">
                            <div class="wave-bg-anim waveBottom" style="background-image: url('theme/images/wave-top.png')"></div>
                          </div>
                        </div> 						
                    </section>
                    <!--section end-->                
                    <!--section  -->
                    <section class="gray-bg">
                        <div class="container">
                            <div class="clients-carousel-wrap fl-wrap">
                                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                                <div class="clients-carousel">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->
                                            <!--client-item-->
                                            <div class="swiper-slide">
                                                <a href="#" class="client-item"><img src="theme/images/clients/1.png" alt=""></a>
                                            </div>
                                            <!--client-item end-->                                                                                                                                                                                                                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->

@include('common.foot')   
<script>
    $(document).ready(function(){
        $(".gallery-filter-active").trigger("click");
    });
</script>