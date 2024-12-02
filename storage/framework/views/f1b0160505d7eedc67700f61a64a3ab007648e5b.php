<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/course.png')); ?>">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<!--<h1><?php echo e($course_details->name); ?></h1>-->
		</div>
	</div>
</section>
<!-- end: Page title -->
<section id="page-content">
            <div class="container">
                <div class="row">
                <div class="content col-lg-12">  
                    <div class="heading-text heading-section">
                        <h2><?php echo e($course_details->name); ?></h2>
                        <span class="lead"><?php echo $course_details->short_description;?></span>
                    </div>
                </div>
                    <div class="content col-lg-6">                     
						<!--Post Carousel -->				
                        <div class=" yr-carousel">
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-5">
                                    <div class="post-image">
                                        <a href="#">
                                        <img alt="" src="<?php echo e(asset($course_details->image)); ?>"></a>
                                    </div>
                                    </div>
                                    <div class="col-md-7">
                                    <div class="post-item-description pt-0">
                                        <h2><a href="#"><?php echo e($course_details->name); ?></a></h2>
                                        <p><?php echo e($course_details->name); ?></p>
                                        <ul class="list_will_get">
                                            <ul class="list_will_get">
												<?php if(isset($course_details->edureka_certificates)): ?>
													<li><i class="fa fa-certificate"></i> <?php echo e($course_details->edureka_certificates); ?></li>
												<?php endif; ?>
												<?php if(isset($course_details->hrs_live_classes)): ?>
													<li><i class="fa fa-clock"></i> <?php echo e($course_details->hrs_live_classes); ?></li>
												<?php endif; ?>
												<?php if(isset($course_details->weekend_classes)): ?>
													<li><i class="fa fa-calendar-check-o"></i> <?php echo e($course_details->weekend_classes); ?></li> 
												<?php endif; ?>
											</ul>
                                        </ul>                                        
                                    </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-end">
										<?php if(isset($course_details->slots)): ?>
											<?php
												$slots = explode(',',$course_details->slots);
											?>
											<select class="form-control btn yr-select">
												<option selected>Select Slot</option>
												<?php $__currentLoopData = $slots; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<option value="<?php echo e($v); ?>"><?php echo e($v); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										<?php endif; ?>
										<?php if($course_details->total_seat > 0): ?>
                                        <button type="button" class="btn btn-outline;"><?php echo e($course_details->total_seat); ?> SEAT LEFT </button>
										<?php else: ?>
										<button type="button" class="btn btn-outline;">SEAT FULL </button>	
										<?php endif; ?>
                                        
										<?php if(!in_array($course_details->id,cartproduct())): ?>
											<?php if($course_details->total_seat > 0): ?>
										<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
											<?php echo csrf_field(); ?>
											<input type="hidden" value="<?php echo e($course_details->id); ?>" name="id">
											<input type="hidden" value="<?php echo e($course_details->name); ?>-Course" name="name">
											<input type="hidden" value="<?php echo e($course_details->price); ?>" name="price">
											<input type="hidden" value="<?php echo e($course_details->image); ?>"  name="image">
											<input type="hidden" value="1" name="quantity">
											<button type="submit" class="btn btn-outline;" style="margin-right:8px;margin-left:8px;">Enroll Now &nbsp;</button>
										</form>
										 <?php endif; ?>
										<?php else: ?>
											<a href="<?php echo e(url('cart')); ?>"><button type="button" class="btn btn-outline;">In Cart</button></a>
										<?php endif; ?>
										
                                        <button type="button" class="btn btn-outline; "><?php echo e($course_details->price - $course_details->discount_value); ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="content col-lg-6">                     
						<!--Post Carousel -->				
                        <div class="card">
                        <div class="card-body">
                            <!-- Post item-->
                            <h3>Introduction </h3>
                            <p><?php echo $course_details->full_description;?></p>
                        </div>
                        </div>
                    </div>
                </div>
                 <!-- Module Start -->
                <div class="row pt-5">
                    <div class="content col-lg-8">
                        <h3>Week-wise Modules</h3>
                        <ul class="list-group list-group-numbered">
							<?php
							if(isset($course_details->learning_modules)){
							$arr = explode("\r\n", trim($course_details->learning_modules));
							for ($i = 0; $i < count($arr); $i++) {?>
								<li class="list-group-item"><?php echo e($arr[$i]); ?></li>
                            <?php }}?>
                        </ul>
                    </div>
                    <div class="content col-lg-4">
                    <img alt="" src="<?php echo e(asset('assets/images/gif/course-1.jpg')); ?>" class="rounded-3 w-100">
                    </div>
                </div>
                 <!-- end: Module -->
            </div>
        </section>
		 <!-- Section 2 Start -->
        <section id="page-content" class="background-grey no-padding">
            <div class="container">
            <div class="row pt-5">
                <div class="content col-lg-6">
                    <h3>Perks of Choosing VIEF SCHOLAR course</h3>
                    <p>
                    <?php echo nl2br($course_details->perks_of_choosing);?> 
                    </p>
                </div>
                <div class="content col-lg-6">
                <img alt="" src="<?php echo e(asset('assets/images/gif/course-2.png')); ?>" class="rounded-3 w-100">
                </div>                
            </div>
            <!-- Part 2 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tools you will learn</h3>
                    <p>
                    <?php echo nl2br($course_details->tools_you_will_learn);?>
                    </p>
                </div>
            </div>
             <!--end: Part 2 -->
             <!-- Part 3 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Placement assistance</h3>
                    <p>
                   <?php echo nl2br($course_details->placement_assistance);?>
                    </p>
                </div>
            </div>
             <!--end: Part 3 -->
             <!-- Part 4 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Career Opportunities</h3>
                    <p>
                    <?php echo nl2br($course_details->career_counselling);?>
                    </p>
                </div>
            </div>
             <!--end: Part 4 -->
             <!-- Part 5 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>What are we offering</h3>
                    <p>
                    <?php echo nl2br($course_details->what_we_have);?>
                    </p>
                </div>
            </div>
             <!--end: Part 5 -->
            </div>
        </section>
        <!-- end:  Section 2 -->
		<!-- Section 3 Start -->
        <section id="page-content" class="liveProjecct">
            <div class="container">
            <div class="row">
            <h3>Live Projects & Case Studies</h3>
            <div class="content col-lg-12">
            <p><?php echo nl2br($course_details->live_projects);?>  
                    </p>
            </div>
            </div>

            <div class="row pt-3">
            <h3>Quiz & Win</h3>
                <div class="content col-lg-6">
                <img alt="" src="<?php echo e(asset('assets/images/gif/course-5.jpg')); ?>" class="rounded-3 w-100">
                </div> 
                <div class="content col-lg-6">
                    <div class="card"> 
                    <div class="card-body">                   
                    <p>
                    <?php echo nl2br($course_details->quiz_win);?>    
                    </p>
                    </div></div>
                </div>         
            </div>
            <!-- Part 2 -->
            <div class="row">
                <div class="content col-lg-12">
                    <h3>Test your learning.</h3>
                     <ul class="list-group list-group-numbered">
							<?php
							if(isset($course_details->test_your_learning)){
							$arr = explode("\r\n", trim($course_details->test_your_learning));
							for ($i = 0; $i < count($arr); $i++) {?>
								<li class="list-group-item"><?php echo e($arr[$i]); ?></li>
                            <?php }}?>
                        </ul>
                </div>
            </div>
             <!--end: Part 2 -->  
            </div>
        </section>
        <!-- end:  Section 3 -->
		<?php echo $__env->make('front.home-page-common.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<section id="page-content" class="background-grey no-padding">
            <div class="container">
             
            <div class="row pt-5">
            <h3>Sample Certificate</h3>                 
                <div class="content col-lg-6">                    
                    <p>
                    <?php echo nl2br($course_details->sample_certificate);?>     
                    </p>
                </div>
                <div class="content col-lg-6">
                 <img alt="" src="<?php echo e(asset($course_details->sample_certificate_image)); ?>" class="rounded-3 w-100">
                </div>         
            </div>
            <!-- Part 2 -->
            <div class="row">
            <h3>FAQ</h3>
                <div class="content col-lg-7">
                <!--start Accordion  -->
						<div class="accordion fancy radius clean">
                             <div class="ac-item ac-active">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i><?php echo e($course_details->question1); ?></h5>
                                 <div class="ac-content ac-active"><?php echo e($course_details->answer1); ?></div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i><?php echo e($course_details->question2); ?></h5>
                                 <div class="ac-content ac-active"><?php echo e($course_details->answer2); ?></div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i><?php echo e($course_details->question3); ?></h5>
                                 <div class="ac-content ac-active"><?php echo e($course_details->answer3); ?></div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i><?php echo e($course_details->question4); ?></h5>
                                 <div class="ac-content ac-active"><?php echo e($course_details->answer4); ?></div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i><?php echo e($course_details->question5); ?></h5>
                                 <div class="ac-content ac-active"><?php echo e($course_details->answer5); ?></div>
                             </div>
                         </div>
                                   <!--end: Accordion  -->
                <div class="content col-lg-5">
                <img alt="" src="<?php echo e(asset('assets/images/gif/course-4.jpg')); ?>" class="rounded-3 w-100">                    
                </div>
            </div>
             <!--end: Part 2 -->
             <!-- Part 3 -->
            <div class="row">
                <div class="content col-lg-12">
                  
                </div>
            </div>
             <!--end: Part 3 -->
            
            </div>
        </section>
<!--  -->
<!--End Workshop Section-->
<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/pages/course-details.blade.php ENDPATH**/ ?>