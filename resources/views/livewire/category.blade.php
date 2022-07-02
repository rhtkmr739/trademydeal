@include('common.head')

            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    
                    <!--section  -->
                    <section class="transparent-bg particles-wrapper" >
                        <div class="container big-container">
                            <div class="section-title">
                                <h2><span>Most Popular Categories</span></h2>
                                <div class="section-subtitle">Trending  Categories</div>
                                <span class="section-separator"></span>
                                <p>Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                            </div>
                            <div class="no-border breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="/">Home</a><span>All Categories</span> 
                            </div>
                            <div class="listing-item-grid_container fl-wrap">
                                <div class="row">
                                    @foreach($getCategories as $categories)
                                    <!--  listing-item-grid  -->
                                    <div class="col-sm-3">
                                        <div class="listing-item-grid">
                                            <div class="bg" data-bg="{{ asset('theme/images/subcategory/') }}/{{$categories->category_image}}" style="background-image: url('/theme/images/all/1.jpg');"></div>
                                            <div class="d-gr-sec"></div>
                                            <div class="listing-counter color2-bg"><span>{{ $categories->sub_category_count }}</span> variant</div>
                                            <div class="listing-item-grid_title">
                                                <h3><a href="/industry/{{ $categories->category_sku }}">{{ $categories->category_name }}</a></h3>
                                                <!-- <p>Constant care and attention to the patients makes good record</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  listing-item-grid end  -->
                                    @endforeach
                                </div>
                            </div>
                            <div class="grid-item-holder gallery-items fl-wrap">
                                                      
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