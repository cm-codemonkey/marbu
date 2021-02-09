<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css?v=1.0" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.1" type="text/css" media="all" />
		{$dependencies.css}

		<!-- Recaptcha v3 -->
		<script src="https://www.google.com/recaptcha/api.js?render=6LdgUVAaAAAAANKpVofcI5u1yMxq_dXlnPd3iitu"></script>
		<script>
		    grecaptcha.ready(function() {
			    grecaptcha.execute('6LdgUVAaAAAAANKpVofcI5u1yMxq_dXlnPd3iitu', {action: 'submit'}).then(function(token) {
				    var recaptcha_1 = document.getElementById('recaptcha_1');
				    recaptcha_1.value = token;
			    });
			});
		</script>
	</head>
	<body>
		<header class="main_header">
			<figure>
				<img src="{$path.images}logotype.png">
			</figure>
			<nav>
				<ul>
					<li><a href="#home"><i class="fas fa-home"></i></a></li>
					<li><a href="#tests">{$lang.tests_covid}</a></li>
					<li><a href="#other_services">{$lang.other_tests}</a></li>
					<li><a href="#contact">{$lang.contact_us}</a></li>
					<li><a href="?lang=en"><img src="{$path.images}en.png" alt="EN"></a></li>
					<li><a href="?lang=es"><img src="{$path.images}es.png" alt="ES"></a></li>
				</ul>
			</nav>
			<a data-action="open_mobile_menu"><i class="fas fa-bars"></i></a>
		</header>
		<header class="mobile_header">
			<a data-action="close_mobile_menu"><i class="fas fa-window-close"></i></a>
			<nav>
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#tests">{$lang.tests_covid}</a></li>
					<li><a href="#other_services">{$lang.other_tests}</a></li>
					<li><a href="#contact">{$lang.contact_us}</a></li>
					<li><a href="?lang=en"><img src="{$path.images}en.png" alt="EN"></a></li>
					<li><a href="?lang=es"><img src="{$path.images}es.png" alt="ES"></a></li>
				</ul>
			</nav>
		</header>
