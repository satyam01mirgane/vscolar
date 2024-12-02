 <div id="topbar" class="topbar-black dark home-corporate.html submenu-light ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="tel:<?php echo e(app_setting()->contact_phone); ?>">Phone: <?php echo e(app_setting()->contact_phone); ?></a></li>
                            <li><a href="mailto:<?php echo e(app_setting()->contact_email); ?>">Email: <?php echo e(app_setting()->contact_email); ?></a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="<?php echo e(app_setting()->facebook_url); ?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="<?php echo e(app_setting()->twitter_url); ?>"><i class="fab fa-twitter"></i></a></li>
                                <!--<li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                              
                                <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>-->
                               <li class="social-linkedin"><a href="https://in.linkedin.com/company/ VIEF SCHOLAR -llp"><i class="fab fa-linkedin"></i></a></li>
                                <li class="social-youtube"><a href="<?php echo e(app_setting()->youtube_url); ?>"><i class="fab fa-youtube"></i></a></li>
                                <!--<li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Topbar -->
		
		<!-- Header -->
        <header id="header" data-transparent="true" style="  background-color: white ;" class="dark submenu-light ">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo"> <a href="<?php echo e(url('/')); ?>"><span class="logo-default">
					<img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo"></span>
					<span class="logo-dark"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="logo"></span></a> </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" method="get" action="<?php echo e(url('workshops')); ?>" id="srchfrm">
                            <input class="form-control" name="search" type="text" placeholder="Type & Search..." />
                            <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li id="shopping-cart">
                            <a href="<?php echo e(url('cart')); ?>" style="display: inline-flex;"> <i class="fa fa-shopping-cart"  style="color: black" aria-hidden="true"></i>
                            <span class="shopping-cart-items"><?php echo e(Cart::getTotalQuantity()); ?></span></a>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger"> <a class="lines-button x"><span class="lines"></span></a> </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li class="active"><a href="<?php echo e(url('/')); ?>"style="color: black">Home</a></li>
									<li><a href="<?php echo e(url('/about-us')); ?>"style="color: black">About</a></li>
									<li><a href="<?php echo e(url('/workshops')); ?> " style="color: black">Workshops</a></li>
									<li><a href="<?php echo e(url('/courses')); ?>" style="color: black" >Courses</a></li>
									<li><a href="<?php echo e(url('/services')); ?>"style="color: black">Services</a></li>
									<li><a href="<?php echo e(url('/blogs')); ?>" style="color: black">Blog</a></li>
									<li><a href="<?php echo e(url('/events')); ?>"style="color: black">Events</a></li>
									<li><a href="<?php echo e(url('/contact-us')); ?>"style="color: black">Contact</a></li>
									
									  <?php if(isset(Auth::user()->name)): ?>
										<a href="<?php echo e(url('dashboard')); ?>" title="<?php echo e(Auth::user()->name); ?>" class="btn btn-roundeded">Hi,&nbsp; <?php echo e(ucfirst(substr(Auth::user()->name,0,8)).'...'); ?></a>
										
									  <?php else: ?>
									  <a href="<?php echo e(url('login')); ?>" class="btn btn-roundeded">Login</a>
									  <?php endif; ?>
								
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header --><?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/common/navbar.blade.php ENDPATH**/ ?>