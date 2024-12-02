<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
                        <div class="line"></div>
                        <!--Post Carousel -->
                        <h3>Our Upcoming Workshops</h3>
						<p>Take a look at our upcoming workshops that will assist you in actualizing your innate talent and enhance 
						your aptitude allowing you to rediscover your career options. Sign up for the workshop and learn from the best.</p>
                        <div class="carousel" data-items="3">
							@foreach($workshop_list as $k=>$v)
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{url('workshops-detail/'.$v->slug)}}">
                                            <img alt="" src="{{asset($v->image)}}"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))}}</span>                                        
                                        <h2><a href="{{url('workshops-detail/'.$v->slug)}}">{{truncate($v->name,30)}}</a></h2>
										<p>{{truncate($v->short_description,70)}}</p>
										@if(!in_array($v->id,cartproduct()))
											<h2>
												@if($v->workshop_type=='Free') Free @else ₹{{$v->price}} @endif &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="hidden" value="{{ $v->id }}" name="id">
												<input type="hidden" value="{{ $v->name }}-Workshop" name="name">
												<input type="hidden" value="{{$v->price}}" name="price">
												<input type="hidden" value="{{ $v->image }}"  name="image">
												<input type="hidden" value="1" name="quantity">
												
												@if($v->total_seat > 0)
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:60px;">{{$v->total_seat}} SEAT LEFT </button>
												@else
												<button type="button" class="btn btn-outline;">SEAT FULL </button>	
												@endif
											</form>
										  @else
											<h2>
												@if($v->workshop_type=='Free') Free @else ₹{{$v->price}} @endif &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
												<button class="btn btn-outline" type="button">In Cart</button>
											</h2>
										  @endif
                                        
                                    </div>
                                </div>
                            </div>
							@endforeach
                            <!-- end: Post item-->
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </section>