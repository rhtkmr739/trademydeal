<header class="main-header">
    <!-- logo-->
    <a href="/" class="logo-holder"><a href="/" class="logo-custom-text-holder">
        <span class="header-logo-text">
            <strong style="color:#4DB7FE;">Trade</strong>
            <strong style="color:#FFF;">My</strong> 
            <strong style="color:#4DB7FE;">Deal</strong>
        </span>
    </a>
    <!-- logo end-->
    <!-- header-search_btn-->         
    <!-- <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div> -->
    <!-- header-search_btn end-->
    <!-- header opt --> 
    
    <!-- header opt end-->                              
    <!-- nav-button-wrap--> 
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation --> 
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">
                @foreach($getHeaderMenus as $menus)
                <li>
                    <a href="/industry/{{ $menus->category_sku }}">{{ $menus->category_name }}</a>
                </li>
                @endforeach
                <li>
                    <a href="/categories">View All Categories <i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
    
    @if(Auth::user())

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div class="show-sign-out avatar-img" data-srcav="theme/images/avatar/3.jpg"><a onclick="event.preventDefault();  this.closest('form').submit();" href="{{ route('logout') }}"><i class="fal fa-sign-out"></i>SIGN OUT</a></div> 
    </form>

    <div class="main-menu nav-holder login-holder">
                    <nav>
                        <ul class="no-list-style">
                            @if(session('userRoles')[0]->isSeller == 'Y')

                                @if(session('currentUserRole') == 'seller')
                                    <!-- <li><a href="/userdashboard">USER DASHBOARD</a></li> -->
                                    <li><a href="/sellerdashboard">MY DASHBOARD (SELLER)</a></li>
                                @else
                                <li><a href="/sellerdashboard">SELLER DASHBOARD (SELLER)</a></li>
                                @endif

                            @elseif(session('userRoles')[0]->isEmployee == 'Y')
                                <li><a href="/employee/dashboard">MY DASHBOARD (EMPLOYEE)</a></li>
                            @else

                                @if( (session('userRoles')[0]->isAdmin == 'Y') && (session('currentUserRole') != 'admin'))
                                    <!-- <li><a href="/admin/dashboard">ADMIN DASHBOARD</a></li> -->
                                    <li><a href="/admin/dashboard">MY DASHBOARD (ADMIN)</a></li>
                                @elseif( (session('userRoles')[0]->isAdmin == 'Y') && (session('currentUserRole') == 'admin'))
                                <!-- <li><a href="/userdashboard">USER DASHBOARD</a></li> -->
                                <li><a href="/admin/dashboard">MY DASHBOARD (ADMIN)</a></li>
                                @else
                                <li><a class="no-icon-rotate" href="/seller/create"><i class="fal fa-user"></i> BECOME A SELLER</a></li>
                                @endif
                            
                            @endif
                            
                        </ul>
                    </nav>
                </div>
    @else
    <a id="post_your_requirment" data-toggle="modal" data-target="#post-requirement" class="add-list color-bg">Post Your Requirement<span><i class="fal fa-layer-plus"></i></span></a>
    
    <div class="show-reg-form modal-open avatar-img" data-srcav="theme/images/avatar/3.jpg"><i class="fal fa-user"></i>Sign In</div>
    @endif



    <!-- header-search_container -->                     
    <div class="header-search_container header-search vis-search">
        <div class="container small-container">
            <div class="header-search-input-wrap fl-wrap">
                <!-- header-search-input --> 
                <div class="header-search-input">
                    <label><i class="fal fa-keyboard"></i></label>
                    <input type="text" placeholder="What are you looking for ?"   value=""/>  
                </div>
                <!-- header-search-input end -->  
                <!-- header-search-input --> 
                <div class="header-search-input location autocomplete-container">
                    <label><i class="fal fa-map-marker"></i></label>
                    <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2" value=""/>
                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                </div>
                <!-- header-search-input end -->                                        
                <!-- header-search-input --> 
                <div class="header-search-input header-search_selectinpt ">
                    <select data-placeholder="Category" class="chosen-select no-radius" >
                        <option>All Categories</option>
                        <option>All Categories</option>
                        <option>Shops</option>
                        <option>Hotels</option>
                        <option>Restaurants</option>
                        <option>Fitness</option>
                        <option>Events</option>
                    </select>
                </div>
                <!-- header-search-input end --> 
                <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i> Search </button>
            </div>
            <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
        </div>
    </div>
    <!-- header-search_container  end --> 
    <!-- wishlist-wrap--> 
    <div class="header-modal novis_wishlist">
        <!-- header-modal-container--> 
        <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
            <!--widget-posts-->
            <div class="widget-posts  fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="theme/images/gallery/thumbnail/1.png" alt=""></a>  
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Restaurants </a>   <a href="listing.html">Cafe</a></div>
                            <div class="widget-posts-descr-score">4.1</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="theme/images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="theme/images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Events</a> </div>
                            <div class="widget-posts-descr-score">4.2</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img src="theme/images/gallery/thumbnail/1.png" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html" >Fitness</a> <a href="listing.html" >Gym</a> </div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- widget-posts end-->
        </div>
        <!-- header-modal-container end--> 
        <div class="header-modal-top fl-wrap">
            <h4>Your Wishlist : <span><strong></strong> Locations</span></h4>
            <div class="close-header-modal"><i class="far fa-times"></i></div>
        </div>
    </div>
    <!--wishlist-wrap end --> 
</header>