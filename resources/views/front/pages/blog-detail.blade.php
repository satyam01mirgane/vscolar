@include('front.common.header')
@include('front.common.navbar')

<!-- end: Header -->
        <!-- Page title -->
        <section id="page-title" data-bg-parallax="{{asset('assets/images/blog-banner.png')}}">
            <div class="container">
                <div class="page-title" style="min-height:150px;">
                     <!--<h1>{{$blog_detail->name}}</h1>-->
                    
                </div>
            </div>
        </section>
        <!-- end: Page title -->

<section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-lg-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="{{asset($blog_detail->image)}}">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>{{$blog_detail->name}}</h2>
                                        <div class="post-meta">
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{date('d M, Y',strtotime($blog_detail->created_at))}}</span>
                                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>({{count($comment)}}) Comments</a></span>
                                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i>{{ucfirst($category_details->name)}}</a></span>
                                            <div class="post-meta-share">
                                                <a class="btn btn-xs btn-slide btn-facebook" href="https://www.facebook.com/ VIEF SCHOLAR LLP">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span>Facebook</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-twitter" href="https://twitter.com/ VIEF SCHOLAR 4" data-width="100">
                                                    <i class="fab fa-twitter"></i>
                                                    <span>Twitter</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-instagram" href="https://www.instagram.com/ VIEF SCHOLAR _llp/" data-width="118">
                                                    <i class="fab fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                                <a class="btn btn-xs btn-slide btn-googleplus" href="https://in.linkedin.com/company/ VIEF SCHOLAR -llp" data-width="80">
                                                    <i class="fab fa-linkedin-in"></i>
                                                    <span>Linkedin</span>
                                                </a>
                                                
                                                <a class="btn btn-xs btn-slide btn-googleplus" href="mailto:info@ VIEF SCHOLAR .in" data-width="80">
                                                    <i class="icon-mail"></i>
                                                    <span>Mail</span>
                                                </a>
                                            
                                            </div>
                                        </div>
                                        <p style="text-align:justify">{{$blog_detail->short_description}}</p>
                                        <div class="blockquote">
                                            <p> </p>
                                            <small><cite><?php echo nl2br($blog_detail->punch_text);?></cite></small>
                                        </div>
										<p style="text-align:justify"> <?php echo nl2br($blog_detail->full_description);?></p>
                                        
                                    </div>
                                    <!--<div class="post-tags">
                                        <a href="#">Life</a>
                                        <a href="#">Sport</a>
                                        <a href="#">Tech</a>
                                        <a href="#">Travel</a>
                                    </div>-->
                                    <div class="post-navigation">
										@if(isset($blog_detail_prev))
                                        <a href="{{url('/blog-detail/'.$blog_detail_prev->slug)}}" class="post-prev">
                                            <div class="post-prev-title"><span>Previous Post</span>{{$blog_detail_prev->name}}</div>
                                        </a>
										@else
										<a class="post-prev">
                                            <div class="post-prev-title"><span>&nbsp;</span>No record available</div>
                                        </a>	
										@endif
                                        <a href="blog-masonry-3.html" class="post-all">
                                            <i class="icon-grid"> </i>
                                        </a>
										@if(isset($blog_detail_next))
                                        <a href="{{url('/blog-detail/'.$blog_detail_next->slug)}}" class="post-next">
                                            <div class="post-next-title"><span>Next Post</span>{{$blog_detail_next->name}}</div>
                                        </a>
										@else
										<a class="post-prev">
                                            <div class="post-prev-title"><span>&nbsp;</span>No record available</div>
                                        </a>	
										@endif
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>
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
                                    <a href="{{url('/blog-detail/'.$v->slug)}}">{{$v->name}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </div>
                        <!--End: Tabs with Posts-->
                       
                        
                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form" novalidate action="#" role="form">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" required name="widget-subscribe-form-email" id="subs_email" class="form-control required email" placeholder="Enter your Email">
                                   
									<span class="input-group-btn">
                                        <button type="button" id="widget-subscribe-submit-button" class="btn btn-primary saveNews"><i class="fa fa-paper-plane"></i></button>
                                    </span> 
									 
									</div>
									<span id="msg"></span>
                            </form>
                        </div>
                        <!--end: widget newsletter-->
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>

@include('front.common.footer')
<script>
$(".saveNews").click(function(){
       var email = $("#subs_email").val();
       if(email==''){
           $("#msg").text("Please enter email id.");
           $("#msg").attr("style","color:red");
           $("#subs_email").focus();
           return false;
       }else{
           if(!ValidateEmail(email)){
               $("#msg").text("Please enter correct email id.");
               $("#msg").attr("style","color:red");
               $("#subs_email").focus();
               return false;
           }
       }
       $("#msg").text("");
       $("#msg").attr("style","");
       
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
       
       var site_url = "{{url('/')}}";
       $.ajax({
	        url: site_url+"/save-newsletter",
			type: 'POST',
			data: {
                "_token": "{{ csrf_token() }}",
                "em": email
            },
			success:function(data)
			{
				var jsonObj = JSON.parse(data);
				if(jsonObj.status=='success'){
				    $("#msg").text("Email is successfully registerred.");
                    $("#msg").attr("style","color:green");
				}
				if(jsonObj.status=='fail'){
				    $("#msg").text("Oops! something went wrong please try again.");
                    $("#msg").attr("style","color:red");
				}
				if(jsonObj.status=='exist'){
				    $("#msg").text("Oops! This email is already registerred with us.");
                    $("#msg").attr("style","color:red");
				}
				setTimeout(function() {
				     $("#msg").text("");
                     $("#msg").attr("style","");
                     $("#subs_email").val("");
				}, 3000);
			},
			error: function(error) {
				console.log(error.responseText);
			}
	}); 
       
    });
    function ValidateEmail(inputText)
    {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(inputText.match(mailformat))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
</script>