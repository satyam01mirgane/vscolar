<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/course.png')); ?>">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<!--<h1>Courses</h1>-->
		</div>
	</div>
</section>
<!-- end: Page title -->
<!-- CONTENT -->
<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
						<!--Post Carousel -->
						<?php 
							$total = count($course_list);
							if($total > 8){
								$first_loop = floor($total/2);
							}else{
								$first_loop = $total;
							}
							$second_lopp = $total - $first_loop;
						?>
				<div class="heading-text heading-section">
                    <h2>Course List</h2>
                    <span class="lead">We have identified the best offline and online courses that will assist people in honing their innate talents and
					aptitudes and moving forward into a successful era. Enroll in our next course to benefit from top-notch instruction. Enroll today!</span>
                </div>
						<form>
							<div class="row">
							<div class="col">
							<select class="form-control" name="course_type" id="course_type">
								<option value="">Course Type</option>
								<option value="CBSE Courses" <?php if($course_type=='CBSE Courses'){ echo 'selected';}?>>CBSE Courses</option>
								<option value="Crash Courses" <?php if($course_type=='Crash Courses'){ echo 'selected';}?>>Crash Courses </option>
								<option value="Skill Enhancement Courses" <?php if($course_type=='Skill Enhancement Courses'){ echo 'selected';}?>>Skill Enhancement Courses </option>
							  </select>
							</div>
							<div class="col">
								<select class="form-control" name="classes" disabled id="classes">
									<option value="">Class</option>
									<option value="9th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>9th</option>
									<option value="10th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>10th</option>
									<option value="11th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>11th</option>
									<option value="11th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>12th</option>
							  </select>
							</div>
							<div class="col">
								<select class="form-control" name="skill">
									<option value="" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Skill</option>
									<option value="Technical" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Technical</option>
									<option value="Non Technical" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Non-Technical</option>
								</select>
							</div>
							<div class="col">
							<button class="btn btn-success" type="Submit">Search</button>
							</div>
							</div>
						</form>
						<br>
                        <div class="carousel" data-items="3">
						<?php if(isset($search) && $search !=''): ?>
						<h4>Showing result for - <?php echo e($search); ?></h4>
						<?php endif; ?>
						<?php $__currentLoopData = $course_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($k < $first_loop ): ?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('course-detail/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo e(date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))); ?></span>                                        
                                        <h4><?php echo e($v->course_type); ?></h4>
										<h2><a href="<?php echo e(url('course-detail/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->short_description,40)); ?></p>
                                        <?php if(!in_array($v->id,cartproduct())): ?>
											<h2>
												<?php 
													$price = $v->price;
													if(isset($v->price)){
														if($v->discount_type =='Flat Discount'){
															$discount = 'Discount ₹'.$v->discount_value;
															$price = $price - $v->discount_value;
														}else{
															$discount = ceil(($v->price * $v->discount_value) / 100);
															$price = $v->price - $discount;
															$discount = 'Discount '.$discount.'%';
														}
													}
												?>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?>
								
												₹<?php echo e($price); ?> <span style="margin-left:78px;font-weight:normal;"><?php echo e($discount); ?></span>
												<?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<input type="hidden" value="<?php echo e($v->id); ?>" name="id">
												<input type="hidden" value="<?php echo e($v->name); ?>-Course" name="name">
												<input type="hidden" value="<?php echo e($v->price); ?>" name="price">
												<input type="hidden" value="<?php echo e($v->image); ?>"  name="image">
												<input type="hidden" value="1" name="quantity">
												<?php if($v->total_seat > 0): ?>
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:65px;"><?php echo e($v->total_seat); ?> SEAT LEFT </button>
												<?php else: ?>
												<button type="button" class="btn btn-outline;">SEAT FULL </button>	
												<?php endif; ?>
											</form>
										  <?php else: ?>
											<h2>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?> ₹<?php echo e($v->price); ?> <?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
												<button class="btn btn-outline" type="button">In Cart</button>
											</h2>
										  <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
                        </div>
						<div class="carousel t-5 pt-5" data-items="3">
						<?php if(isset($search) && $search !=''): ?>
						<h4>Showing result for - <?php echo e($search); ?></h4>
						<?php endif; ?>
						<?php $__currentLoopData = $course_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(++$k > $first_loop && $total > 3){?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('course-detail/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo e(date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))); ?></span>                                        
                                        <h4><?php echo e($v->course_type); ?></h4>
										<h2><a href="<?php echo e(url('course-detail/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->short_description,40)); ?></p>
                                        <?php if(!in_array($v->id,cartproduct())): ?>
											<h2>
												<?php 
													$price = $v->price;
													if(isset($v->price)){
														if($v->discount_type =='Flat Discount'){
															$discount = 'Discount ₹'.$v->discount_value;
															$price = $price - $v->discount_value;
														}else{
															$discount = ceil(($v->price * $v->discount_value) / 100);
															$price = $v->price - $discount;
															$discount = 'Discount '.$discount.'%';
														}
													}
												?>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?>
								
												₹<?php echo e($price); ?> <span style="margin-left:78px;font-weight:normal;"><?php echo e($discount); ?></span>
												<?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<input type="hidden" value="<?php echo e($v->id); ?>" name="id">
												<input type="hidden" value="<?php echo e($v->name); ?>-Course" name="name">
												<input type="hidden" value="<?php echo e($v->price); ?>" name="price">
												<input type="hidden" value="<?php echo e($v->image); ?>"  name="image">
												<input type="hidden" value="1" name="quantity">
												<?php if($v->total_seat > 0): ?>
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:65px;"><?php echo e($v->total_seat); ?> SEAT LEFT </button>
												<?php else: ?>
												<button type="button" class="btn btn-outline;">SEAT FULL </button>	
												<?php endif; ?>
											</form>
										  <?php else: ?>
											<h2>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?> ₹<?php echo e($v->price); ?> <?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
												<button class="btn btn-outline" type="button">In Cart</button>
											</h2>
										  <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
						<?php }?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </section>

<!--End Workshop Section-->
<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
$("#course_type").change(function(){
	var val = $(this).val();
	if(val =='CBSE Courses'){
		$("#classes").prop("disabled",false);
	}else{
		$("#classes").prop("disabled",true);
	}
});
</script><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/course-list.blade.php ENDPATH**/ ?>