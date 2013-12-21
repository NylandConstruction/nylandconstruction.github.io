<?php
// contact.php
// Set the page title and Google meta description tags:
$title = 'Contact Us | Builder in Knutsford, Hale and Altrincham';
$metadescription = 'Please feel free to contact us if you would like to discuss your home improvment plans.';
?>

<?php
// Header
require_once('includes/header.inc.php');
?>

	</head>

	<body id="page">
		<div id="wrapper">
			<div id="header">
				<div id="hleft">
				<a href="/"><img src="/assets/logo.gif" alt="" /></a>
				</div>
				<div id="hright">
			<a href="tel:01925604354"><img src="/assets/telephone.gif" alt="Telephone 01925 604354" /></a><br />
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
			<img src="/assets/contact.jpg" alt="Bespoke Building &amp; Joinery" />
			</div>
			<img src="/assets/shadow.jpg" alt="" />
			<div id="content">
				<div id="left">
					<h1>Contact Us</h1>
					<?php
					if (isset($_POST['Submit'])) {

						require_once('includes/recaptchalib.inc.php');
						$privatekey = "6LcJROkSAAAAAIPP5MAxwM9x_Ou1xWnbanTL_o2R";
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
							$headers = "From: no-reply@nylandconstruction.co.uk\r\n" . "X-Mailer: php";
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
						require_once('includes/recaptchalib.inc.php');
						$publickey = "6LcJROkSAAAAAJGv8tYjRwz7zHfmNzV3yS_7EDJ-";
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
					<?php
					// Social media
					require_once('includes/social.inc.php');
					?>
					<?php } ?>
				</div>
				<?php
				// Partner logos
				require_once('includes/partnerlogos.inc.php');
				?>
			</div>
			<img src="/assets/shadow.jpg" alt="" />
			<?php
			// Footer
			require_once('includes/footer.inc.php');
			?>
		</div>
	</body>
</html>
