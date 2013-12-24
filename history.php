<?php
// history.php
// Set the page title and Google meta description tags:
$title = 'Our Company History | Home improvement in Stockton Heath, Frodsham and Chester';
$metadescription = 'Our company history, showing 30 years of experience providing construction services in Appleton, Stretton and Walton.';
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
				<a href="tel://01925604354"><img src="/assets/telephone.gif" alt="Telephone 01925 604354" /></a><br />
				<ul id="menu" class="">
					<li><a href="/">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="history.php" class="active">History</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				</div>
			</div>
			<div id="intro">
			<img src="/assets/history.jpg" alt="Bespoke Building &amp; Joinery" />
			</div>
			<img src="/assets/shadow.jpg" alt="" />
			<div id="content">
				<div id="left">
					<h1>Our History</h1>
					<h2>1982-1990</h2>
					<ul>
					  <li> Contracted for the installation of suspended ceilings on large government contracts
						(e.g. Queen Elizabeth's Crown Courts Liverpool, St. John's Precinct Liverpool, The Strand Precinct Bootle.)</li>
					  <li> Shop fitting throughout UK for Boots The Chemists.</li>
					</ul>
					<h2>1990-2000</h2>
					<ul>
					  <li> Local building work, e.g. house builds, house extensions, kitchens, bathrooms, etc.</li>
					  <li> Sub-contract building work for C.S.E Storage Equipment, Galliford Try and Kingfisher Swimming Pools.</li>
					</ul>
					<h2>2000-<i>Present</i></h2>
					<ul>
					  <li> Property developments</li>
					  <li> House refurbishments</li>
					  <li> Extensions</li>
					  <li> Kitchens</li>
					  <li> Bathrooms</li>
					</ul>
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
			<img src="/assets/shadow.jpg" alt="" />
			<?php
			// Footer
			require_once('includes/footer.inc.php');
			?>
		</div>
	</body>
</html>
