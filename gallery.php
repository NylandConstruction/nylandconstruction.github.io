<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Nyland Construction | Builders Warrington</title>
	<meta name="Description" content="Nyland Construct are a builders in Warrington. Call today for a quick quotation." />
	<link rel="icon" href="assets/icon.ico" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<link rel="stylesheet" type="text/css" href="assets/colorbox.css" />
	<script type="text/javascript" src="assets/jquery.js"></script>
	<script type="text/javascript" src="assets/colorbox.js"></script>
	<script type="text/javascript">$(document).ready(function(){ $("a[rel='cb1']").colorbox(); });</script>



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
			<h1>Gallery</h1>
			<h2>Please select an image to view:</h2>
			<?php
			$path = "gallery/";
			$dir_handle = @opendir($path) or die("Unable to open folder");
			while (false !== ($file = readdir($dir_handle))) {
				if(ereg("(.*)\.(jpg|jpeg|bmp|png|gif|JPG|JPEG|BMP|PNG|GIF)", $file)){
				
					echo "<div class='gallery'>\n";
					echo "<a href='gallery/$file' rel='cb1' title=''>\n";
					echo "<img src='gallery/$file' />\n";
					echo "</a></div>\n\n";
					
				}
			}
			closedir($dir_handle);
			?>
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