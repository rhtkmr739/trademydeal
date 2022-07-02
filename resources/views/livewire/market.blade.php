@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    
                    <!--section  -->
                    <section class="transparent-bg particles-wrapper" >
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>{{ $getParentCategory[0]->category_name }} Market</span></h2>
                                <div class="section-subtitle">Trending  Categories</div>
                                <span class="section-separator"></span>
                                <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                            </div>
                            
                            <div class="no-border breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="/">Home</a><a href="/categories">All Categories</a><a href="/industry/{{ $getParentCategory[0]->parent_category_sku }}">{{ $getParentCategory[0]->parent_category_name }}</a><span>{{ $getParentCategory[0]->category_name }}</span> 
                            </div>

                            <div class="listing-item-grid_container fl-wrap">
                                <div class="row">
                                    @foreach($getMarkets as $Market)
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-3">
                                        <div class="listing-item-grid">
                                            <div class="bg" data-bg="{{ asset('theme/images/subcategory/') }}/{{$Market->category_image}}" style="background-image: url({{ asset('theme/images/subcategory/') }}/{{$Market->category_image}});"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>{{ $Market->product_count }}</span> products</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="/suppliers/{{ $Market->category_sku }}">{{ $Market->category_name }}</a></h3>
                                                <!-- <p>Constant care and attention to the patients makes good record</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->
                                    @endforeach
                                </div>
                            </div>
                            <a href="listing.html" class="btn  dec_btn  color2-bg">Check Out All Categories<i class="fal fa-arrow-alt-right"></i></a>
                        </div>
                        <div id="particles-js" class="particles-js"></div>
                    </section>
                    <!--section end-->
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->

@include('common.foot')   