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
			<div class="auto-reg-form">
					<div class="tabs1">
					    <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
					    <label for="tab-btn-1"><span class="auto-tab-span">Вход</span></label>
					    <span class="auto-tab-span">|</span>
					    <input type="radio" name="tab-btn" id="tab-btn-2" value="">
					    <label for="tab-btn-2"><span class="auto-tab-span">Регистрация</span></label>
					    <div id="content-1">
					      <form action='regauto.php' method='post'>
					      	<div>
					      		<input type="login" name='login' class="regauto-input" placeholder="Логин">
					      		<input type="password" name='pass' class="regauto-input" placeholder="Пароль">
					      		<input type="submit" name='auto' class="sign" value='Войти'>
					      	</div>
					      </form>
					    </div>
					    <div id="content-2">
					      <form action='regauto.php' method='post'>
					      	<div>
					      		<input type="name" name='name' class="regauto-input" placeholder="Ф.И.О">
					      		<input type="login" name='login' class="regauto-input" placeholder="Логин">
					      		<input type="email" name='email' class="regauto-input" placeholder="Email">
					      		<input type="password" name='pass' class="regauto-input" placeholder="Пароль">
					      		<input type="password" name='pass1' class="regauto-input" placeholder="Повторите пароль">
					      		<input type="submit" name='auto' class="regn" value='Зарегистрироваться'>
					      	</div>
					      </form>
					    </div>
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