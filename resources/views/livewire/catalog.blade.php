@include('common.head')

<link rel="stylesheet" href="{{ asset('theme/css/card.css') }}">
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <section class="gray-bg no-top-padding-sec" id="sec1">
                        <div class="container">
                            <div class="theme-text-style breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="/">Home</a><a href="">Seller</a> <span>Catalog</span> 
                            </div>
                            <div class="fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <!-- list-single-main-item --> 
                                        <div class="user-profile-header fl-wrap">
                                            <div class="user-profile-header_media fl-wrap">
                                                <div class="bg"  data-bg="/theme/images/bg/1.jpg"></div>
                                                <div class="user-profile-header_media_title">
                                                    <h3>{{$getSellerCatalogByUrl[0]->userName}}</h3>
                                                    <h4>{{$getSellerCatalogByUrl[0]->userCompanyName}}</h4>
                                                </div>
                                                <div class="user-profile-header_stats">
                                                    <ul class="no-list-style">
                                                        <li><span>{{$getSellerCatalogByUrl[0]->productsCount}}</span>Products</li>
                                                        <li><span>20</span>Followers</li>
                                                        <li><span>4</span>Following</li>
                                                    </ul>
                                                </div>
                                                <div class="follow-btn color2-bg">Follow <i class="fal fa-user-plus"></i></div>
                                            </div>
                                            <div class="user-profile-header_content fl-wrap">
                                                <div class="user-profile-header-avatar">
                                                    <img src="/theme/images/avatar/1.jpg" alt="">
                                                </div>
                                               
                                                <div class="col-md-12">
                                                    <div class="col-md-6 card-action-link">
                                                        <div class="card-read not-login-link"> <a class="pull-left flip-link animate__animated" href="javascript:void(0);">visit website <i class="fas fa-chevron-right"></i></a> </div>
                                                    </div>
                                                    <div class="col-md-6 card-action-link">
                                                        <div class="card-read post-requirement-show"><a class="pull-right flip-link animate__animated " href="javascript:void(0);">Inquiry Now<i class="fas fa-chevron-right"></i></a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->     
                                        
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap block_box">
                                            <div class="list-single-main-item-title">
                                                <h3 class="card-title"><i class="fas fa-user"></i> About Seller</h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                            <div class="list-single-tags tags-stylwrap">
                                                   <span class="catalog-text">{{$getSellerCatalogByUrl[0]->user_detail_desc}}</span>                                                                         
                                                </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end --> 
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap block_box">
                                            <div class="list-single-main-item-title">
                                                <h3 class="card-title"><i class="fas fa-tag"></i> Related Tags</h3>
                                            </div>
                                            <div class="list-single-main-item_content fl-wrap">
                                            <div class="list-single-tags tags-stylwrap">
                                                    @foreach($getSellerTagsList as $tags)
                                                        <a class="catalog-text" href="javascript:void(0);">{{$tags->tagNames}}</a>
                                                    @endforeach 
                                                    @if (count($getSellerTagsList) == 0)
                                                        <a class="catalog-text"  href="javascript:void(0);">N/A</a>
                                                    @endif                                                                            
                                                </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->  
                                        <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap block_box">
                                            <div class="list-single-main-item-title">
                                                <h3 class="card-title"><i class="fas fa-list-alt"></i> Deals in Category</h3>
                                            </div>

                                            <div class="list-single-main-item_content fl-wrap">
                                                <div class="list-single-tags tags-stylwrap">
                                                @foreach($getSellerCategoryList as $category)
                                                    <div class="col-md-4 catalog-category-container">
                                                        <div class="card-container">
                                                            <div class="card u-clearfix">
                                                                <img src="{{ asset('theme/images/subcategory/') }}/{{$category->categoryImage}}" alt="" class="card-media animate__animated col-md-5" />
                                                                <div class="col-md-12 text-center">
                                                                    <span class="card-author">{{$category->categoryName}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="card-shadow"></div>
                                                        </div>
                                                    </div>  
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end --> 
                                        <!-- listing-item-container -->
                                        <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                                            @foreach($getProductsBySellerId as $product)
                                            <div class="col-md-12 product-search-container animate__animated">
                                                <div class="card-container">
                                                    <div class="card u-clearfix">
                                                        <div class="col-md-5">
                                                            <a href="/detail/{{$product->product_url}}">
                                                                <img src="{{ asset('theme/images/products/') }}/{{$product->product_image}}" alt="" class="card-media animate__animated" />
                                                            </a>   
                                                        </div>
                                                        
                                                        <div class="card-body col-md-7">
                                                            <h2 class="card-title"><a href="/detail/{{$product->product_url}}">{{$product->product_name}}</a></h2>
                                                            <span class="card-author subtle">{{$product->user_company_name}}</span>
                                                            <div>
                                                                <span class="card-description subtle">{{$product->product_description}}</span>
                                                            </div> 
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="col-md-12 card-action-link">
                                                                <div class="card-read"> <a class="pull-right" href="/detail/{{$product->product_url}}">View Product <i class="fas fa-chevron-right"></i></a> </div>
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
                                    </div>
                                    <div class="col-md-4">                                 
                                        <!--box-widget-item -->                                       
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget-item-header">
                                                <h3 class="card-title">Seller Details</h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="map-container">
                                                    <div id="singleMap" data-latitude="{{$getSellerCatalogByUrl[0]->userCompanyLat}}" data-longitude="{{$getSellerCatalogByUrl[0]->userCompanyLong}}" data-mapTitle="Available"></div>
                                                </div>
                                                <div class="box-widget-content bwc-nopad">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                        <ul class="no-list-style">
                                                            <li class="catalog-text not-login-link"><span><i class="fal fa-map-marker"></i> Address :</span> <a href="javascript:void(0);">{{$getSellerCatalogByUrl[0]->userCompanyAddress}} <img src="{{ asset('theme/images/country_flags/') }}/{{ $getSellerCatalogByUrl[0]->country_image }}" alt="{{$getSellerCatalogByUrl[0]->userCompanyAddress}}"></a></li>
                                                            <li class="catalog-text not-login-link"><span><i class="fal fa-phone"></i> Phone :</span> <a href="javascript:void(0);">{{$getSellerCatalogByUrl[0]->userCompanyMobile}}</a></li>
                                                            <li class="catalog-text not-login-link"><span><i class="fal fa-envelope"></i> E-Mail ID:</span> <a href="javascript:void(0);">{{$getSellerCatalogByUrl[0]->userCompanyEmail}}</a></li>
                                                            <li class="catalog-text not-login-link"><span><i class="fal fa-browser"></i> Website :</span> <a href="javascript:void(0);">{{$getSellerCatalogByUrl[0]->userCompanyWebsite}}</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                                        <div class="bottom-bcw-box_link"><a href="#" class="show-single-contactform tolt" data-microtip-position="top" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                     
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget-item-header">
                                                <h3>Get in Touch </h3>
                                            </div>
                                            <div class="box-widget">
                                                <div class="box-widget-content">
                                                    <form   class="add-comment custom-form">
                                                        <fieldset>
                                                            <label><i class="fal fa-user"></i></label>
                                                            <input type="text" placeholder="Your Name *" value=""/>
                                                            <div class="clearfix"></div>
                                                            <label><i class="fal fa-envelope"></i>  </label>
                                                            <input type="text" placeholder="Email Address*" value=""/>
                                                            <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>
                                                        </fieldset>
                                                        <button class="btn float-btn color2-bg">Send Message<i class="fal fa-paper-plane"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
@include('common.foot')   
<script src="{{ asset('theme/js/map-single.js') }}"></script>