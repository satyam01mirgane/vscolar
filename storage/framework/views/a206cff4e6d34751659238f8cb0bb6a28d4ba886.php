<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/top-banner.png')); ?>">
            <div class="container">
                <div class="page-title">
                    <h1>404 Page Not Found</h1>
                    
                </div>
            </div>
        </section>
<div class="container pt-5">
    <div class="row justify-content-center">
        

		<?php $__env->startSection('code', '404 😭'); ?>

		<?php $__env->startSection('title', __('Page Not Found')); ?>

		<?php $__env->startSection('image'); ?>

		<?php $__env->stopSection(); ?>

		<?php $__env->startSection('message', __('Sorry, the page you are looking for could not be found.')); ?>	
    </div>
</div>
<div class="clearfix pt-5"></div>
<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('errors::illustrated-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/errors/404.blade.php ENDPATH**/ ?>