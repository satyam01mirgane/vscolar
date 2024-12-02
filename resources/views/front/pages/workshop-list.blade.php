@include('front.common.header')
@include('front.common.navbar')
<!-- Page title -->
        <section id="page-title" data-bg-parallax="{{asset('assets/images/workshop.png')}}">
            <div class="container">
                <div class="page-title" style="min-height:150px;">
                    <!--<h1>Workshops</h1>-->
				</div>
            </div>
        </section>
        <!-- end: Page title -->
		<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
						<!--Post Carousel -->
				<div class="heading-text heading-section">
                    <h2>View Our Upcoming Workshops</h2>
                    <span class="lead">We have identified the best offline and online workshops that will assist people in honing their innate talents and 
					aptitudes and moving forward into a successful era. Enroll in our next workshop to benefit from top-notch instruction. Enroll today!</span>
                </div>	
						@php 
							$total = count($workshop_list);
							if($total > 8){
								$first_loop = floor($total/2);
							}else{
								$first_loop = $total;
							}
							$second_lopp = $total - $first_loop;
						@endphp
                        <div class="carousel" data-items="3">
							@if(count($workshop_list)>0)
							@foreach($workshop_list as $k=>$v)
							@if($k < $first_loop )
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
							@endif
                            <!-- end: Post item-->
							@endforeach
							@else
								<div class="post-item border text-danger">No record found.</div>
								<a href="{{url('workshops')}}"><button class="btn btn-outline" type="button">Back to list</button></a>
							@endif
                        </div>
						
						<div class="carousel mt-5 pt-5" data-items="3">
							@if(count($workshop_list)>0)
							@foreach($workshop_list as $k=>$v)
							<?php if(++$k > $first_loop && $total > 3){?>
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
												<button class="btn btn-outline" type="submit">Enroll Now</button>
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
							<?php }?>
                            <!-- end: Post item-->
							@endforeach
							@else
								<div class="post-item border text-danger">No record found.</div>
								<a href="{{url('workshops')}}"><button class="btn btn-outline" type="button">Back to list</button></a>
							@endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
		
<!--End Workshop Section-->
@include('front.common.footer')