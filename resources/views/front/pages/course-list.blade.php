@include('front.common.header')
@include('front.common.navbar')
<!-- Page title -->
<section id="page-title" data-bg-parallax="{{asset('assets/images/course.png')}}">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<!--<h1>Courses</h1>-->
		</div>
	</div>
</section>
<!-- end: Page title -->
<!-- CONTENT -->
<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">                       
						<!--Post Carousel -->
						@php 
							$total = count($course_list);
							if($total > 8){
								$first_loop = floor($total/2);
							}else{
								$first_loop = $total;
							}
							$second_lopp = $total - $first_loop;
						@endphp
				<div class="heading-text heading-section">
                    <h2>Course List</h2>
                    <span class="lead">We have identified the best offline and online courses that will assist people in honing their innate talents and
					aptitudes and moving forward into a successful era. Enroll in our next course to benefit from top-notch instruction. Enroll today!</span>
                </div>
						<form>
							<div class="row">
							<div class="col">
							<select class="form-control" name="course_type" id="course_type">
								<option value="">Course Type</option>
								<option value="CBSE Courses" <?php if($course_type=='CBSE Courses'){ echo 'selected';}?>>CBSE Courses</option>
								<option value="Crash Courses" <?php if($course_type=='Crash Courses'){ echo 'selected';}?>>Crash Courses </option>
								<option value="Skill Enhancement Courses" <?php if($course_type=='Skill Enhancement Courses'){ echo 'selected';}?>>Skill Enhancement Courses </option>
							  </select>
							</div>
							<div class="col">
								<select class="form-control" name="classes" disabled id="classes">
									<option value="">Class</option>
									<option value="9th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>9th</option>
									<option value="10th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>10th</option>
									<option value="11th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>11th</option>
									<option value="11th" <?php if($class=='CBSE Courses'){ echo 'selected';}?>>12th</option>
							  </select>
							</div>
							<div class="col">
								<select class="form-control" name="skill">
									<option value="" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Skill</option>
									<option value="Technical" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Technical</option>
									<option value="Non Technical" <?php if($skill=='CBSE Courses'){ echo 'selected';}?>>Non-Technical</option>
								</select>
							</div>
							<div class="col">
							<button class="btn btn-success" type="Submit">Search</button>
							</div>
							</div>
						</form>
						<br>
                        <div class="carousel" data-items="3">
						@if(isset($search) && $search !='')
						<h4>Showing result for - {{$search}}</h4>
						@endif
						@foreach($course_list as $k=>$v)
						@if($k < $first_loop )
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{url('course-detail/'.$v->slug)}}">
                                            <img alt="" src="{{asset($v->image)}}"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))}}</span>                                        
                                        <h4>{{$v->course_type}}</h4>
										<h2><a href="{{url('course-detail/'.$v->slug)}}">{{truncate($v->name,30)}}</a></h2>
										<p>{{truncate($v->short_description,40)}}</p>
                                        @if(!in_array($v->id,cartproduct()))
											<h2>
												@php 
													$price = $v->price;
													if(isset($v->price)){
														if($v->discount_type =='Flat Discount'){
															$discount = 'Discount ₹'.$v->discount_value;
															$price = $price - $v->discount_value;
														}else{
															$discount = ceil(($v->price * $v->discount_value) / 100);
															$price = $v->price - $discount;
															$discount = 'Discount '.$discount.'%';
														}
													}
												@endphp
												@if($v->workshop_type=='Free') Free @else
								
												₹{{$price}} <span style="margin-left:78px;font-weight:normal;">{{$discount}}</span>
												@endif &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="hidden" value="{{ $v->id }}" name="id">
												<input type="hidden" value="{{ $v->name }}-Course" name="name">
												<input type="hidden" value="{{$v->price}}" name="price">
												<input type="hidden" value="{{ $v->image }}"  name="image">
												<input type="hidden" value="1" name="quantity">
												@if($v->total_seat > 0)
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:65px;">{{$v->total_seat}} SEAT LEFT </button>
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
                            <!-- end: Post item-->
							@endif
							@endforeach
							
                        </div>
						<div class="carousel t-5 pt-5" data-items="3">
						@if(isset($search) && $search !='')
						<h4>Showing result for - {{$search}}</h4>
						@endif
						@foreach($course_list as $k=>$v)
						<?php if(++$k > $first_loop && $total > 3){?>
                            <!-- Post item-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{url('course-detail/'.$v->slug)}}">
                                            <img alt="" src="{{asset($v->image)}}"></a>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{date('d M Y h:i A',strtotime($v->session_date.' '.$v->session_time))}}</span>                                        
                                        <h4>{{$v->course_type}}</h4>
										<h2><a href="{{url('course-detail/'.$v->slug)}}">{{truncate($v->name,30)}}</a></h2>
										<p>{{truncate($v->short_description,40)}}</p>
                                        @if(!in_array($v->id,cartproduct()))
											<h2>
												@php 
													$price = $v->price;
													if(isset($v->price)){
														if($v->discount_type =='Flat Discount'){
															$discount = 'Discount ₹'.$v->discount_value;
															$price = $price - $v->discount_value;
														}else{
															$discount = ceil(($v->price * $v->discount_value) / 100);
															$price = $v->price - $discount;
															$discount = 'Discount '.$discount.'%';
														}
													}
												@endphp
												@if($v->workshop_type=='Free') Free @else
								
												₹{{$price}} <span style="margin-left:78px;font-weight:normal;">{{$discount}}</span>
												@endif &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											</h2>
											<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
												@csrf
												<input type="hidden" value="{{ $v->id }}" name="id">
												<input type="hidden" value="{{ $v->name }}-Course" name="name">
												<input type="hidden" value="{{$v->price}}" name="price">
												<input type="hidden" value="{{ $v->image }}"  name="image">
												<input type="hidden" value="1" name="quantity">
												@if($v->total_seat > 0)
												<button class="btn btn-outline" type="submit">Enroll Now</button>
												<button type="button" class="btn btn-outline;" style="margin-left:65px;">{{$v->total_seat}} SEAT LEFT </button>
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
                            <!-- end: Post item-->
						<?php }?>
							@endforeach
							
                        </div>
                      
                    </div>
                    
                </div>
            </div>
        </section>

<!--End Workshop Section-->
@include('front.common.footer')
<script>
$("#course_type").change(function(){
	var val = $(this).val();
	if(val =='CBSE Courses'){
		$("#classes").prop("disabled",false);
	}else{
		$("#classes").prop("disabled",true);
	}
});
</script>