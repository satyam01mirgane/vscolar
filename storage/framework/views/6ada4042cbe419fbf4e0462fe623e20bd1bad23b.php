<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--  Header Menu start -->
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- SECTION IMAGE FULLSCREEN -->
<section class="fullscreen slide" 
         style="background-image: url('<?php echo e(asset('assets/images/bg-image.jpeg')); ?>'); 
                position: relative; 
                background-size: cover; 
                background-position: center;">

    <!-- Overlay -->
    <div style="position: absolute; 
                top: 0; 
                left: 0; 
                width: 100%; 
                height: 100%; 
                background-color: rgba(0, 0, 0, 0.5); 
                z-index: 1;">
    </div>

    <!-- Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div class="container-fullscreen">
            <div class="text-left">
                <div class="text-light">
                    <h1 class="text-uppercase text-sm">
                        <span style="color:#FF4A11 !important;">Empowering</span> Knowledge,<br>
                        <span style="color: #FF4A11 !important;">Inspiring</span> Growth
                    </h1>
                    <a href="<?php echo e(url('about-us')); ?>" class="btn btn-red">Know More</a>
                </div>
            </div>
        </div>
    </div>
</section>






		 
         
        
		<!-- SERVICES -->
        <section>
            <div class="container">
               
                <div class="row">
					<?php $__currentLoopData = service_list(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6" data-animate="fadeInUp" data-animate-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="<?php echo e($v->image); ?>"></i></a>
                            </div>
                            <h3><?php echo e($v->name); ?></h3>
                            <p><?php echo e($v->description); ?></p>
                        </div>
                    </div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </section>
        <!-- end: SERVICES -->
		<!-- IMAGE BLOCK -->
        <section id="image-block" class="image-block no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6" style="height:609px; 50% 50% / cover no-repeat;">
					<iframe style=" border-radius: 25px;" width="560" height="450" src="<?php echo e(app_setting()->about_videourl); ?>" title="YouTube video player" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>		
                    </div>
                    <div class="col-lg-6">
                        <div class="heading-text heading-section">
                            <span>About us</span>
							<h2> VIEF SCHOLAR is your ticket to the Learning Revolution</h2>
                            <span class="lead"><?php echo e(app_setting()->site_description); ?>

                            </span>
                        </div>
                        <a href="<?php echo e(url('workshops')); ?>" class="btn btn-outline btn-dark"><span>START EXPLORING!</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: IMAGE BLOCK -->
		
		<?php echo $__env->make('front.home-page-common.home-workshop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<?php echo $__env->make('front.home-page-common.home-course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		 <!-- Parallax -->
        <section class="p-t-200 p-b-200" data-bg-video="<?php echo e(asset('assets/video/lightbulb.mp4')); ?>">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 center text-left text-light">
					<p> VIEF SCHOLAR TV</p>
                        <h1>Bored of prime and flix, <br>let me show you a mix!</h1>
                        <a href="https://www.youtube.com/@ VIEF SCHOLAR " class="btn btn-light btn-outline btn-roundeded">Open Playlists</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Parallax -->
		<!-- Revolution Slider -->
		  
        <!-- end: Revolution Slider-->
		
		 <!-- BLOG -->
        <?php echo $__env->make('front.home-page-common.home-blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<section id="section3" class="p-t-100 p-b-100" data-bg-parallax="<?php echo e(asset('assets/images/banner1.jpg')); ?>"><div class="parallax-container scrolly-invisible img-loaded" data-bg="<?php echo e(asset('assets/images/banner1.jpg')); ?>" data-velocity="-.140" style="background: url(<?php echo e(asset('assets/images/banner1.jpg')); ?>) 0px;" data-ll-status="loaded"></div><div class="parallax-container scrolly-invisible img-loaded" data-bg="<?php echo e(asset('assets/images/top-courses-banner1.jpg')); ?>" data-velocity="-.140" style="background: url(<?php echo e(asset('assets/images/banner1.jpg')); ?>) 0px;" data-ll-status="loaded"></div>
            <div class="container xs-text-center sm-text-center text-light">
                <div class="row">
                    <!-- <div class="col-lg-3">
                        <div class="text-center">
                            <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>Workshop</p>
                        </div>
                    </div> -->
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="counter text-lg"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"><?php echo e(app_setting()->total_enrollments); ?></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>Total Enrollments</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center">
                            <div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true">114</span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>Seat Left</p>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="text-center">
                            <div class="counter text-lg"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true">14825</span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>Happy Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: BLOG -->
		<section id="page-content">
            <div class="container">
                <div class="row">
                    <div class="content col-lg-12">
                        <h2>Placement Partners</h2>
                        <div>
                            <ul class="grid grid-5-columns">
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/1.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/2.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/3.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/4.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/5.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/5.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/4.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/3.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/2.png')); ?>"></a>
                                </li>
                                <li>
                                    <a href="#"><img alt="" src="<?php echo e(asset('assets/images/clients/1.png')); ?>"></a>
                                </li>
                            </ul>
                        </div>
                       
                        <!--Image Carousel -->
                    </div>
						</div>
            </div>
        </section>
		
		<!--<div class="container">		-->
		<!--	<p>Acabuddy Scholarship</p>-->
		<!--</div>-->
		
		
		
		<section id="section3" style="padding-top:5px !important;padding-bottom:10px !important";>
            <div class="container">
                <div class="row">
				 <div class="heading-text heading-section">
                      <span class="lead">How are we different from others?</span>
					  <h2>Here’s how can differentiate</h2>
                  </div>
                    <div class="col-lg-5">
                        <img alt="real-estate" src="<?php echo e(asset('assets/images/skill.jpg')); ?>" class="img-fluid m-b-10">
                    </div>
                    <div class="col-lg-7">
						<!--<h3>Research & Discovery</h3>-->
                        <h2 class="text-medium">Skill enhancement:-</h2>
                        <p>Tired seeing everyone offering you the same course? What if we offer you personality builders as well along with it? You want it, we got it!</p>
						<div class="clear"></div>
                        <a class="read-more" href="<?php echo e(url('services')); ?>">Check Out Wings <i class="fa fa-arrow-right"></i></a>
					</div>
					</div>

            </div>
        </section>
		
		<section id="section3"style="padding-top:5px !important;padding-bottom:10px !important";>
            <div class="container">
                <div class="row">
				
				<div class="col-lg-7">
						<!--<h3>Shortlisting</h3>-->
                        <h2 class="text-medium">Growth opportunity:-</h2>
                        <p>We believe in give and take for both! You give us your time, we give you the personal attention of our mentors! We can both settle at that.</p>
						<div class="clear"></div>
                        <a class="read-more" href="<?php echo e(url('workshops')); ?>">Enhance network<i class="fa fa-arrow-right"></i></a>
                    </div>
					<div class="col-lg-5">
                        <img alt="real-estate" src="<?php echo e(asset('assets/images/Networking-opportunity.jpg')); ?>" class="img-fluid m-b-10">
                    </div>
                </div>

            </div>
        </section>
		
		<section id="section3" style="padding-top:5px !important;padding-bottom:10px !important";>
            <div class="container">
                <div class="row">
				<div class="col-lg-5">
                        <img alt="real-estate" src="<?php echo e(asset('assets/images/community-building.jpg')); ?>" class="img-fluid m-b-10">
                    </div>
				<div class="col-lg-7">
						<!--<h3>Tests</h3>-->
                        <h2 class="text-medium">Community building:-</h2>
                        <p>Wonder who you can rant together with? Worry not! We help you build your community with like-minded people to give you a 360 degree approach.</p>
						<div class="clear"></div>
                        <a class="read-more" href="<?php echo e(url('courses')); ?>">Explore Courses<i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </section>
        
        
         <!-- Modal -->
         <div id="modalShop" class="modal modal-auto-open no-padding" data-delay="3000" style="max-width: 700px;">
            <div class="row">
                
                <div class="col-md-6">
                    <div class="p-40 p-xs-20">
                    <form class="widget-contact-form yr-popupForm" data-success-message-delay="30000"  role="form" method="post">
                        <h3>Get Free Consultation</h3>
						<span id="cmsg" style="color:green;display:none;">Thanks! your record submitted.</span>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input type="text" name="widget-contact-form-name" id="cname" class="form-control name" placeholder="Enter your Name">
								<span id="emsgnm" style="color:red;display:none;"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="email" name="widget-contact-form-email" id="cemail" class="form-control email" placeholder="Enter your Email">
								<span id="emsgem" style="color:red;display:none;"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="subject">Contact No</label>
                                <input type="number_format" name="widget-contact-form-subject" onkeypress="return isNumberKey(event)" maxlength="10" id="cphone" class="form-control" placeholder="Your Phone no...">
								<span id="emsgph" style="color:red;display:none;"></span>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="message">Message</label>
                            <textarea type="text" name="widget-contact-form-message" rows="3" class="form-control" placeholder="Enter your Message"></textarea>
                        </div> -->
                    
                        <button class="btn btn-primary" type="button" id="comment"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </form>
                    </div>
                </div> 
                
                <a href= "https:// VIEF SCHOLAR .in/events" class="col-md-6 d-none d-sm-block no-padding" style="background: transparent url(<?php echo e(asset('assets/images/award.png')); ?>) no-repeat scroll center top / cover; height:470px;">
                   </a>
                   

                                    
                </div>
            </div>
        </div>
        <!--end: Modal -->
		<?php echo $__env->make('front.home-page-common.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var host = '<?php echo URL::to('/') ?>';

function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}

$('#comment').on('click', function(e) {
       e.preventDefault(); 
       var name = $('#cname').val();
       var email = $('#cemail').val();
       var contact = $('#cphone').val();
	   if(name ==''){
		  $("#emsgnm").text('Please enter your name.').show(); 
		  $('#cname').focus();
		  return false;
	   }else{
		   $("#emsgnm").text('').hide(); 
	   }
	   if(email ==''){
		  $('#cemail').focus();
		  $("#emsgem").text('Please enter your email.').show(); 
		  return false;
	   }else{
		   if(!ValidateEmail(email)){
			   $('#cemail').focus();
			   $("#emsgem").text('Please enter valid email.').show(); 
				return false;
		   }
		   $("#emsgem").text('').hide(); 
	   }
	   
	   if(contact ==''){
		  $('#cphone').focus();
		  $("#emsgph").text('Please enter your phone.').show(); 
		  return false;
	   }else{
		   if(contact.length !=10){
			   $('#cphone').focus();
			   $("#emsgph").text('Please enter 10 digit only.').show(); 
			   return false;
		   }
		   $("#emsgph").text('').hide(); 
	   }
       $.ajax({
           type: "POST",
           url: host+'/save-popupdata',
           data: {name:name, email:email, contact:contact},
           success: function( msg ) {
			   var obj = $.parseJSON(msg);
               if(obj.status=='success'){
				   $("#cmsg").show();
					setCookie();
				   setTimeout(function() {
					    $(".mfp-close").trigger("click");
				   }, 3000);
			   }else{
				   $("#cmsg").hide();
			   }
           }
       });
   });
   
   function ValidateEmail(mail) 
	{
	 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
	  {
		return (true)
	  }
		return (false)
	}
   
	function setCookie() { 
		  var now = new Date();
		  var time = now.getTime();
		  var expireTime = time + 3600 * 1000 * 24 * 365 * 10;
		  now.setTime(expireTime);
		  document.cookie = 'acdpopup=ok;expires='+now.toUTCString()+';path=/';
		  //console.log(document.cookie);  // 'Wed, 31 Oct 2012 08:50:17 UTC'
	}
	function getCookie(name) {
		// Split cookie string and get all individual name=value pairs in an array
		var cookieArr = document.cookie.split(";");
		
		// Loop through the array elements
		for(var i = 0; i < cookieArr.length; i++) {
			var cookiePair = cookieArr[i].split("=");
			
			/* Removing whitespace at the beginning of the cookie name
			and compare it with the given string */
			if(name == cookiePair[0].trim()) {
				// Decode the cookie value and return
				return decodeURIComponent(cookiePair[1]);
			}
		}
		
		// Return null if not found
		return null;
	}
	
	var getdata = getCookie('acdpopup');
	if(getdata !='ok'){
		//$('#modalShop').modal('show');
	}
</script>

   <?php /**PATH D:\New folder\htdocs\RUN\resources\views/front/pages/home.blade.php ENDPATH**/ ?>