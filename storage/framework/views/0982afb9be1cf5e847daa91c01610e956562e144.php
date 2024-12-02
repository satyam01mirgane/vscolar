<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page title -->
        <section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/workshop.png')); ?>">
            <div class="container">
                <div class="page-title" style="min-height:150px;">
                    <!--<h1>Workshops</h1>-->
				</div>
            </div>
        </section>
        <!-- end: Page title -->
		<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
						<!--Post Carousel -->
				<div class="heading-text heading-section">
                    <h2>View Our Upcoming Workshops</h2>
                    <span class="lead">We have identified the best offline and online workshops that will assist people in honing their innate talents and 
					aptitudes and moving forward into a successful era. Enroll in our next workshop to benefit from top-notch instruction. Enroll today!</span>
                </div>	
						<?php 
							$total = count($workshop_list);
							if($total > 8){
								$first_loop = floor($total/2);
							}else{
								$first_loop = $total;
							}
							$second_lopp = $total - $first_loop;
						?>
                        <div class="carousel" data-items="3">
							<?php if(count($workshop_list)>0): ?>
							<?php $__currentLoopData = $workshop_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if($k < $first_loop ): ?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('workshops-detail/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo e(date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))); ?></span>                                        
                                        <h2><a href="<?php echo e(url('workshops-detail/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->short_description,70)); ?></p>
										<?php if(!in_array($v->id,cartproduct())): ?>
											<h2>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?> ₹<?php echo e($v->price); ?> <?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<input type="hidden" value="<?php echo e($v->id); ?>" name="id">
												<input type="hidden" value="<?php echo e($v->name); ?>-Workshop" name="name">
												<input type="hidden" value="<?php echo e($v->price); ?>" name="price">
												<input type="hidden" value="<?php echo e($v->image); ?>"  name="image">
												<input type="hidden" value="1" name="quantity">
												<?php if($v->total_seat > 0): ?>
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:60px;"><?php echo e($v->total_seat); ?> SEAT LEFT </button>
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
							<?php endif; ?>
                            <!-- end: Post item-->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<div class="post-item border text-danger">No record found.</div>
								<a href="<?php echo e(url('workshops')); ?>"><button class="btn btn-outline" type="button">Back to list</button></a>
							<?php endif; ?>
                        </div>
						
						<div class="carousel mt-5 pt-5" data-items="3">
							<?php if(count($workshop_list)>0): ?>
							<?php $__currentLoopData = $workshop_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if(++$k > $first_loop && $total > 3){?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('workshops-detail/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo e(date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))); ?></span>                                        
                                        <h2><a href="<?php echo e(url('workshops-detail/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->short_description,70)); ?></p>
										<?php if(!in_array($v->id,cartproduct())): ?>
											<h2>
												<?php if($v->workshop_type=='Free'): ?> Free <?php else: ?> ₹<?php echo e($v->price); ?> <?php endif; ?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="<?php echo e(route('cart.store')); ?>" method="POST" enctype="multipart/form-data">
												<?php echo csrf_field(); ?>
												<input type="hidden" value="<?php echo e($v->id); ?>" name="id">
												<input type="hidden" value="<?php echo e($v->name); ?>-Workshop" name="name">
												<input type="hidden" value="<?php echo e($v->price); ?>" name="price">
												<input type="hidden" value="<?php echo e($v->image); ?>"  name="image">
												<input type="hidden" value="1" name="quantity">
												<button class="btn btn-outline" type="submit">Enroll Now</button>
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
							<?php }?>
                            <!-- end: Post item-->
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
								<div class="post-item border text-danger">No record found.</div>
								<a href="<?php echo e(url('workshops')); ?>"><button class="btn btn-outline" type="button">Back to list</button></a>
							<?php endif; ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
		
<!--End Workshop Section-->
<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/workshop-list.blade.php ENDPATH**/ ?>