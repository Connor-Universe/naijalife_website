<!DOCTYPE html>
<html lang="en">
<head>
	<title>NaijaLifeOfficial</title> 
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale=1.0>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="icon" href="img/favicon.png">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/navbar.css">
            <link rel="stylesheet" href="css/footer.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>
  <?php include('include/navbar.php');?>
  <?php include('include/contact_process.php');?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
				<span class="contact100-form-title">
					Contact Us <span class="color">!</span>
					<?php echo"$fail";?> 
					<?php echo"$success";?>
				</span>
				

				<label class="label-input100" for="first-name">Tell us your name *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input">
				<?php echo"$first_name_err";?>
					<input id="first-name" class="input100" type="text" name="first_name" placeholder="First name">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input">
				<?php echo"$last_name_err";?>
					<input class="input100" type="text" name="last_name" placeholder="Last name">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="email">Enter your email *</label>
				<?php echo"$email_err";?>
				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="eg example@youremail.com">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<?php echo"$subject_err";?>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="subject" placeholder="Eg. +234-9048318186">
					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="message">Message *</label>
				<?php echo"$message_err";?>
				<div class="wrap-input100 validate-input">
					<textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						Send Message
					</button>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('img/pic4.png');">
			<div class="whatsapp">
				<p class="head">Do You Want To Submit A Song/Album To NaijaLifeOfficial.com?</p>
				<p class="next">Send Us A Message On Whats Using the Link below!</p>
				<p><a href="https://wa.me/<?php echo"$whatsapp";?>" class="whatsapp"><i class="fa fa-whatsapp"></i></a></p>
			</div>
				</div>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>


<!--===============================================================================================-->

<!--===============================================================================================-->

<!--===============================================================================================-->
<script src="js/jquery-3.4.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->

<!--===============================================================================================-->
	
<!--===============================================================================================-->


	<script>		
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

		<?php include('include/footer.php');?>
</body>
</html>
