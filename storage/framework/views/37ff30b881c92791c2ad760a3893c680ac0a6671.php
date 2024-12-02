<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--  Header Menu start -->
    <?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/top-banner.png')); ?>">
            <div class="container">
                <div class="page-title">
                    <h1>Reset Password</h1>
                    
                </div>
            </div>
    </section>
	<section class="pt-5 pb-5">
            <div class="container-fluid d-flex flex-column">
                <div class="row align-items-center min-vh-20">
                    <div class="col-md-6 col-lg-4 col-xl-3 mx-auto">
                          <div class="card">
                            <div class="card-body py-5 px-sm-5">
                                <div class="mb-5 text-center">
                                    <!---<h6 class="h3 mb-1">Login</h6>--->
                                    <p class="text-muted mb-0"> Forgot Your Password? Don't worry reset now</p>
                                </div><span class="clearfix"></span>
								<?php if(session('status')): ?>
									<div class="alert alert-success" role="alert">
										<?php echo e(session('status')); ?>

									</div>
								<?php endif; ?>
                                <form class="form-validate" method="POST" action="<?php echo e(route('password.email')); ?>">
								<?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <div class="input-group">
                                        <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

										<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<span class="invalid-feedback" role="alert">
												<strong><?php echo e($message); ?></strong>
											</span>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                    </div>
                                    </div>
									<button type="submit" class="btn btn-primary">
									Send Password Reset Link</button>
                                    
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>