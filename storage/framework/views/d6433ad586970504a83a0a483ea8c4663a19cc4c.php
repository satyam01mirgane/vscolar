<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
                        <div class="line"></div>
                        <!--Post Carousel -->
                        <h3>Our Upcoming Courses</h3>
						<p>Take a look at our upcoming courses that will assist you in actualizing your innate talent
						and enhance your aptitude allowing you to rediscover your career options. Sign up for the course and learn from the best.</p>
                        <div class="carousel" data-items="3">
							<?php $__currentLoopData = $course_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
												<input type="hidden" value="<?php echo e($price); ?>" name="price">
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </section><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/home-page-common/home-course.blade.php ENDPATH**/ ?>