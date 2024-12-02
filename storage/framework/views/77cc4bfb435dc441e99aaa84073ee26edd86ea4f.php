<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/course.png')); ?>">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<h1>Quiz & Win</h1>
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
							$total = count($start_quiz);
							if($total > 8){
								$first_loop = floor($total/2);
							}else{
								$first_loop = $total;
							}
							$second_lopp = $total - $first_loop;
						?>
				<div class="heading-text heading-section">
                    <h2>Quiz List</h2>
                    <span class="lead">We have identified the best offline and online courses that will assist people in honing their innate talents and
					aptitudes and moving forward into a successful era. Enroll in our next course to benefit from top-notch instruction. Enroll today!</span>
                </div>
                        <div class="carousel" data-items="3">
						<?php $__currentLoopData = $start_quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($k < $first_loop ): ?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">                                
										<h2><a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->description,40)); ?></p>
           
											<h2>
												<a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>"><button class="btn btn-outline" type="button">Start Quiz</button></a>
											</h2>

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
                        </div>
						<div class="carousel t-5 pt-5" data-items="3">
						<?php $__currentLoopData = $start_quiz; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if(++$k > $first_loop && $total > 3){?>
                            <!-- Post item-->
                             <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>">
                                            <img alt="" src="<?php echo e(asset($v->image)); ?>"></a>
                                    </div>
                                    <div class="post-item-description">                                
										<h2><a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>"><?php echo e(truncate($v->name,30)); ?></a></h2>
										<p><?php echo e(truncate($v->description,40)); ?></p>
           
											<h2>
												<a href="<?php echo e(url('start-quiz/'.$v->slug)); ?>"><button class="btn btn-outline" type="button">Start Quiz</button></a>
											</h2>

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
</script><?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/pages/quiz-list.blade.php ENDPATH**/ ?>