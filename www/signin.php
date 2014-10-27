<?php 
	header('Content-Type: text/html; charset=UTF-8');
	session_start();
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

		
			
			<div class="join">

			
		
			<div class="main">
				<div class="form-holder form-container form-mailing2">
					<div class="shell">
						<form action="sign_user.php" method="post" class="add-form">
							<h6>Введите данные для входа на сайт</h6>
							
								<div class="row">
									<div class="field-holder form-row">
										<input type="text" class="field validate" id="field3" placeholder="Email*" title="email" name="email" required/>	
									</div>
									<div class="field-holder form-row">
										<input type="password" class="field validate" id="field4"  placeholder="Password*" title="password" name="password" required/>
									</div>
								</div>
								<div class="buttons">							
										<button class="button" type="submit">Войти</button>									
                            	</div>	

						</form>
					</div><!-- /.shell -->
				</div><!-- /.form-holder -->
			</div><!-- /.main -->
		</div><!-- /.join -->
		<div class="push"></div>
	</div>
	< <div class="footer">
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