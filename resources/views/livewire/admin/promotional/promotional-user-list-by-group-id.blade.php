@foreach($getPromotionalUserByGroupId as $user)
                                      
<!-- list-single-header -->
<div class="list-single-header list-single-header-inside block_box fl-wrap">
    <div class="list-single-header-item  fl-wrap">
        <div class="row">
            <div class="col-md-8">
                <h1>{{$user->promotional_user_email}} <span class="verified-badge"><i class="fal fa-check"></i></span></h1>
            </div>
           
        </div>
    </div>
   
</div>
<!-- list-single-header end -->

@endforeach   