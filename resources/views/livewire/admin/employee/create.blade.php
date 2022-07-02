@include('common.head')
<link rel ="stylesheet" href ="{{ asset('theme/css/twitter-bootstrap.min.css') }}">  
<link type="text/css" rel="stylesheet" href="{{ asset('theme/css/bootstrap-datetimepicker.min.css') }}">
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section dashboard-header-sec gradient-bg" data-scrollax-parent="true">
                        <div class="container">
                            <div class="dashboard-breadcrumbs breadcrumbs"><a href="/">Home</a><a href="/admindashboard">Admin Dashboard</a><span>Create Employee</span></div>
                            
                            <div class="dashboard-header_conatiner fl-wrap dashboard-header_title">
                                <h1><span>Hi, {{Auth::user()->name}} </span></h1>
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
                        <div class="container">
                            <!-- dashboard content-->
                            <form action="/admin/save-employee" method="post" enctype="multipart/form-data">
                            @csrf

                                <div class="col-md-12">
                                    <div class="dashboard-title   fl-wrap">
                                        <h3>ADD EMPLOYEE DETAILS</h3>
                                    </div>
                                    <!-- accordion-->
                                    <div class="accordion mar-top" id="sec3">
                                        <a class="toggle act-accordion" href="#"> Employee Personnel Details<span></span></a>
                                        <div class="accordion-inner visible">
                                            <!-- profile-edit-container--> 
                                            <div class="profile-edit-container fl-wrap block_box">
                                                <div class="custom-form">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Employee Name<i class="fal fa-user"></i></label>
                                                            <input type="text" name="employee_name" id="employee_name" required  placeholder="Enter the name of employee" value=""/>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Gender</label>
                                                            <select style="width: 100%" id="gender" required name="gender">
                                                                <option disable value="" >Please select gender</option>   
                                                                <option  value="Male" >Male</option>   
                                                                <option  value="Female" >Female</option>   
                                                            </select> 
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>Employee D.O.B<i class="fal fa-user"></i></label>
                                                            <div class ="form-group">  
                                                                <div class ='input-group date' id='dob'>  
                                                                <input type ='text' class="form-control" name="dob" />  
                                                                <span class ="input-group-addon">  
                                                                    <span class ="glyphicon glyphicon-calendar"></span>  
                                                                </span>  
                                                                </div>  
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- profile-edit-container end-->   
                                        </div>
                                        <a class="toggle" href="#"> Employee Contact Details  <span></span></a>
                                        <div class="accordion-inner">
                                         <!-- profile-edit-container--> 
                                            <div class="profile-edit-container fl-wrap block_box">
                                                <div class="custom-form">
                                                
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label>Contact Number<i class="fal fa-mobile"></i></label>
                                                            <input type="text" name="mobile" id="mobile" required placeholder="Enter contact number" value=""/>                                                
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Alternate Contact Number<i class="fal fa-mobile"></i></label>
                                                            <input type="text" name="mobile2" id="mobile2" required placeholder="Enter alternate number" value=""/>                                                
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Personal Email<i class="fal fa-envelope"></i></label>
                                                            <input type="text" name="email" id="email" required placeholder="Enter personal email address" value=""/>                                                
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Office Email<i class="fal fa-envelope"></i></label>
                                                            <input type="text" name="email2" id="email2" required placeholder="Enter office email address" value=""/>                                                
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label>Address<i class="far fa-map-marker"></i>  </label>
                                                            <input type="text" name="address"  id="address" required placeholder="Enter address" value=""/> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>City<i class="far fa-map-marker"></i>  </label>
                                                            <input type="text" name="city"  id="city" required placeholder="Enter city" value=""/> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>State<i class="far fa-map-marker"></i>  </label>
                                                            <input type="text" name="state" id="state" required placeholder="Enter state" value=""/> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>Pincode<i class="far fa-map-marker"></i>  </label>
                                                            <input type="text" name="pincode"  id="pincode" required placeholder="Enter pincode" value=""/> 
                                                        </div>
                                                        <div class="col-md-3">
                                                            <label>County</label>
                                                            <select style="width: 100%" id="countryid" required name="countryid">
                                                                <option disable value="" >Please select country</option> 
                                                                @foreach($countryList as $country)
                                                                <option  value="{{$country->id}}" >{{$country->country_name}}</option>  
                                                                @endforeach  
                                                            </select> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- profile-edit-container end-->      
                                        </div>
                                        <a class="toggle" href="#"> Employee Documents  <span></span></a>
                                        <div class="accordion-inner">
                                            <!-- profile-edit-container--> 
                                            <div class="profile-edit-container fl-wrap block_box">
                                                <div class="custom-form">
                                                
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>Aadhaar Card Number<i class="fal fa-id-card"></i></label>
                                                            <input type="text" name="aadhaar" minlength="12" maxlength="12" id="aadhaar" required placeholder="Enter Aadhaar number" value=""/>                                                
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>PAN Card Number<i class="fal fa-id-card"></i></label>
                                                            <input type="text" name="pan" minlength="10" maxlength="10" id="pan" required placeholder="Enter PAN number" value=""/>                                                
                                                        </div>
                                                         <div class="col-md-4">
                                                            <label>Account Login Password<i class="fal fa-key"></i></label>
                                                            <input type="password" name="password" id="password" required placeholder="Enter account password" value=""/>                                                
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        <button type="submit" class="add-employee-btn btn color2-bg float-btn pull-right">ADD EMPLOYEE<i class="fal fa-paper-plane"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- profile-edit-container end-->  
                                        </div>
                                    </div>
                                    <!-- accordion end -->

                            </div>
                            </form>
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

<script src="{{ asset('theme/js/moment.min.js') }}"></script>
<script src ="{{ asset('theme/js/twitter-bootstrap.min.js') }}"></script>  
<script src="{{ asset('theme/js/bootstrap-datetimepicker.min.js') }}"></script>
<script>  
$(document).ready(function() {
   $('#dob').datetimepicker({
                 format: 'DD-MM-YYYY'
             });  
    $('#gender,#countryid').select2();
}); 


</script>  