<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Груз Центр</title>
	<!-- <link rel="stylesheet" href="css/main.css"> -->
	<?php $this->getStyles() ?>

</head>

<body>
	<header class="header" style="background: linear-gradient(180deg, #343e49 0%, rgba(45, 52, 60, 0.38) 51.04%, #343e49 200%), url(<?= $this->img($this->set['main_img']) ?>) center center/cover no-repeat;">
		<div class="header-top">
			<div class="container">
				<div class="header-top-row">
					<a href="<?= $this->alias() ?>">
						<img src="<?= $this->img($this->set['img']) ?>" alt="Груз центр">
					</a>
					<div class="header-top-nav">
						<nav class="nav">
							<ul class="nav-list" style="font-size: 20px;">
								<li><a href="#about">О нас</a></li>
								<li><a href="#price">Cтоимость услуг</a></li>
								<li><a href="#services">Услуги</a></li>
								<li><a href="#contacts">Контакты</a></li>
							</ul>
						</nav>
					</div>

					<div class="header-top-nav-btn">
						<button class="nav-icon-btn">
							<div class="nav-icon"></div>
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h1 class="header-title"><?= $this->set['short_content'] ?></h1>
		</div>
		<div class="header-footer">
			<div class="text-right">
				<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>" class="header-footer-info header-footer-info--tel" style="font-size: 24px;"><?= $this->set['phone'] ?></a>
			</div>
			<a href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone_two']) ?>" class="header-footer-info header-footer-info--tel" style="font-size: 24px;"><?= $this->set['phone_two'] ?></a>
		</div>
	</header>
	<main>