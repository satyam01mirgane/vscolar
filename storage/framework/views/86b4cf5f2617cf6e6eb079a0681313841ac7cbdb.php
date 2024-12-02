<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Footer -->
				<section style="background-color:#25286e;">
					<div id="particles-bubble" class="particles"></div>
					<div class="container">
						<div class="heading-text text-light text-center">
							<h5 class="text-uppercase">Boost Your Skills with </h5>
							<h2 class="fw-800"><?php echo e(app_setting()->site_title); ?></h2>
							<a href="<?php echo e(url('workshops')); ?>" class="btn btn-roundeded">Get Started</a>
						</div>
					</div>
				</section>     
	 <footer id="footer" class="inverted">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="widget">
                               
								<img alt="" src="<?php echo e(asset('assets/images/logo.svg')); ?>"><br><br>
                                <p class="mb-5"><?php echo e(app_setting()->site_description); ?></p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget">
                                        <div class="widget-title">QUICK LINKS</div>
                                        <ul class="list">
                                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                                            <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
                                            <li><a href="<?php echo e(url('workshops')); ?>">Workshops</a></li>
                                            <li><a href="<?php echo e(url('courses')); ?>">Courses</a></li>
                                            <li><a href="<?php echo e(url('services')); ?>">Services</a></li>
                                            <li><a href="<?php echo e(url('events')); ?>">Events</a></li>
											<li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>
											<li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
											<li><a href="<?php echo e(url('page/term-condition')); ?>">Term & Condition</a></li>
											<li><a href="<?php echo e(url('page/privacy-policy')); ?>">Privacy Policy</a></li>
											
											


                                        </ul>
                                    </div>
                                </div>
                                                              
                            </div>
                        </div>
						<div class="col-lg-4">
                        <h4 class="m-b-20">UP COMINGS</h4>
                        <div class="post-thumbnail-list">
							<?php $__currentLoopData = workshop_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="post-thumbnail-entry">
                                <img src="<?php echo e(asset($v->image)); ?>" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="<?php echo e(url('/workshops-detail/'.$v->slug)); ?>"><?php echo e($v->name); ?></a>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    </div>
					
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; Copyright VIEF SCHOLAR 2023. Design by <a href="http://www.softlysis.com/">Softlysis Technologies</a> </div>
                </div>
            </div>
        </footer>
		<a href="https://api.whatsapp.com/send?phone=+919667576014&text=Hello." class="floating" target="_blank">
			<i class="fa fa-whatsapp float-button"></i></a>

		<!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
    <!--Template functions-->
    <script src="<?php echo e(asset('assets/js/functions.js')); ?>"></script>
	
	 <script src="<?php echo e(asset('assets/plugins/particles/particles.js')); ?>" type="text/javascript"></script>
    <!--Particles-->
    <script src="<?php echo e(asset('assets/plugins/particles/particles-dots.js')); ?>" type="text/javascript"></script>
    <!--Particles stars-->
    <script src="<?php echo e(asset('assets/plugins/particles/particles-stars.js')); ?>" type="text/javascript"></script>
    <!--Particles bubbles-->
    <script src="<?php echo e(asset('assets/plugins/particles/particles-bubble.js')); ?>" type="text/javascript"></script>
    <!--Particles snow-->
    <script src="<?php echo e(asset('assets/plugins/particles/particles-snow.js')); ?>" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo e(asset('assets/plugins/gmap3/gmap3.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/plugins/gmap3/map-styles.js')); ?>"></script>
	</div>
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
</body>
<script>
$(document).ready(function(){
    $("iframe").on("load", function(){
        $(this).contents().on("click", function(){
            alert("Click detected inside iframe.");
			window.location.href = "<?php echo url('cart') ?>";
        });
    });
});
</script>
</html><?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/common/footer.blade.php ENDPATH**/ ?>