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
			<a href="auto.php" class="nav-log">
				Вход
			</a>	
		</div>
	</header>
	<main>
		<div class="container-main">
			<div class="application">
					      <form action='application.php' method='post'>
					      	<div class="">
					      		<span class="application-span">Заявка</span>
					      		<input type="text" name='login' class="regauto-input" placeholder="Название">
					      		<input type="text" name='description' class="regauto-input" placeholder="Описание">
					      		<select class="app-des" value="0" placeholder="Описание">
					      			<option class="app-des" selected>Категории</option>
					      			<option class="app-des" value="Поисковая оптимизация">Поисковая оптимизация</option>
					      			<option class="app-des" value="Техническая оптимизация">Техническая оптимизация</option>
					      			<option class="app-des" value="Внешняя оптимизация">Внешняя оптимизация</option>
					      		</select> 
					      		<label class="custom-file-upload">
								    <input type="file"/>
								    <span class="file-span">Прикрепите фото проблемы</span>
								    <img src="icon-svg/plus.svg">
								</label>
					      		<input type="submit" name='auto' class="sign" value='Cоздать'>
					      	</div>
					      </form>
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