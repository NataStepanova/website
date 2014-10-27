<?php 
	header('Content-Type: text/html; charset=UTF-8');
	session_start();
	require_once("config.php");
?>
<!doctype html>
<html lang="ru">
    <head>
        <title> Приложение гостиницы  </title>

        <link rel="shortcut icon" href="http://shop.borderfree.com/assets/css/images/favicon.ico" />
        <link rel="stylesheet" href="css/style.min.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/css.css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic" type="text/css">
		
        <script src="jquery/jquery-1.10.2.min.js"></script>
		<script src="jquery/main.js"></script>

    </head>

	<body >
<?php
	    if (empty($_SESSION['email']) or empty($_SESSION['id']))
	    {}
	    else
	    {
	    echo '<section id="login-form">
			<div class="left">Вы вошли как '.$_SESSION['login'].'</div>
			
			</section>';
	    }
	?>
	<div class="wrapper">
	    <div class="navigation-top">
	        <div class="shell clearfix">
	            <a href="reg.php" class="mailing-list">Зарегистрироваться</a>
	            <a href="signin.php" id="borderfreecom" class="right" target="_blank" data-site="borderfree.com">Войти</a>
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
			</div> 
			<div class="page-title">
				<section class="sixteen colgrid">
					<div class="row">
						<div class="field-holder form-row">
							<span>Дата заезда 
						    	<form>
			  						<input type="date" name="calendar">
			 					</form>
			 				</span>
				   		</div>
				   		<div class="field-holder form-row">
				        	<span>Дата выезда
						    	<form>
			  						<input type="date" name="calendar">
			 					</form>
			 				</span>
				    	</div>
				    	<div class="field-holder form-row">
				    		<span>Цена
					        	<select name="website_sales">
									<option value="#">Website Sales</option>
									<option>Under $1 Million</option>
									<option>$1-10 Million</option>
									<option>$10-50 Million</option>
									<option>Over $50 Million</option>
								</select>
							</span>
				    	</div>
				    	<div class="field-holder form-row">
				        	<span>Класс номера
						    	<select>
						            <option>Эконом</option>
						 		</select>
							</span>
				    	</div>				
					</div> 
				</section>	
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
							 <?php require_once("config.php") ?>
								<?php 
									mysql_query("SET NAMES utf8");
									$query = mysql_query("SELECT * FROM description_room");
									while ($b = mysql_fetch_assoc($query)) {
											echo '<div class="category"><h2>'.$b ['category'].'</h2></div><br>';
											echo '<div class="bedspace"><p>'.$b ['bedspace'].'-х местный</p></div>';
											echo '<div class="descriptioт"><p>'.$b ['description'].'</p></div>';
											echo '<div class="cost"><br><p>Стоимость '.$b ['cost'].'руб. за сутки</p></div>';
									}

								?>
							<p>
								<a href="http://shop.borderfree.com/stores" class="button" target="_blank">Забронировать номер <i></i></a>
							</p>
						</div>
						<a href="" class="back-to-top">Вверх</a>
					</div>
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

					
