<?php
include 'lib/Session.php';
 Session::init();
include('includes/header1.php');
include('includes/menu.php');
?>
<div style="width: 100%;">
	 <iframe src="https://www.google.com/maps/embed?place/National+Institute+of+Science+and+Technology+(Autonomous)/@19.1975015,84.7461996,17z/data=!4m5!3m4!1s0x3a3d43650f924b4f:0x821828cd629bb075!8m2!3d19.1975015!4d84.7483883" height="300" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div style="margin-top: -4px;" class="container bg-light-gray">
 <div class="main-content">
  <div class="featured-content">
     <div class="row-fluid">
     <div class="span8 offset3">
       <h2 style="margin-bottom: 20px;">Contact Us</h2>
  <?php
  if(($_SERVER['REQUEST_METHOD']=='POST')){
    $msg = $us->contactus($_POST);
}
  ?>
         <form action="" method="POST">
          <div class="form-group hgad" style="margin-top: 0px;">
            <label style="margin-right: 56px;">Your Name: </label>
            <input type="text" class="form-control adgrfs" name="name" required="1" placeholder="Your Name Please">
          </div>
          <div class="form-group hgad">
            <label style="margin-right: 56px;">Your Email: </label>
            <input type="text" class="form-control adgrfs" name="email"  placeholder="your Email Please" required="1">
          </div>
          <div class="form-group hgad">
            <label style="margin-right: 40px;">Your Subject: </label>
            <input type="text" class="form-control adgrfs" name="subject" placeholder="Subject Please" required="1">
          </div>
          <div class="form-group hgad">
            <label style="margin-right: 65px;">Your Message: </label>
           <textarea name="body" class="form-control" rows="10" placeholder="Message Please"></textarea>
          </div>
          <button type="submit" class="btn btn-info esb1">Send Message</button>
      </form>
       <?php 
        if(isset($msg)){
         echo $msg;
       } ?>
     </div>
    </div>
   </div>
  </div>
</div>

<?php
include('includes/footer.php');
?>