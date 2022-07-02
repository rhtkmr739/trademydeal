@include('common.head')
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/">Home</a><a href="/admin/dashboard">Admin Dashboard</a><span>Verified Leads</span></div>
                            <!--Tariff Plan menu-->
                            <div   class="tfp-btn"><span>Membership Name : </span> <strong>Business Booaster</strong></div>
                            <div class="tfp-det">
                                <p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>
                                <a href="#" class="tfp-det-btn color2-bg">Details</a>
                            </div>
                            <!--Tariff Plan menu end-->
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
                    <!--  section  -->
                    <div class="main-dashboard-sec" id="sec1">
                        <div class="box-widget-item-header">
                        <h3>VERIFIED LEADS</h3>
                            <!-- dashboard content-->
                            <table id="verified-lead-list" class="table table-striped table-bordered col-md-12">
                            <thead>
                                <tr>
                                    <th>Lead Title</th>
                                    <th>Contact Name</th>
                                    <th>Contact Email</th>
                                    <th>Contact Mobile</th>
                                    <th>Category</th>
                                    <th>Added By</th>
                                    <th>Created On</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($getVerifiedLeads as $lead)
                                <tr>
                                    <td>{{ $lead->lead_title }}</td>
                                    <td>{{ $lead->contact_name }}</td>
                                    <td>{{ $lead->contact_mobile }}</td>
                                    <td>{{ $lead->contact_email }}</td>
                                    <td>{{ $lead->category_name }}</td>
                                    <td>{{ $lead->addedBy }}</td>
                                    <td>{{ $lead->created_on }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Lead Title</th>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Contact Mobile</th>
                                <th>Category</th>
                                <th>Added By</th>
                                <th>Created On</th>
                            </tr>
                            </tfoot>
                        </table>
                            <!-- dashboard content end-->
                        </div>
                    </div>
                    <!--  section  end-->
                             
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
<!-- <script src="{{ asset('theme/js/admin-map-add.js') }}"></script> -->
<script src="{{ asset('theme/js/admin-lead.js') }}"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> -->