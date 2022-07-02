@include('common.footer')   
<!--  -->

<!-- Modal -->
<div class="modal fade" id="post-requirement" tabindex="-1" role="dialog" aria-labelledby="post-requirement" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">POST YOUR REQUIREMENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="container-fluid">
            <!-- dashboard content-->
            <form action="/query/post-requirement" method="post">
            @csrf

                <div class="col-md-12">
                    <!-- profile-edit-container--> 
                    <div class="profile-edit-container fl-wrap block_box">
                        <div class="custom-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Name<i class="fal fa-user"></i></label>
                                    <input type="text" name="postcompanyname" id="postcompanyname" required  placeholder="Name of your company" value=""/>
                                </div>
                                <div class="col-md-6">
                                    <label>Contact Person Name<i class="far fa-globe"></i></label>
                                    <input type="text" name="postcontactname" required placeholder="Name of contact person" value=""/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Contact Number<i class="fal fa-map-marker"></i></label>
                                    <input type="text" name="postmobile" required placeholder="Enter contact number of your company" value=""/>                                                
                                </div>
                                <div class="col-sm-6">
                                    <label>Email<i class="fal fa-envelope"></i></label>
                                    <input type="text" name="postemail" required placeholder="Enter email address of your company" value=""/>                                                
                                </div>
                                <div class="col-sm-6">
                                    <label>Address<i class="fal fa-map-marker"></i></label>
                                    <input type="text" name="postaddress" required placeholder="Enter address of your company" value=""/>                                                
                                </div>
                                <div class="col-sm-6">
                                    <label>City<i class="far fa-map-marker"></i>  </label>
                                    <input type="text" name="postcity" required placeholder="Enter city of your company" value=""/> 
                                </div>
                                <div class="col-sm-6">
                                    <label>State<i class="far fa-map-marker"></i>  </label>
                                    <input type="text" name="poststate" required placeholder="Enter state of your company" value=""/> 
                                </div>
                                <div class="col-sm-6">
                                    <label>Pincode<i class="far fa-map-marker"></i>  </label>
                                    <input type="text" name="postpincode" required placeholder="Enter pincode of your company" value=""/> 
                                </div>
                                <div class="col-md-12">
                                    <label>Requirement Description <i class="fal fa-pencil"></i></label>
                                    <input type="text" name="postdescription" required="" placeholder="Maximum description 100 characters" value="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn color2-bg float-btn pull-right">SEND<i class="fal fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile-edit-container end-->                                      
                
                <!-- profile-edit-container end-->                                    
            </div>
            </form>
            <!-- dashboard content end-->
        </div>
        </div>
      <div class="modal-footer">
          
      </div>
    </div>
  </div>
</div>
            <!--  -->

            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->                
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap  modal_main">
                    <div class="main-register_title">Welcome to <span><strong>Trade </strong>My <strong>Deal</strong></span></div>
                        <div class="close-reg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">
                                    <div class="custom-form">
                                    @foreach($errors->all() as $error)
                                        <label class="error">{{$error}}</label>
                                    @endforeach
                                    @if (session('status'))
                                        <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                        <form method="POST" action="{{ route('login') }}"  name="registerform">
                                        @csrf
                                            <label>Username or Email Address <span>*</span> </label>
                                            <input id="email" name="email" type="email"  name="email" :value="old('email')" required autofocus>
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password"  required autocomplete="current-password">
                                            <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="remember">
                                                <label for="check-a3">Remember me</label>
                                            </div>
                                        </form>
                                        @if (Route::has('password.request'))
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                        @foreach($errors->all() as $error)
                                            <label class="error">{{$error}}</label>
                                        @endforeach
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2" action="{{ route('register') }}">
                                            @csrf
                                                <label >Full Name <span>*</span> </label>
                                                <input name="name" type="text" :value="old('name')" required autofocus autocomplete="name">
                                                <label>Email Address <span>*</span></label>
                                                <input name="email" type="email" :value="old('email')" required >
                                                <label >Password <span>*</span></label>
                                                <input name="password" type="password" required autocomplete="new-password"  >
                                                <label >Confirm Password <span>*</span></label>
                                                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" >
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit"  class="btn float-btn color2-bg"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="log-separator fl-wrap"><span>or</span></div>
                            <div class="soc-log fl-wrap">
                                <p>For faster login or register use your social account.</p>
                                <a href="#" class="facebook-log"> Facebook</a>
                            </div>
                            <div class="wave-bg">
                                <div class='wave -one'></div>
                                <div class='wave -two'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->

            
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        <!-- Main end -->
    <!--=============== scripts  ===============-->
    
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/plugins.js') }}"></script>
    <script src="{{ asset('theme/js/scripts.js') }}"></script>
    <script src="{{ asset('theme/js/shop.js') }}"></script>
    <script src="{{ asset('theme/js/pjs.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkPdTmxOthXAA7igJPTc3bB7ALK4TxCWM&libraries=places&callback=initAutocomplete"></script>
    <script src="{{ asset('theme/js/map-plugins.js') }}"></script>
    <script src="{{ asset('theme/js/toastr.min.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
         $(document).ready(function() {

            function toasterOptions() {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": true,
                    "onclick": null,
                    "showDuration": "100",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "200000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "show",
                    "hideMethod": "hide"
                };
            };
            toasterOptions();

            // error toaster message is session has error
            @if ($errors->all())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error  }}");
                @endforeach 
            @endif

            // success toaster message is session has success
            @if(session('success'))
                toastr.success("{{  session('success')   }}");
            @endif


        });

    </script>
    @livewireScripts
    </body>
</html>