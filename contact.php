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
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-38684067-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>


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

				if ($_POST['Question'] == "2") {
					$headers = "From: noreply@nylandconstruction.co.uk\r\n" . "X-Mailer: php";
					$to = "enquiries@nylandconstruction.co.uk";
					$subject = "You have a new Nyland Construction website enquiry!";
					foreach ($_REQUEST as $key => $val) {
					$body .= $key . " : " . $val . "\r\n";
					}
					mail($to, $subject, $body, $headers);
					echo "<h2>Thank you, your message has been sent.</h2>";
					echo "<p>A member of our sales team will be in touch with you as soon as possible.</p>";
				} else {
					echo "<h2>Sorry, please go back and answer the security question at the bottom of the form.</h2>";
					echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
				}

			} else {

			?>

				<h2>You can either contact us using the details below or you can use our contact form:</h2>

				<form id="form" name="form" method="post" action="contact.php">
				<table width="100%" border="0" cellspacing="0" cellpadding="5">
				<tr><td>Name</td><td><input name="Name" type="text" id="Name" class="input" /></td></tr>
				<tr><td>Address</td><td><textarea name="Address" id="Address" class="input" rows="6"></textarea></td></tr>
				<tr><td>Email</td><td><input name="Email" type="text" id="Email" class="input" /></td></tr>
				<tr><td>Telephone</td><td><input name="Telephone" type="text" id="Telephone" class="input" /></td></tr>
				<tr><td>Message</td><td><textarea name="Message" id="Message" class="input" rows="10"></textarea></td></tr>
				<tr><td>1 + 1 =</td><td><input name="Question" type="text" id="Question" class="input" value="Please answer the security question here" /></td></tr>
				<tr><td>&nbsp;</td><td><input type="submit" name="Submit" id="submit" value="Submit" /></td></tr>
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
