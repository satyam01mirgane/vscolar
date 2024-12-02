<section class="background-grey">
            <div class="container">
			<h5>Testimonials</h5>
               <h3>What Our Buddy Says</h3>
                <!-- Testimonials -->
                <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="4" data-items-sm="2" data-items-xxs="1" data-equalize-item=".testimonial-item">
                    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="<?php echo e(asset($v->image)); ?>" alt="">
                        <?php echo e($v->content); ?>

                        <span><?php echo e($v->name); ?></span>
                        <span><?php echo e($v->designation); ?></span>
                    </div>
                    <!-- end: Testimonials item-->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- end: Testimonials -->
            </div>
        </section>  <?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/home-page-common/testimonial.blade.php ENDPATH**/ ?>