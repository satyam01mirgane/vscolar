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
				<h4 id="total_mark"></h4>
				<form method="POST" action="<?php echo e(url('/submit-quiz')); ?>">
				<input type="hidden" name="quiz_id" value="<?php echo e($quiz_cat->id); ?>">
				<?php echo csrf_field(); ?>
				<div class="col-lg-12">
					<?php if(count($quiz_list) > 0): ?>
						<?php $i=1;$total_mark = 0; ?>
						<?php $__currentLoopData = $quiz_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $K=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($v->quizres==$v->answer){
							$total_mark++;
						}
						?>
					<h5 class="text-small mt-5">Que<?php echo e($i); ?>: <?php echo e($v->question); ?>:</h5>
						<input type="hidden" name="quiz[]" value="<?php echo e($v->id); ?>">
						<div class="form-check">
							
							<label class="form-check-label" for="">
							<?php echo e($v->option_1); ?>

							</label>
						</div>
						<div class="form-check">
							
							<label class="form-check-label" for="">
							<?php echo e($v->option_2); ?>

							</label>
						</div>
						<div class="form-check">
							
							<label class="form-check-label" for="">
							<?php echo e($v->option_3); ?>

							</label>
						</div>
						<div class="form-check">
							
							<label class="form-check-label" for="">
							<?php echo e($v->option_4); ?>

							</label>
						</div>
						<div class="form-check">
							<b>Your choosen option is <?php echo e($v->quizres); ?> which is <?php if($v->quizres==$v->answer){?><span style="color:green;">Correct</span><?php }else{?> <span style="color:red;">Incorrect</span><?php }?></b>
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
var total_mark = '<?php echo $total_mark ?>';
$("#total_mark").text('Total Mark - '+total_mark);
</script><?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/quiz-result.blade.php ENDPATH**/ ?>