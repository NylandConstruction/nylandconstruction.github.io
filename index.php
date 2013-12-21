<?php
// index.php
// Set the page title and Google meta description tags:
$title = 'Builders in Warrington, Stockton Heath, Grappenhall and Appleton';
$metadescription = 'Nyland Construction are building contractors based in Warrington. Call today for a free quotation!';
?>

<?php
// Header
require_once('includes/header.inc.php');
?>

	</head>

	<body id="home">
		<div id="wrapper">
			<div id="header">
				<div id="hleft">
				<a href="/"><img src="assets/logo.gif" alt="" /></a>
				</div>
				<div id="hright">
					<a href="tel:01925604354"><img src="assets/telephone.gif" alt="Telephone 01925 604354" /></a>
					<ul id="menu" class="">
						<li><a href="/" class="active">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="gallery.php">Gallery</a></li>
						<li><a href="history.php">History</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			<div id="intro">
			<img src="assets/intro1.jpg" alt="Bespoke Building &amp; Joinery" />
			<img src="assets/intro2.jpg" alt="Bespoke Building &amp; Joinery" />
			<img src="assets/intro3.jpg" alt="Bespoke Building &amp; Joinery" />
			<img src="assets/intro4.jpg" alt="Bespoke Building &amp; Joinery" />
			</div>
			<img src="assets/shadow.jpg" alt="" />
			<div id="content">
				<div id="left">
					<h1>Welcome to Nyland Construction</h1>
					<h2>Warrington based builders; Nyland Construction have been in the construction business, both commercial and domestic, for over 30 years. With building being the core part of our company we have established an excellent reputation in Warrington and the surrounding areas.</h2>
					<p>Nyland Construction can transform your project from plan to completion - on time and within budget. As one of Warrington most favored building companies, we are proud to receive most of our new contracts by recommendations from previous, satisfied clients. We cover a wide range of building services in Warrington and Cheshire to suit your needs.</p>
					<p>Nyland Construction only employ time-served tradesmen backed by their relevant safety organisations; N.I.C.E.I.C. (Electrical); Gas Safe (Gas and Plumbing). We have full public liability insurance, our work is fully guaranteed and finished to extremely high standards with many satisfied customers. Nyland Construction is proud to carry the Federation of Master Builders Certification and we are a Velux 5 star VIP installer. References are available on request.</p>
					<p>Call us today for a free quotation!</p>
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
		<script type='text/javascript' src='assets/cycle.js'></script>
		<script type='text/javascript'>$('#intro').cycle('fade');</script>
	</body>
</html>
