<?php
// gallery.php
// Set the page title and Google meta description tags:
$title = 'Our Portfolio Gallery | Construction in Appleton, Stretton and Walton';
$metadescription = 'View our portfolio of previous projects, completed on time and on budget by Nyland Construction.';
?>

<?php
// Header
require_once('includes/header.inc.php');
?>

		<link rel="stylesheet" type="text/css" href="assets/colorbox.css" />

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
					<?php
					// Social media
					require_once('includes/social.inc.php');
					?>
				</div>
				<?php
				// Partner logos
				require_once('includes/partnerlogos.inc.php');
				?>
			</div>
			<img src="assets/shadow.jpg" alt="" />
			<?php
			// Footer
			require_once('includes/footer.inc.php');
			?>
		</div>
		<script type="text/javascript" src="assets/jquery.js"></script>
		<script type="text/javascript" src="assets/colorbox.js"></script>
		<script type="text/javascript">$(document).ready(function(){ $("a[rel='cb1']").colorbox(); });</script>
	</body>
</html>

