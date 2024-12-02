@include('front.common.header')
@include('front.common.navbar')


<section id="page-title"  data-bg-parallax="{{asset('assets/images/blog-banner.png')}}">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<!--<h1>Blog</h1>-->
			
		</div>
	</div>
</section>

<section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-lg-9">
                        <!-- Page title -->
                        <div class="page-title">
                            <h1>Our Latest Blogs</h1><br>
                        </div>
                        <!-- end: Page title -->
                        <!-- Blog -->
                        <div id="blog">
                            
						@foreach($blog_list as $k=>$v)	
                           <!-- Post item-->
							<div class="post-item border">
								<div class="post-item-wrap">
									<div class="post-image">
										<a href="{{url('blog-detail/'.$v->slug)}}">
											<img alt="" src="{{asset($v->image)}}">
										</a>
									</div>
									<div class="post-item-description">
										<h2><a href="{{url('blog-detail/'.$v->slug)}}">{{$v->name}}</a></h2>
										<p>{{$v->description}}</p>

										<a href="{{url('blog-detail/'.$v->slug)}}" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

									</div>
								</div>
							</div>
						@endforeach
                        </div>
                        <!-- end: Blog -->
                        <!-- Pagination -->
                        {{ $blog_list->links() }}
                        <!-- end: Pagination -->
                    </div>
                    <!-- end: post content -->
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="post-thumbnail-list">
							@foreach($blog_list as $k=>$v)	
                            <div class="post-thumbnail-entry">
                                <img src="{{asset($v->image)}}" alt="">
                                <div class="post-thumbnail-content">
                                    <a href="{{url('blog-detail/'.$v->slug)}}">{{$v->name}}</a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                        </div>
                        <!--End: Tabs with Posts-->
                       
                        
                        <!--widget newsletter-->
                        <!--<div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button type="submit" id="widget-subscribe-submit-button" class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                                    </span> </div>
                            </form>
                        </div>-->
                        <!--end: widget newsletter-->
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>



@include('front.common.footer')
