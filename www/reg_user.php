<?php 
	header('Content-Type: text/html; charset=UTF-8');
?>
<!doctype html>
<html lang="ru">
    <head>
        <title> Приложение гостиницы  </title>

        <link rel="shortcut icon" href="http://shop.borderfree.com/assets/css/images/favicon.ico" />
        <link rel="stylesheet" href="http://shop.borderfree.com/assets/css/style.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/css.css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic" type="text/css">

        <script src="jquery/jquery-1.10.2.min.js"></script>
		<script src="jquery/main.js"></script>

    </head>

	<body >

	<div class="wrapper">
	    <div class="navigation-top">
	        <div class="shell clearfix">
	            <a href="http://shop.borderfree.com/email-signup" class="mailing-list">Зарегистрироваться</a>
	            <a href="C:\website\web\www\Gumby-master\demo.html" id="borderfreecom" class="right" target="_blank" data-site="borderfree.com">Войти</a>
	        </div>
	    </div>

	    <div class="header">
	        <div class="shell clearfix">
	            <div class="navigation">
	                <ul>
	                    <li><a href="index.php">Главная</a></li>
	                    <li><a href="room.php" >Комнаты<i></i></a></li>
	                    <li><a href="articles.php" >Услуги<i></i></a></li>
	                </ul>
	            </div>
	        </div>
	    </div>

		<div class="main">
			<div class="flexslider slideshow">
			    <ul class="slides">
			    	<li>
			    		<div class="sl-hold">
				    		<div class="slide-info">
				    			<div class="slide-info-head">
				    				<h2>Hotel<br/>Golden Apple</h2>
				    			</div>

				    			<div class="slide-info-box">
				    				<p>Роскошь уникальна, как и каждый наш гость!</p>
				    			</div>
				    		</div>
			    		</div>

			    		<img src="images/slide-image1.jpg" alt="" draggable="false">
			    	</li>  	
			    </ul> 

			    <div class="slideshow-navigation">

		    				<div class="sl-hold">			    	
				    			<ul class="clearfix">
						    		<li>
						    			<strong class="slideshow-nav1">
						    				
			 						    </strong>
			 						</li>
						    		<li>
						    			<strong class="slideshow-nav2">
						    				
			 							</strong>
			 						</li>
						    		<li>
						    			<strong class="slideshow-nav3">
						    				
										</strong>
									</li>
						    		<li>
						    			<strong class="slideshow-nav4">
						    				
										</strong>
									</li>			    		
						    	</ul>
				    		</div>
			    		</div>
					</div>

			<div class="section-title">
				<div class="shell">
					<h2>Результаты поиска</h2>
					<i class="section-title-arrow"></i>
				</div>
			</div>

			<div class="section">
				<div class="section-inner section-inner1">
					<div class="shell clearfix">							
						<div class="section-entry">
							<div class="form">
							<?php
					if (isset($_POST['name'])) {
						$name = $_POST['name'];
						if ($name == '') {
							unset($name);
						}
					} 
					if (isset($_POST['surname'])) {
						$surname = $_POST['surname'];
						if ($surname == '') {
							unset($surname);
						}
					}
					if (isset($_POST['pass_num'])) {
						$pass_num = $_POST['pass_num'];
						if ($pass_num == '') {
							unset($pass_num);
						}
					}
					if (isset($_POST['pass_ser'])) {
						$pass_num = $_POST['pass_ser'];
						if ($pass_num == '') {
							unset($pass_num);
						}
					}
					if (isset($_POST['pass_address'])) {
						$pass_num = $_POST['pass_address'];
						if ($pass_num == '') {
							unset($pass_num);
						}
					}
					if (isset($_POST['phone_num'])) {
						$pass_num = $_POST['phone_num'];
						if ($pass_num == '') {
							unset($pass_num);
						}
					}
					if (isset($_POST['email'])) {
						$email = $_POST['email'];
						if ($email == '') {
							unset($email);
						}
					}
					if (isset($_POST['password'])) {
						$password = $_POST['password'];
						if ($password == '') {
							unset($password);
						}
					}
					if (empty($email) or empty($password)) {
						exit('Вы ввели не всю информацию, вернитесь назад и заполните все поля');
					}
					$email = stripslashes($email);
					$email = htmlspecialchars($email);
					$password = stripslashes($password);
					$password = htmlspecialchars($password);
					$email = trim($email);
					$password = trim($password);
					require_once("config.php");
					$result = mysql_query("SELECT id FROM user WHERE email = '$email'", $db);
					$myrow = mysql_fetch_array($result);
					if (!empty($myrow['id'])) {
						exit("Извините, введенный Вами email уже зарегистирован. <a href='reg.php'>Введите другой email.</a>");
					}
					$result2 = mysql_query("INSERT INTO user(name, surname, pass_num, pass_ser, pass_address, phone_num, email, password) VALUES ('$name', '$surname', '$pass_num', '$pass_ser', '$pass_address', '$phone_num', '$email', '$password')");
					if ($result2 == 'true') {
						echo "Вы успешно зарегистрированы! Теперь вы можете зайти на <a href='index.php'>сайт</a>.";
					}
					else {
						echo "Ошибка! Вы не зарегистрированы. Пожалуйста, пройдите <a href='reg.php'>регистрацию</a> заново.";
					}
				?>
			</div>
						</div>
						<a href="" class="back-to-top">Вверх</a>
					</div>
				</div>
			</div>

	    <div class="footer">
	        <div class="shell clearfix">
	            <div class="socials">
	                <a href="http://www.facebook.com/" class="ico-facebook" target="_blank">facebook</a>
	                <a href="http://www.twitter.com/" class="ico-twitter" target="_blank">twitter</a>
	            </div>
	            <p class="copy">Because you’re worth it</p>
	        </div>
	    </div>
	</div>    
	</body>
</html>