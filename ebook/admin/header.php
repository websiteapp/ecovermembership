<?php ob_start();
error_reporting(E_ERROR | E_PARSE); ?>
<?php if (!isset($_SESSION)) session_start(); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/translate.class.php'); ?>
<?php include_once(dirname(dirname(__FILE__)) . '/classes/generic.class.php'); ?>
<?php include_once(dirname(__FILE__) . '/classes/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>InstantWL - Admin</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Jigowatt PHP Login script">
		<meta name="author" content="Matt Gates | Jigowatt">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le styles -->
		<link href="../assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="../assets/css/jigowatt.css" rel="stylesheet">
		<link href="assets/css/datepicker.css" rel="stylesheet">
		<link href="assets/js/select2/select2.css" rel="stylesheet">
		<link href="assets/css/prettify.css" rel="stylesheet">

		<link rel="shortcut icon" href="//jigowatt.co.uk/favicon.ico">

		<!-- Added library to header in order to load reports -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	</head>

	<body>

<!-- Navigation
================================================== -->

	<div class="navbar navbar-fixed-top">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="../home.php"><?php if (class_exists('Generic')) {
    $generic = new Generic();
echo $generic->getOption('site-name'); }?></a>
				<div class="nav-collapse">
					<ul class="nav" id="findme">
						<li><a href="../home.php"><?php _e('Home'); ?></a></li>
						<li><a href="index.php"><?php _e('Admin panel'); ?></a></li>
					</ul>
		<?php if(isset($_SESSION['eb']['username'])) { ?>
		<ul class="nav pull-right">
			<li class="dropdown">
				<p class="navbar-text dropdown-toggle" data-toggle="dropdown" id="userDrop"><?php echo $_SESSION['eb']['gravatar']; ?> <a href="#"><?php echo $_SESSION['eb']['username']; ?></a><b class="caret"></b></p>
				<ul class="dropdown-menu">
		<?php if(in_array(1, $_SESSION['eb']['user_level'])) { ?>
					<li><a href="index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
					<li><a href="settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> <?php } ?>
					<li><a href="../profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
					<li class="divider"></li>
					<li><a href="../logout.php"><?php _e('Sign out'); ?></a></li>
				</ul>
			</li>
		</ul>
		<?php } else { ?>
		<ul class="nav pull-right">
			<li><a href="../login.php" class="signup-link"><em><?php _e('Have an account?'); ?></em> <strong><?php _e('Sign in!'); ?></strong></a></li>
		</ul>
		<?php } ?>
				</div>
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
	</div><!-- /navbar-wrapper -->

<!-- Main content
================================================== -->
		<div class="container">
			<div class="row">

				<div class="span12">