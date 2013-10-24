<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Our Portfolio Gallery | Construction in Appleton, Stretton and Walton | Nyland Construction</title>
	<meta name="description" content="View our portfolio of previous projects, completed on time and on budget by Nyland Construction." />
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
	<link rel="stylesheet" type="text/css" href="assets/colorbox.css" />
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script type="text/javascript" src="assets/colorbox.js"></script>
	<script type="text/javascript">$(document).ready(function(){ $("a[rel='cb1']").colorbox(); });</script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "f6cd0b32-65f2-4a00-b9c6-6e410baf36b7", doNotHash: false, doNotCopy: false, hashAddressBar: false,});</script>
	<?php include_once("analyticstracking.php"); ?>

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
			<li><a href="gallery.php" class="active">Gallery</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
		</div>

	</div>




	<div id="intro">
	<img src="assets/gallery.jpg" alt="Bespoke Building &amp; Joinery" />
	</div>
	<img src="assets/shadow.jpg" alt="" />




	<div id="content">

		<div id="left">
			<h1>Our Portfolio Gallery</h1>
			<h2>Please select an image to view:</h2>
			<?php
			$path = "gallery/images/";
			$dir_handle = @opendir($path) or die("Unable to open folder");
			while (false !== ($file = readdir($dir_handle))) {
				if(ereg("(.*)\.(jpg|jpeg|bmp|png|gif|JPG|JPEG|BMP|PNG|GIF)", $file)){

					echo "<div class='gallery'>\n";
					echo "<a href='gallery/images/$file' rel='cb1' title=''>\n";
					echo "<img src='gallery/thumbnails/$file' />\n";
					echo "</a></div>\n\n";

				}
			}
			closedir($dir_handle);
			?>
			<br style="clear:both;"/>
			<div id="social">
				<span class="st_twitterfollow_vcount" displayText="Twitter Follow" st_username="NylandConstruct"></span>
				<span class="st_fblike_vcount" displayText="Facebook Like" st_url="http://www.facebook.com/NylandConstruct"></span>
				<span class="st_plusone_vcount" displayText="Google +1" st_url="https://plus.google.com/117453183467690631137"></span>
				<span class="st_email_vcount" displayText="Email"></span>
			</div>

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
