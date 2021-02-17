<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<?php $language = app()->getLocale(); ?>

<html lang="{{ str_replace('_', '-', $language) }}"><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>{{ config('app.name', 'ZD') }}</title>

	<!-- Standard Favicon -->
	<!-- <link rel="icon" type="image/x-icon" href="<?php echo url('/'); ?>/assets/images/favicon.ico" /> -->
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo url('/'); ?>/assets/images/apple-touch-icon-114x114-precomposed.png">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo url('/'); ?>/assets/images/apple-touch-icon-72x72-precomposed.png">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo url('/'); ?>/assets/images/apple-touch-icon-57x57-precomposed.png">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/revolution/css/settings.css">
	
	

	<!-- Library -->
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/assets/slick/slick-theme.css">
	
	@if ($language=='ar')				
	<link rel="stylesheet" href="<?php echo url('/'); ?>/assets/css/rtl.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/style-rtl.css">
	<link href="<?php echo url('/'); ?>/assets/css/lib-rtl.css" rel="stylesheet">

	@elseif ($language=='en' || 'ba')
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/style.css">
	<!-- Library -->
    <link href="<?php echo url('/'); ?>/assets/css/lib.css" rel="stylesheet">

    @endif

	





	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	

</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">

<!-- Loader -->
<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
</div><!-- Loader /- -->