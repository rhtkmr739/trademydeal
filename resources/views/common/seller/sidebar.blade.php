<div class="col-md-3">
    <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard menu</div>
    <div class="clearfix"></div>
    <div class="fixed-bar fl-wrap" id="dash_menu">
        <div class="user-profile-menu-wrap fl-wrap block_box">
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>USER PROFILE</h3>
                <ul class="no-list-style">
                    <li><a href="/sellerdashboard" class="user-profile-act"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                    <li><a href="dashboard-myprofile.html"><i class="fal fa-user-edit"></i> Edit profile</a></li>
                    <li><a href="dashboard-password.html"><i class="fal fa-key"></i>Change Password</a></li>
                    <li><a href="/seller/catalog/{{session('userdetail')[0]->userCatalogUrl}}"><i class="fal fa-store"></i>Your Catalog <span>7</span></a></li>
                    
                </ul>
            </div>
            <!-- user-profile-menu end-->
            <div class="user-profile-menu">
            <h3>LEAD INFORMATION</h3>
                <ul class="no-list-style">
                    <li><a href="/seller/verified-leads"><i class="fal fa-check"></i>Verified Leads <span>7</span></a></li>
                    <li><a href="/seller/purchased-leads" class="user-profile-act"><i class="fal fa-chart-line"></i>Purchased Leads</a></li>
                </ul>
            </div>
            <!-- user-profile-menu-->
            <div class="user-profile-menu">
                <h3>SERVICES</h3>
                <ul  class="no-list-style">
                    <li><a href="#"> <i class="fal fa-calendar-check"></i>  My Subscriptions <span>2</span></a></li>
                </ul>
            </div>
            <!-- user-profile-menu end-->                                        
            <button class="logout_btn color2-bg">Log Out <i class="fas fa-sign-out"></i></button>
        </div>
    </div>
    <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="#dash_menu">Back to Menu<i class="fas fa-caret-up"></i></a>
</div>
