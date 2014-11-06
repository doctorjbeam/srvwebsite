<?php
	/**
	 * Steamrail website header file
	 * @since Version 1.0
	 * @author Michael Greenhill, Lionel Camilleri
	 */
	 
	if (!isset($pagetitle)) {
		// No title has been set yet - we'd better put a default one in..
		$pagetitle = "Steamrail Victoria"; 
	}
	
	/**
	 * Menu items
	 */
	
	$menu = array(
		"home" => array(
			"title" => "Home",
		),
		"about" => array(
			"title" => "About Us", 
		),
		"tours" => array(
			"title" => "Tours",
		),
		"charters" => array(
			"title" => "Charters",
		),
		"membership" => array(
			"title" => "Membership",
		),
		"volunteer" => array(
			"title" => "Volunteer",
		),
		"contact" => array(
			"title" => "Contact Us",
		),
		"souvenirs", array(
			"title" => "Souvenirs",
		),
		"links" => array(
			"title" => "Links"
		),
	);
?>
<!DOCTYPE HTML>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" >
	<link rel="stylesheet" href="style.css" type="text/css">
	<meta name="google-site-verification" content="yFTVT8T5a5mL26Wm0r42yqzxWrSGVGAVgN2qhOwqsFQ">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<meta property="twitter:site" content="@SteamrailVic">
	<meta property="twitter:domain" content="steamrail.com.au">
	<meta property="og:site_name" content="Steamrail">
	<meta property="og:title" content="<?php echo $pagetitle; ?>">
	<meta property="og:locale" content="en_GB">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $pagetitle; ?></title>
	<script src="/js/AC_RunActiveContent.js"></script>
    <script src="/js/email.js"></script>
	<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
	<div class="wrapper">
		<header>
		
		</header>
		
		<nav>
			<ul>
				<?php foreach ($menu as $page => $row) : ?>
				<?php if ($row['title'] != "s") : ?>
				<li><a href="index.php?page=<?php echo $page;?>"><?php echo $row['title'];?></a></li>
				<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</nav>