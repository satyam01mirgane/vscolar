<section class="content background-grey">
            <div class="container">

                <div class="heading-text heading-section">
                    <h2>Browse our latest blogs</h2>
                    <span class="lead">we've included a collection of blogs with a wealth of information to help you learn more about the workshops and 
					get to know your VIEF SCHOLAR better.</span>
                </div>
            </div>

            <div id="blog">
                <div class="container">
                    <!-- Blog -->
                    <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
						<?php $__currentLoopData = $blog_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Post item-->
                        <div class="post-item border">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="<?php echo e(url('blog-detail/'.$v->slug)); ?>">
                                        <img alt="" src="<?php echo e(asset($v->image)); ?>">
                                    </a>
									</div>
                                <div class="post-item-description">
                                 <h2>
								 <a href="<?php echo e(url('blog-detail/'.$v->slug)); ?>"><?php echo e($v->name); ?></a></h2>
                                    <p><?php echo e(truncate($v->short_description)); ?></p>

                                    <a href="<?php echo e(url('blog-detail/'.$v->slug)); ?>" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                </div>
                            </div>
                        </div>
                        <!-- end: Post item-->
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </section><?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/home-page-common/home-blog.blade.php ENDPATH**/ ?>