@include('common.head')
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/">Home</a><a href="/admin/dashboard">Admin Dashboard</a><span>Promotional Users</span></div>
                            
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1>Hi, <span>{{session('userdetail')[0]->userCompanyName}}</span></h1>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        
                        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
                        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
                        <div class="circle-wrap" style="left:120px;bottom:120px;" data-scrollax="properties: { translateY: '-200px' }">
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
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg main-dashboard-sec" id="sec1">
                        <div class="">
                            <!--  dashboard-menu-->
                            @include('common.admin.sidebar')
                            <!-- dashboard-menu  end-->
                            <!-- dashboard content-->
                            <div class="col-md-9 block_box">
                            <div class="dashboard-title dt-inbox fl-wrap">
                                    <h3>PROMOTIONAL USERS DETAIL</h3>
                                </div>
                                <!-- dashboard-list-box--> 
                                <div class="dashboard-list-box  fl-wrap">

                               

                                <!-- accordion-->
                                    <div class="accordion mar-top" id="sec5">
                                    @foreach($promotionalUserList as $user)
                                        @php
                                        $groupArray = explode(",", $user->promotional_group_name)
                                        @endphp
                                        <a class="toggle act-accordion" href="#"> {{ $user->promotional_user_email }}  ({{count($groupArray)}} group)  <span></span></a>
                                        <div class="accordion-inner">
                                        <div class="box-widget opening-hours fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="list-single-tags tags-stylwrap">
                                                <a href="#"><i class="fal fa-users"></i></a>
                                                @foreach($groupArray as $group)
                                                    <a href="#">{{ $group }}</a>
                                                    @endforeach 
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        @endforeach 
                                      
                                    </div>
                                <!-- accordion end -->
              
                                </div>
                                <!-- dashboard-list-box end--> 
                            </div>
                            <!-- dashboard content end-->
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->

@include('common.foot') 