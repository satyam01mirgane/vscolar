@include('front.common.header')
@include('front.common.navbar')

<!-- Page title -->
<section id="page-title" data-bg-parallax="{{asset('assets/images/course.png')}}">
	<div class="container">
		<div class="page-title" style="min-height:150px;">
			<!--<h1>{{$course_details->name}}</h1>-->
		</div>
	</div>
</section>
<!-- end: Page title -->
<section id="page-content">
            <div class="container">
                <div class="row">
                <div class="content col-lg-12">  
                    <div class="heading-text heading-section">
                        <h2>{{$course_details->name}}</h2>
                        <span class="lead"><?php echo $course_details->short_description;?></span>
                    </div>
                </div>
                    <div class="content col-lg-6">                     
						<!--Post Carousel -->				
                        <div class=" yr-carousel">
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="row">
                                    <div class="col-md-5">
                                    <div class="post-image">
                                        <a href="#">
                                        <img alt="" src="{{asset($course_details->image)}}"></a>
                                    </div>
                                    </div>
                                    <div class="col-md-7">
                                    <div class="post-item-description pt-0">
                                        <h2><a href="#">{{$course_details->name}}</a></h2>
                                        <p>{{$course_details->name}}</p>
                                        <ul class="list_will_get">
                                            <ul class="list_will_get">
												@if(isset($course_details->edureka_certificates))
													<li><i class="fa fa-certificate"></i> {{$course_details->edureka_certificates}}</li>
												@endif
												@if(isset($course_details->hrs_live_classes))
													<li><i class="fa fa-clock"></i> {{$course_details->hrs_live_classes}}</li>
												@endif
												@if(isset($course_details->weekend_classes))
													<li><i class="fa fa-calendar-check-o"></i> {{$course_details->weekend_classes}}</li> 
												@endif
											</ul>
                                        </ul>                                        
                                    </div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-end">
										@if(isset($course_details->slots))
											@php
												$slots = explode(',',$course_details->slots);
											@endphp
											<select class="form-control btn yr-select">
												<option selected>Select Slot</option>
												@foreach($slots as $k=>$v)
												<option value="{{$v}}">{{$v}}</option>
												@endforeach
											</select>
										@endif
										@if($course_details->total_seat > 0)
                                        <button type="button" class="btn btn-outline;">{{$course_details->total_seat}} SEAT LEFT </button>
										@else
										<button type="button" class="btn btn-outline;">SEAT FULL </button>	
										@endif
                                        
										@if(!in_array($course_details->id,cartproduct()))
											@if($course_details->total_seat > 0)
										<form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
											@csrf
											<input type="hidden" value="{{ $course_details->id }}" name="id">
											<input type="hidden" value="{{ $course_details->name }}-Course" name="name">
											<input type="hidden" value="{{$course_details->price}}" name="price">
											<input type="hidden" value="{{ $course_details->image }}"  name="image">
											<input type="hidden" value="1" name="quantity">
											<button type="submit" class="btn btn-outline;" style="margin-right:8px;margin-left:8px;">Enroll Now &nbsp;</button>
										</form>
										 @endif
										@else
											<a href="{{url('cart')}}"><button type="button" class="btn btn-outline;">In Cart</button></a>
										@endif
										
                                        <button type="button" class="btn btn-outline; ">{{$course_details->price - $course_details->discount_value}}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="content col-lg-6">                     
						<!--Post Carousel -->				
                        <div class="card">
                        <div class="card-body">
                            <!-- Post item-->
                            <h3>Introduction </h3>
                            <p><?php echo $course_details->full_description;?></p>
                        </div>
                        </div>
                    </div>
                </div>
                 <!-- Module Start -->
                <div class="row pt-5">
                    <div class="content col-lg-8">
                        <h3>Week-wise Modules</h3>
                        <ul class="list-group list-group-numbered">
							<?php
							if(isset($course_details->learning_modules)){
							$arr = explode("\r\n", trim($course_details->learning_modules));
							for ($i = 0; $i < count($arr); $i++) {?>
								<li class="list-group-item">{{$arr[$i]}}</li>
                            <?php }}?>
                        </ul>
                    </div>
                    <div class="content col-lg-4">
                    <img alt="" src="{{asset('assets/images/gif/course-1.jpg')}}" class="rounded-3 w-100">
                    </div>
                </div>
                 <!-- end: Module -->
            </div>
        </section>
		 <!-- Section 2 Start -->
        <section id="page-content" class="background-grey no-padding">
            <div class="container">
            <div class="row pt-5">
                <div class="content col-lg-6">
                    <h3>Perks of Choosing VIEF SCHOLAR course</h3>
                    <p>
                    <?php echo nl2br($course_details->perks_of_choosing);?> 
                    </p>
                </div>
                <div class="content col-lg-6">
                <img alt="" src="{{asset('assets/images/gif/course-2.png')}}" class="rounded-3 w-100">
                </div>                
            </div>
            <!-- Part 2 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Tools you will learn</h3>
                    <p>
                    <?php echo nl2br($course_details->tools_you_will_learn);?>
                    </p>
                </div>
            </div>
             <!--end: Part 2 -->
             <!-- Part 3 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Placement assistance</h3>
                    <p>
                   <?php echo nl2br($course_details->placement_assistance);?>
                    </p>
                </div>
            </div>
             <!--end: Part 3 -->
             <!-- Part 4 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>Career Opportunities</h3>
                    <p>
                    <?php echo nl2br($course_details->career_counselling);?>
                    </p>
                </div>
            </div>
             <!--end: Part 4 -->
             <!-- Part 5 -->
            <div class="row">
                <div class="col-lg-12">
                    <h3>What are we offering</h3>
                    <p>
                    <?php echo nl2br($course_details->what_we_have);?>
                    </p>
                </div>
            </div>
             <!--end: Part 5 -->
            </div>
        </section>
        <!-- end:  Section 2 -->
		<!-- Section 3 Start -->
        <section id="page-content" class="liveProjecct">
            <div class="container">
            <div class="row">
            <h3>Live Projects & Case Studies</h3>
            <div class="content col-lg-12">
            <p><?php echo nl2br($course_details->live_projects);?>  
                    </p>
            </div>
            </div>

            <div class="row pt-3">
            <h3>Quiz & Win</h3>
                <div class="content col-lg-6">
                <img alt="" src="{{asset('assets/images/gif/course-5.jpg')}}" class="rounded-3 w-100">
                </div> 
                <div class="content col-lg-6">
                    <div class="card"> 
                    <div class="card-body">                   
                    <p>
                    <?php echo nl2br($course_details->quiz_win);?>    
                    </p>
                    </div></div>
                </div>         
            </div>
            <!-- Part 2 -->
            <div class="row">
                <div class="content col-lg-12">
                    <h3>Test your learning.</h3>
                     <ul class="list-group list-group-numbered">
							<?php
							if(isset($course_details->test_your_learning)){
							$arr = explode("\r\n", trim($course_details->test_your_learning));
							for ($i = 0; $i < count($arr); $i++) {?>
								<li class="list-group-item">{{$arr[$i]}}</li>
                            <?php }}?>
                        </ul>
                </div>
            </div>
             <!--end: Part 2 -->  
            </div>
        </section>
        <!-- end:  Section 3 -->
		@include('front.home-page-common.testimonial')
		
		<section id="page-content" class="background-grey no-padding">
            <div class="container">
             
            <div class="row pt-5">
            <h3>Sample Certificate</h3>                 
                <div class="content col-lg-6">                    
                    <p>
                    <?php echo nl2br($course_details->sample_certificate);?>     
                    </p>
                </div>
                <div class="content col-lg-6">
                 <img alt="" src="{{asset($course_details->sample_certificate_image)}}" class="rounded-3 w-100">
                </div>         
            </div>
            <!-- Part 2 -->
            <div class="row">
            <h3>FAQ</h3>
                <div class="content col-lg-7">
                <!--start Accordion  -->
						<div class="accordion fancy radius clean">
                             <div class="ac-item ac-active">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i>{{$course_details->question1}}</h5>
                                 <div class="ac-content ac-active">{{$course_details->answer1}}</div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i>{{$course_details->question2}}</h5>
                                 <div class="ac-content ac-active">{{$course_details->answer2}}</div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i>{{$course_details->question3}}</h5>
                                 <div class="ac-content ac-active">{{$course_details->answer3}}</div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i>{{$course_details->question4}}</h5>
                                 <div class="ac-content ac-active">{{$course_details->answer4}}</div>
                             </div>
                         </div>
						 <div class="accordion fancy radius clean">
                             <div class="ac-item">
                                 <h5 class="ac-title"><i class="fa fa-arrow-right"></i>{{$course_details->question5}}</h5>
                                 <div class="ac-content ac-active">{{$course_details->answer5}}</div>
                             </div>
                         </div>
                                   <!--end: Accordion  -->
                <div class="content col-lg-5">
                <img alt="" src="{{asset('assets/images/gif/course-4.jpg')}}" class="rounded-3 w-100">                    
                </div>
            </div>
             <!--end: Part 2 -->
             <!-- Part 3 -->
            <div class="row">
                <div class="content col-lg-12">
                  
                </div>
            </div>
             <!--end: Part 3 -->
            
            </div>
        </section>
<!--  -->
<!--End Workshop Section-->
@include('front.common.footer')