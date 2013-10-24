<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contact Us | Builder in Knutsford, Hale and Altrincham | Nyland Construction</title>
	<meta name="description" content="Please feel free to contact us if you would like to discuss your home improvment plans." />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57x57.png">
	<link rel="icon" sizes="16x16" type="image/png" href="assets/ico/favicon16.png">
	<link rel="icon" sizes="24x24" type="image/png" href="assets/ico/favicon24.png">
	<link rel="icon" sizes="32x32" type="image/png" href="assets/ico/favicon32.png">
	<link rel="icon" sizes="48x48" type="image/png" href="assets/ico/favicon48.png">
	<link rel="icon" sizes="64x64" type="image/png" href="assets/ico/favicon64.png">
	<link rel="icon" sizes="128x128" type="image/png" href="assets/ico/favicon128.png">
	<link rel="icon" sizes="256x256" type="image/png" href="assets/ico/favicon256.png">
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "f6cd0b32-65f2-4a00-b9c6-6e410baf36b7", doNotHash: false, doNotCopy: false, hashAddressBar: false,});</script>
	<?php include_once("includes/analyticstracking.php"); ?>

</head>
<body id="page">
<div id="wrapper">



	<div id="header">

		<div id="hleft">
		<a href="/"><img src="assets/logo.gif" alt="" /></a>
		</div>

		<div id="hright">
		<a href="tel:01925604354"><img src="assets/telephone.gif" alt="Telephone 01925 604354" /></a><br />
		<ul id="menu" class="">
			<li><a href="/">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="contact.php" class="active">Contact</a></li>
		</ul>
		</div>

	</div>




	<div id="intro">
	<img src="assets/contact.jpg" alt="Bespoke Building &amp; Joinery" />
	</div>
	<img src="assets/shadow.jpg" alt="" />




	<div id="content">

		<div id="left">

			<h1>Contact Us</h1>

			<?php

			if (isset($_POST['Submit'])) {

					require_once('includes/recaptchalib.php');
					$privatekey = "6LelzuQSAAAAAEVYFne-HdFZlGruZXu2L9g6XFeM";
					$resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

					if (!$resp->is_valid) {
						// CAPTCHA was entered incorrectly
						echo "<h2>Sorry, the reCAPTCHA verification code wasn't entered correctly.</h2>";
						echo "<h2>Please go back and answer the security question at the bottom of the form again.</h2>";
						echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
					  } else {
						// Successful verification
						$headers = "From: noreply@nylandconstruction.co.uk\r\n" . "X-Mailer: php";
						$to = "enquiries@nylandconstruction.co.uk";
						$subject = "You have a new Nyland Construction website enquiry!";
						unset($_REQUEST['recaptcha_challenge_field'], $_REQUEST['recaptcha_response_field'], $_REQUEST['Submit']);
						foreach ($_REQUEST as $key => $val) {
						$body .= $key . " : " . $val . "\r\n";
						}
						mail($to, $subject, $body, $headers);
						echo "<h2>Thank you, your message has been sent.</h2>";
						echo "<p>A member of our sales team will be in touch with you as soon as possible.</p>";
						echo "<p><a href='/'>Click here to go back to the home page.</a></p>";
					  }

			} else {

			?>
				 <script type="text/javascript">
				 var RecaptchaOptions = {
					theme : 'white'
				 };
				 </script>
				<h2>You can either contact us using the details below or you can use our contact form:</h2>

				<form id="form" name="form" method="post" action="contact.php">
			    <?php
					require_once('includes/recaptchalib.php');
					$publickey = "6LelzuQSAAAAACUrhcAJS8oPCvQMQZZv6H3mccQP";
		        ?>
				<table width="100%" border="0" cellspacing="0" cellpadding="5">
				<tr><td>Name</td><td align="right"><input name="Name" type="text" id="Name" class="input" /></td></tr>
				<tr><td>Address</td><td align="right"><textarea name="Address" id="Address" class="input" rows="6"></textarea></td></tr>
				<tr><td>Email</td><td align="right"><input name="Email" type="text" id="Email" class="input" /></td></tr>
				<tr><td>Telephone</td><td align="right"><input name="Telephone" type="text" id="Telephone" class="input" /></td></tr>
				<tr><td>Message</td><td align="right"><textarea name="Message" id="Message" class="input" rows="10"></textarea></td></tr>
				<tr><td colspan="2"><?php echo recaptcha_get_html($publickey); ?></td></tr>
				<tr><td/><td align="right"><input type="submit" name="Submit" id="submit" value="Submit" /></td></tr>
				</table>
				</form>

				<p><strong>Nyland Construction</strong><br />
				5 Hazelwood Mews<br />
				Grappenhall<br />
				Warrington<br />
				Cheshire<br />
				WA4 2YG</p>

				<p><strong>Telephone</strong>: 01925 604354<br />
				<strong>Fax</strong>: 01925 604354<br />
				<strong>Mobile</strong>: 07929 888 959</p>

		  <p><a href="mailto:enquiries@nylandconstruction.co.uk">enquiries@nylandconstruction.co.uk</a></p>
			<div id="social">
				<span class="st_twitterfollow_vcount" displayText="Twitter Follow" st_username="NylandConstruct"></span>
				<span class="st_fblike_vcount" displayText="Facebook Like" st_url="http://www.facebook.com/NylandConstruct"></span>
				<span class="st_plusone_vcount" displayText="Google +1" st_url="https://plus.google.com/117453183467690631137"></span>
				<span class="st_email_vcount" displayText="Email"></span>
			</div>
			<?php } ?>

		</div>

		<div id="right">
			<a href="http://www.fmb.org.uk/" target="_blank"><img class="fmb" src="assets/img_trans.gif" alt="Federation of Master Builders" /></a>
			<a href="http://www.niceic.com/" target="_blank"><img class="niceic" src="assets/img_trans.gif" alt="NIC EIC" /></a>
			<a href="http://www.gassaferegister.co.uk/" target="_blank"><img class="gassafe" src="assets/img_trans.gif" alt="Gas Safe" /></a>
			<a href="http://www.velux.co.uk/" target="_blank"><img class="velux" src="assets/img_trans.gif" alt="Velux" /></a>
			<a href="http://www.vipinstallers.com/" target="_blank"><img class="velux-installer-partnership" src="assets/img_trans.gif" alt="Velux Installer Partnership" /></a>
		</div>

	</div>
	<img src="assets/shadow.jpg" alt="" />



	<div id="footer">
	&copy;<?php echo date("Y"); ?> <a href="/"title="Nyland Construction">Nyland Construction</a> |
	Site powered by <a href="http://www.emerl.co.uk/" title="Site powered by eMerl">eMerl</a> |
	<a href="#">Top of Page</a>
	</div>



</div>
</body>
</html>
