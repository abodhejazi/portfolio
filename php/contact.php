<?php require ('../includes/header.php');?>
<?php require ('../includes/leftnav.php');?>
  <!-- Contact Section -->
               <div class="col-sm-8 text-left"> 
                <h2 class="section-heading">Contact Me</h2>
                <h3 class="section-subheading text-muted" style="color:yellow ">Feel free to contact me.</h3>
           
                <form  name="contactform" method="post" action="contact_email_action.php" novalidate>
                    <div class="row"> 
                    
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" name="first_name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" name="telephone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" name="comments" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" name="Submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
 <?php echo "<h3><font color=black>".$_SESSION['message']."</font></h3>";
 unset($_SESSION['message']);
        ?>

    
                </form>
  
            </div>
 <?php require ('../includes/rightnav.php');?>
<?php require ('../includes/footer.php');?>


