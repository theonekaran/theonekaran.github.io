<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php

$name= test_input($_POST["name"]);
$email = test_input($_POST["email"]);
$num_members = test_input($_POST["num_members"]);
$namesparty = test_input($_POST["namesparty"]);
$arrival = test_input($_POST["arrival"]);
$depart = test_input($_POST["depart"]);
$food = test_input($_POST["food"]);
$message = test_input($_POST["message"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = preg_replace("/[\n\r]/"," ", $data);
  $data = htmlspecialchars($data);
  return $data;
}

$cvsData = $name . "," . $email . "," . $num_members . "," . $namesparty . "," . $arrival . "," . $depart . "," . $food . "," . $message . "\n";

$fp = fopen("confirmed.csv","a"); // $fp is now the file pointer to file $filename

if($fp){
fwrite($fp,$cvsData); // Write information to the file
fclose($fp);
}

?>
<html>
	<head>
		<title>E & K's Wedding - RSVP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="contact">
	
		<!-- Header -->
			<header id="header">
				<h1 id="logo"><a href="index.html">E & K's <span>Wedding</span></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Welcome</a></li>
						<li class="submenu">
							<a href="">Location</a>
							<ul>
								<li><a href="location.html">Amenities</a></li>
								<li><a href="activities.html">Activities</a></li>
							</ul>
						</li>
						<li><a href="program.html">Program</a></li>
						<li><a href="mailto:khuranak@gmail.com?cc=elena.kalova33@gmail.com&subject=Wedding%20Questions">Contact Us</a></li>
						<!-- <li class="submenu">
							<a href="">Menu</a>
							<ul>
								<li><a href="location.html">Location</a></li>
								<li><a href="program.html">Program</a></li>
								<li><a href="no-sidebar.html">No Sidebar</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="submenu">
									<a href="">Submenu</a>
									<ul>
										<li><a href="#">Dolore Sed</a></li>
										<li><a href="#">Consequat</a></li>
										<li><a href="#">Lorem Magna</a></li>
										<li><a href="#">Sed Magna</a></li>
										<li><a href="#">Ipsum Nisl</a></li>
									</ul>
								</li>
							</ul>
						</li> -->
						<li><a href="rsvp.html" class="button special current">RSVP</a></li>
					</ul>
				</nav>
			</header>
		
		<!-- Main -->
			<article id="main">

				<header class="special container">
					<span class="icon fa-envelope"></span>
					<h2>Thank You!</h2>
					<p>Thank you for taking the time to provide your information.
					<br />
					This will help us greatly to plan our wedding so you can have a day to remember for a long time.
					</p>
					
				</header>

					
				<!-- One -->
					<section class="wrapper style6 container small">
					
						<!-- Content -->
							<div class="content" >
								<p >
									<strong>Please just review the information once more and re-submit if required:
									</strong>
									<br />
									<br />
									Name: <?php echo $name; ?>
									<br />
									Email: <?php echo $email; ?>
									<br />
									Number of guests in party: <?php echo $num_members; ?>
									<br />
									Names of guests in party: <?php echo $namesparty; ?>
									<br />
									Arrival Date/Time: <?php echo $arrival; ?>
									<br />
									Departure Date/Time: <?php echo $depart; ?>
									<br />
									Food Preference: <?php echo $food; ?>
									<br /> 
									Message: <?php echo $message; ?>
									<br /> 
								</p>

								
							</div>

							
					</section>



				
			</article>

		<!-- Footer -->
			<footer id="footer">
			
				<ul class="icons">
					<li><a href="https://twitter.com/hashtag/elenakaran" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="https://www.facebook.com/hashtag/elenakaran" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="https://plus.google.com/explore/elenakaran" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
					<li><a href="http://searchinstagram.com/elenakaran" class="icon circle fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				
				<ul class="copyright">
					<li>&copy; Karan</li><li>Design: Karan</li>
				</ul>
			
			</footer>

	</body>
</html>