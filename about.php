<?php
// about.php
// Set the page title and Google meta description tags:
$title = 'About Us | Refurbishment in Cheshire';
$metadescription = 'All about Nyland Construction and what we do.';
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
					<li><a href="about.php" class="active">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
				</div>
			</div>
			<div id="intro">
			<img src="/assets/about.jpg" alt="Bespoke Building &amp; Joinery" />
			</div>
			<img src="/assets/shadow.jpg" alt="" />
			<div id="content">
				<div id="left">
				<h1>About Nyland Construction</h1>
				<h2>Nyland Construction provide a wide range of services for our clients, from basic building repairs right through to completion of large projects.</h2>
				<h2>Building Refurbishments</h2>
				<p>Whether you have just moved into a new property, or want to have work done on your existing house to increase the value before you sell it, Nyland Construction of Warrington have a vast array of skills at your disposal.</p>
				<h2>Building Extensions</h2>
				<p>Wherever you're planning to build your extension it's important to think about how people can get to it from the rest of the house, and it's how you do that that often makes the difference between a good job and a bad one. Nyland Construction will see your extension from plan to completion, ensuring your new extension blends in harmoniously to your existing building.</p>
				<h2>Loft &amp; Garage conversions</h2>
				<p>Converting existing outbuildings and lofts into living space is something that many people believe applies only to people with older houses surrounded by stables and barns, but it could equally apply to garages and even urban properties that had outside toilets and coal sheds when they were first built. Anything that can be converted into living space can be used to give a family useful extra space, provide an office for working at home or perhaps a gym or games room.</p>
				<h2>Office &amp; Shop Fitting</h2>
				<p>Nyland Construction can create functional design solutions for all interior environments including shops, receptions, salons and general office spaces. We offer a comprehensive service from initial consultation and site survey through to production and installation, including any additional building work needed if necessary.</p>
				<h2>Kitchens</h2>
				<p>Nyland Construction philosophy is to offer a bespoke service for kitchens of distinction, combining superb craftmanship, cutting-edge design and natural materials from around to world. We can offer a full form plan to completion service to utilise your existing space while maintaining a functional working design.</p>
				<h2>Bathrooms/Wet Rooms</h2>
				<p>Warrington based Builders Nyland Construction offer a complete project management service from sourcing to installation—plumbing, wiring, tiling and decoration by its teams of time served installers. With over 30 years experience we are proud of our hard won reputation for the quality of our installation expertise. We care passionately about our business and go to all necessary lengths to ensure the suitability and quality of the products we install and the methods we employ.</p>
				<h2>Windows &amp; Door Frames</h2>
				<p>Whether you are upgrading your original frames or restoring your home to its former glory, traditional wood or PVC windows and doors will add value to your home. Our bespoke design services can recreate an existing design to maintain a homes traditional look and feel. We can also offer a wide range of PVC Doors and windows in many colours.</p>
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
