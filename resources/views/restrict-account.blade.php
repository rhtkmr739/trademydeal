@include('common.head')
<style>
    .login-holder{
        display: none;
    }
</style>
<!-- wrapper-->
<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!--section  -->
        <section data-scrollax-parent="true" id="sec1">
            <div class="container">
                <div class="section-title">
                    <h2>Hi, {{session('userdetail')[0]->userName}}</h2>
                    <span class="section-separator"></span>
                    <div class="col-md-12 text-center">
                        <span class="theme-center-text">Your account is not activated, Please <a href="/contact-us">contact</a> administrator</span>
                    </div>
                    
                </div>
                <div class="process-wrap fl-wrap">
                    <ul class="no-list-style">
                        <li>
                            <div class="process-item">
                                <span class="process-count">01 </span>
                                <div class="time-line-icon animate__animated"><i class="fal fa-user-headset"></i></div>
                                <h4>Contact Administrator</h4>
                                <p>Feel free to ask about your query.</p>
                            </div>
                            <span class="pr-dec"></span>
                        </li>
                        <li>
                            <div class="process-item">
                                <span class="process-count">02</span>
                                <div class="time-line-icon animate__animated"><i class="fal fa-clock"></i></div>
                                <h4>Quick Activation</h4>
                                <p>Our team will resolve your query instantly.</p>
                            </div>
                            <span class="pr-dec"></span>
                        </li>
                        <li>
                            <div class="process-item">
                                <span class="process-count">03</span>
                                <div class="time-line-icon animate__animated"><i class="fal fa-thumbs-up"></i></div>
                                <h4> Ready To Go</h4>
                                <p>Trade with the best deals with TRADE MY DEAL</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--section end-->
    </div>
    <!--content end-->
</div>
<!-- wrapper end-->

@include('common.foot')   