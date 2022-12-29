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
			<div class="user-span">
				<span class="user-span-name">Ф.И.О</span>
				<span class="user-span-login">Логин</span>
			</div>
			<div class="section">
				<span class="section-text">Категории заявок</span>
			</div>
			<div class="category">
				<p class="category-p">Техническая оптимизация</p>
				<p class="category-p">Поисковая оптимизация</p>
				<p class="category-p">Внешняя оптимизация</p>
				
			</div>
			<div class="section">
				<span class="section-text">Заявки</span>
			</div>
			<div class="sorting">
				<span class="sorting-span">Сортировать по:</span>
				<br>
				<input type="button" name="new" class="sorting-button" value="Новая" checked>
				<input type="button" name="completed" class="sorting-button" value="Решена">
				<input type="button" name="rejected" class="sorting-button" value="Отклонена">
			</div>
			<table class="sorting-table-style">
				<tr class="sorting-table-name">
					<th >Время, Дата</th>
					<th>Название заявки</th>
					<th>Описание заявки</th>
					<th>Категория</th>
					<th>Статус</th>
					<th></th>
				</tr>
				 <tr>
				 	<td>10:23 <br>24.05.2022</td>
				 	<td>Срочная <br>оптимизация</td>
				 	<td>Надо срочно <br>оптимизиров..</td>
				 	<td>Техническая<br> оптимизация</td>
				 	<td>Новая</td>
				 	<td><input type="submit" name="del-app" value="Изменить"></td>
				 </tr>
				 <tr>
				 	<td>10:23 <br>24.05.2022</td>
				 	<td>Срочная <br>оптимизация</td>
				 	<td>Надо срочно <br>оптимизиров..</td>
				 	<td>Техническая<br> оптимизация</td>
				 	<td>Новая</td>
				 	<td><input type="submit" name="del-app" value="Изменить"></td>
				 </tr>
			</table>
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