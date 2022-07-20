@foreach($getsearchLoadMoreSellerPurchasedLead as $lead)
                                      
<!-- list-single-header -->
<div class="list-single-header list-single-header-inside block_box fl-wrap">
        <div class="list-single-header-item  fl-wrap">
            <div class="row">
                <div class="col-md-8">
                    <h1>{{$lead->lead_title}} <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  {{$lead->stateName}}, {{$lead->countryName}}</a></div>
                </div>
                <div class="col-md-4">
                <a href="javascript:void(0)" class="btn color2-bg float-btn view-lead-btn"  id="lead-{{$lead->lead_id}}" data-microtip-position="left" data-tooltip="View Detail">View Detail<i class="far fa-eye"></i></a>
                </div>
            </div>
        </div>
        <div class="list-single-header_bottom fl-wrap">
            <a class="listing-item-category-wrap" href="javascript:void(0)">
                <div class="listing-item-category  blue-bg"><i class="{{$lead->category_icon}}"></i></div>
                <span>{{$lead->category_name}}</span>
            </a>
            <div class="list-single-author"> <a href="javascript:void(0)"><span class="author_avatar"> <img alt='' src='/theme/images/trade-logo.jpg'>  </span>By  {{$lead->contact_name}}</a></div>
            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Purchased</div>
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