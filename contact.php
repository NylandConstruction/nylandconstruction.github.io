<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contact Us | Builder in Knutsford, Hale and Altrincham | Nyland Construction</title>
	<meta name="description" content="Please feel free to contact us if you would like to discuss your home improvment plans." />
	<link rel="icon" href="assets/icon.ico" />
	<link rel="stylesheet" type="text/css" href="style.css" />

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
		<img src="assets/telephone.gif" alt="Telephone 01925 604354" /><br />
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

			<?php } ?>

		</div>

		<div id="right">
		<img src="assets/fmb.gif" alt="FMB, NICEIC, Gas Safe" />
		</div>

	</div>
	<img src="assets/shadow.jpg" alt="" />



	<div id="footer">
	<a href="/"title="Nyland Construction">&copy;<?php echo date("Y"); ?> Nyland Construction</a> |
	<a href="http://www.emerl.co.uk/" title="eMerl Web Design and Hosting">Site powered by eMerl</a> |
	<a href="#">Top of Page</a>
	</div>



</div>
</body>
</html>
