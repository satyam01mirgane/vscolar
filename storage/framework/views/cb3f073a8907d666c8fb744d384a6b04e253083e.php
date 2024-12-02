<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/top-banner.png')); ?>">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<h1>Quiz & Win</h1>
		</div>
	</div>
</section>
<!-- end: Page title -->
<!-- CONTENT -->
<section id="section3">
            <div class="container">
                <div class="row">
				<form method="POST" action="<?php echo e(url('/submit-quiz')); ?>">
				<input type="hidden" name="quiz_id" value="<?php echo e($quiz_cat->id); ?>">
				<?php echo csrf_field(); ?>
				<div class="col-lg-12">
					<?php if(count($quiz_list) > 0): ?>
						<?php $i=1; ?>
						<?php $__currentLoopData = $quiz_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $K=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<h5 class="text-small mt-5">Que<?php echo e($i); ?>: <?php echo e($v->question); ?>:</h5>
						<input type="hidden" name="quiz[]" value="<?php echo e($v->id); ?>">
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="1"  type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_1); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="2" required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_2); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="3" required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_3); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="4" required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_4); ?>

							</label>
						</div>
				<!-- Que END -->
					<?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<div class="mt-5">
						<button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Submit</button>
					</div>
					<?php endif; ?>
                    </div>
					</form>
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
</script><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/start-quiz.blade.php ENDPATH**/ ?>