@include('common.head')


            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="theme/images/bg/1.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Our Memebership Plans</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="/">Home</a><span>Pricing</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">
                            <div class="section-title">
                                <h2> Pricing Tables</h2>

                                <div class="section-subtitle">cost of our services</div>
                                <span class="section-separator"></span>
                                <p>Explore the best plan suitable for your requirement of buyers and other services.</p>
                            </div>
                            <div class="pricing-switcher">
                                <div class="fieldset color-bg">
                                    <input type="radio" name="duration-1"  id="monthly-1" class="tariff-toggle"  >
                                                                        <label for="yearly-1">NORMAL PLANS</label>

                                    <input type="radio" name="duration-1" class="tariff-toggle"  id="yearly-1" checked>
                                                                        <label for="monthly-1">FESTIVALS OFFER PLANS</label>

                                    <span class="switch"></span>
                                </div>
                            </div>
                            <div class="pricing-wrap fl-wrap">
                                <?php 
                                    for($i = 0; $i < count($getUniqueSubscriptionPlanName); $i++ ){
                                ?>
                                
                                <!-- price-item-->
                                <div class="price-item {{ ($i == 1) ? 'best-price':''}}">
                                    <div class="price-head  {{ ($i == 1) ? 'gradient-bg':(($i == 2) ? 'green-gradient-bg':'purp-gradient-bg')}}">
                                        <h3>{{$getUniqueSubscriptionPlanName[$i]->subscription_plan_name}}</h3>
                                        <div class="price-num col-dec-1 fl-wrap">
                                            <div class="price-num-item"><span class="mouth-cont"><span class="curen"></span>{{$planArray[$i][$getUniqueSubscriptionPlanName[$i]->subscription_plan_name]->subscription_plan_buyer_price}}</span><span class="year-cont"><span class="curen"></span>{{$planArray[$i][$getUniqueSubscriptionPlanName[$i]->subscription_plan_name]->subscription_plan_seller_price}}</span></div>
                                            <div class="clearfix"></div>
                                            <div class="price-num-desc"><span class="mouth-cont">Per  {{$planArray[$i][$getUniqueSubscriptionPlanName[$i]->subscription_plan_name]->subscription_plan_buyer_cycle}}</span><span class="year-cont">Per {{$planArray[$i][$getUniqueSubscriptionPlanName[$i]->subscription_plan_name]->subscription_plan_seller_cycle}}</span></div>
                                        </div>
                                        <div class="circle-wrap" style="right:20%;top:50px;"  >
                                            <div class="circle_bg-bal circle_bg-bal_versmall" data-scrollax="properties: { translateY: '50px' }"></div>
                                        </div>
                                        <div class="circle-wrap" style="right:75%;top:90px;"  >
                                            <div class="circle_bg-bal circle_bg-bal_versmall"></div>
                                        </div>
                                        <div class="footer-wave">
                                            <svg viewbox="0 0 100 25">
                                                <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                                            </svg>
                                        </div>
                                        <div class="footer-wave footer-wave2">
                                            <svg viewbox="0 0 100 25">
                                                <path fill="#fff" d="M0 90 V12 Q30 7 45 12 T100 11 V30z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="price-content fl-wrap">
                                        <div class="price-desc fl-wrap">
                                            <ul class="no-list-style mouth-cont">
                                                @foreach($planArray[$i][0] as $feature)
                                                <li><i class="fal {{($feature->subscriptionPlanFeaturesAllow == 'Y') ? 'fa-check allow-feature':'fa-times not-allow-feature' }}"></i> {{$feature->subscriptionPlanFeaturesText}}</li>
                                                @endforeach
                                            </ul>
                                            <ul class="no-list-style year-cont">
                                                @foreach($planArray[$i][1] as $feature)
                                                <li><i class="fal {{($feature->subscriptionPlanFeaturesAllow == 'Y') ? 'fa-check allow-feature':'fa-times not-allow-feature' }}"></i> {{$feature->subscriptionPlanFeaturesText}}</li>
                                                @endforeach
                                            </ul>
                                            <a href="https://payu.in/web/E0CAF9A22FF1F6B9D05C27CDF66CEF2A" class="price-link {{ ($i == 1) ? 'rec-link color-bg':(($i == 2) ? 'green-bg':'purp-bg')}}">Buy Now</a>  
                                            <div class="recomm-price {{($i == 1) ? 'show' : 'hide'}}">
                                                <i class="fal fa-check"></i> 
                                                Recommended
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- price-item end-->
                               
                                <?php 
                                    }
                                ?>                                            
                            </div>
                            <span class="section-separator"></span>
                            <!-- features-box-container --> 
                            <div class="features-box-container fl-wrap">
                                <div class="row">
                                    <!--features-box --> 
                                    <div class="col-md-4">
                                        <div class="features-box">
                                            <div class="time-line-icon">
                                                <i class="fal fa-headset"></i>
                                            </div>
                                            <h3>24 Hours Support</h3>
<!--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.    </p>
-->                                        </div>
                                    </div>
                                    <!-- features-box end  --> 
                                    <!--features-box --> 
                                    <div class="col-md-4">
                                        <div class="features-box">
                                            <div class="time-line-icon">
                                                <i class="fal fa-users-cog"></i>
                                            </div>
                                            <h3>Admin Panel</h3>
<!--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.   </p>
-->                                        </div>
                                    </div>
                                    <!-- features-box end  --> 
                                    <!--features-box --> 
                                    <div class="col-md-4">
                                        <div class="features-box ">
                                            <div class="time-line-icon">
                                                <i class="fal fa-mobile"></i>
                                            </div>
                                            <h3>Mobile Friendly Website</h3>
<!--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
-->                                        </div>
                                    </div>
                                    <!-- features-box end  -->  
                                </div>
                            </div>
                            <!-- features-box-container end  --> 
                        </div>
                    </section>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->

@include('common.foot')   