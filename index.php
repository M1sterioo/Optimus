<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Optimus</title>
	<link rel="stylesheet" type="text/css" href="style1.0.css">
</head>
<body>
	<header>
		<div class="container">
			<div>
				<a class="logo-link" href="index.php">
					<img class="logo-img" width="50px" src="img/logo.png">
					<span class="logo-text">Optimus</span>
				</a>	
			</div>
			<nav class="nav-header">
				<a class="nav-a" href="#uslugi">Услуги</a>
				<a class="nav-a" href="#contacts">Контакты</a>
				<a class="nav-a" href="#onas">О нас</a>
			</nav>
			<a href="regauto.php" class="nav-log">
				Вход
			</a>	
		</div>
	</header>
	<main>
		<div class="container-main">
			<div class="info-banner">
				<img width="350px" src="icon-svg/logo-vector.svg">
				<span class="info-banner-text">Optimus - сайт для оптимизации ваших веб сайтов!
					<div class="rate-num-flex">
						<div class="rate-num-all">
							<p class="rate-num">5</p>
							<span>Решенных заявок</span>
						</div>
						<div class="rate-num-all">
							<p class="rate-num">10</p>
							<span>Полученных заявок</span>
						</div>
						<div class="rate-num-all">
							<p class="rate-num">2</p>
							<span>Отклоненных заявок</span>
						</div>
						<a class="banner-application" href="application.php">
							Заполнить заявку
						</a>
					</div>	
				</span>
			</div>
			<div class="section" id="uslugi">
				<span class="section-text">Услуги</span>
			</div>
			<div class="tabs">
			    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
			    <label for="tab-btn-1"><img src="icon-svg/search.svg"><span class="tabs-text"><br>Поисковая<br> оптимизация</span></label>
			    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
			    <label for="tab-btn-2"><img src="icon-svg/setting.svg"><span class="tabs-text"><br>Техническая<br> оптимизация</span></label>
			    <input type="radio" name="tab-btn" id="tab-btn-3" value="">
			    <label for="tab-btn-3"><img src="icon-svg/image.svg"><span class="tabs-text"><br>Внешняя<br> оптимизация</span></label>

			    <div id="content-1">
			      <span class="content-up-text">Поисковая оптимизация </span> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
			    </div>
			    <div id="content-2">
			      <span class="content-up-text">Техническая оптимизация </span> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
			    </div>
			    <div id="content-3">
			      <span class="content-up-text">Внешняя оптимизация </span> - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. 
			    </div>
			</div>
			<div class="section" id="onas">
				<span class="section-text">О нас</span>
			</div>
			<div class="group-info">
				<div class="group-info-all">
					<img class="group-image" width="250px" src="img/fasfcz231vx.png">
					<p class="group-text-p">Петров Владислав Сергеевич</p>
					<span class="group-text-span">Директор, ведущий разработчик</span>
				</div>
				<div class="group-info-all">
					<img class="group-image" width="250px" height="250px" src="img/bgaicbzhdq3.jpg">
					<p class="group-text-p">Филипский Николай Викторович</p>
					<span class="group-text-span">Менеджер</span>
				</div>
				<div class="group-info-all">
					<img class="group-image" width="250px" src="img/ytruhgmcx.png">
					<p class="group-text-p">Волков Артём Юрьевич</p>
					<span class="group-text-span">Дизайнер</span>
				</div>
			</div>
			<div class="section" id="contacts">
				<span class="section-text">Контакты</span>
			</div>
			<div class="contacts-info">
				<div>
					<p class="contacts-text-p"><img width="25px" src="icon-svg/phone.svg">Общая линия</p>
					<span class="contacts-text-span">+7 (914) 386-14-22</span>
				</div>
				<div>
					<p class="contacts-text-p"><img width="25px" src="icon-svg/phone.svg">Тех. поддержка</p>
					<span class="contacts-text-span">+7 (914) 741-96-37</span>
				</div>
				<div>
					<p class="contacts-text-p"><img width="25px" src="icon-svg/Email.svg">Почта</p>
					<span class="contacts-text-span">optimus@gmail.com</span>
				</div>		
			</div>
		</div>
	</main>
	<footer>
		<div class="container-footer">
			<div class="footer-text">
				<span class="footer-span">© 2022 Optimus</span>
			</div>
			<nav class="nav-header">
				<a class="nav-a" href="#uslugi">Услуги</a>
				<a class="nav-a" href="#contacts">Контакты</a>
				<a class="nav-a" href="#onas">О нас</a>
			</nav>
			<a href="#" class="footer-pageUp">
				Наверх
				<img class="footer-pageUp-icon" src="icon-svg/pageUp.svg" >
			</a>
		</div>
	</footer>
</body>
</html>