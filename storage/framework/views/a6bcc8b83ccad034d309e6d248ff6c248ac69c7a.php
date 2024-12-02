<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Page title -->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/top-banner.png')); ?>">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<h1>Online Test Result</h1>
		</div>
	</div>
</section>
<!-- end: Page title -->
<!-- CONTENT -->
<section id="section3">
            <div class="container">
                <div class="row">
				<?php if($correct_answer > 0): ?>
					<h4 style="color:green;">Great! you answer <?php echo e($correct_answer); ?> correct answers.</h4>
				<?php else: ?>
					<h4 style="color:red;">Oops! your all answer is incorrect, try again.</h4>
				<?php endif; ?>
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
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="1" <?php if (in_array(1, $answer)){echo 'checked';}?>  type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_1); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="2" <?php if (in_array(2, $answer)){echo 'checked';}?> required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_2); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="3" <?php if (in_array(3, $answer)){echo 'checked';}?> required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_3); ?>

							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" name="que<?php echo e($i); ?>" id="" value="4" <?php if (in_array(4, $answer)){echo 'checked';}?> required type="radio">
							<label class="form-check-label" for="">
							<?php echo e($v->option_4); ?>

							</label>
						</div>
				<!-- Que END -->
					<?php $i++; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</script><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/test-result.blade.php ENDPATH**/ ?>