<?php echo $__env->make('front.common.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.common.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--Page Title-->
<section id="page-title" data-bg-parallax="<?php echo e(asset('assets/images/contact-us-2.jpg')); ?>">
            <div class="container">
                <div class="page-title" style="min-height:150px">
                    <!--<h1>Contact Us</h1>-->
                    
                </div>
            </div>
        </section>
<!--End Page Title-->
<!-- CONTENT -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Get In Touch</h3>
                        <p>Too excited to know us? So are we! If you wish to communicate with us for your queries, you can connect with us through the form attached below.</p>
                        <div class="m-t-30">
                            <form class="widget-contact-form" data-success-message-delay="40000" novalidate action="#" role="form" method="post">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" aria-required="true" name="widget-contact-form-name" required class="form-control required name" placeholder="Enter your Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="subject">Contact No</label>
                                        <input type="number_format" name="widget-contact-form-subject" required class="form-control required" placeholder="Your Phone no...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder="Enter your Message"></textarea>
                                </div>
                                <button class="btn btn-primary" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="text-uppercase">Address & Map</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <address>
                                    <strong> VIEF SCHOLAR Office</strong><br>
                                    <?php echo e(app_setting()->contact_address); ?><br>


                                    <abbr title="Phone">P:</h4> <?php echo e(app_setting()->contact_phone); ?>

									<abbr title="Email">E:</h4> <?php echo e(app_setting()->contact_email); ?>




                                </address>
                            </div>
                        </div>
                        <!-- Google Map -->
                        
<section>
  <!-- Google Map -->
  <div><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1754.9499284705041!2d77.3471993!3d28.3920925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdd4c787f3ae7%3A0xe95dc28928865f63!2s VIEF SCHOLAR %20llp!5e0!3m2!1sen!2sin!4v1688733536534!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</section>
                        <!-- end: Google Map -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end: Content -->

<?php echo $__env->make('front.common.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>

  var form = $('.contact__form'),
      message = $('.contact__msg'),
      form_data; // Success function

  function done_func(response) {
    message.fadeIn().removeClass('alert-danger').addClass('alert-success');
    message.text(response);
    setTimeout(function () {
      message.fadeOut();
    }, 2000);
    form.find('input:not([type="submit"]), textarea').val('');
  } // fail function


  function fail_func(data) {
    message.fadeIn().removeClass('alert-success').addClass('alert-danger');
    message.text(data.responseText);
    setTimeout(function () {
      message.fadeOut();
    }, 2000);
  }

  form.submit(function (e) {
    e.preventDefault();
    form_data = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: form.attr('action'),
      data: form_data
    }).done(done_func).fail(fail_func);
  });

    
</script>
<?php /**PATH /home/u104865507/domains/ VIEF SCHOLAR .in/public_html/resources/views/front/pages/contact-us.blade.php ENDPATH**/ ?>