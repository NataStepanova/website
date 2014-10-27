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

        <script src="http://shop.borderfree.com/assets/js/libs/jquery-1.10.2.min.js"></script>




        <script src="http://shop.borderfree.com/assets/js/build/main.js"></script>

        

        
            <script>
            var _gaq = _gaq || [];
            </script>

            
            <script>
            _gaq.push(['_setAccount', 'UA-2975641-15']);
            _gaq.push(['_trackPageview']);
            (function()
            { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); }
            )();
            </script> 
    </head>



<body style="">



<div class="wrapper">

	    <div class="navigation-top">
        <div class="shell clearfix">
            <a href="http://shop.borderfree.com/email-signup" class="mailing-list">Зарегистрироваться</a>
            <a href="http://www.borderfree.com" id="borderfreecom" class="right" target="_blank" data-site="borderfree.com">Войти</a>
        </div><!-- /.shell -->
    </div><!-- /.navigation-top -->

    <div class="header">
        <div class="shell clearfix">
            <h1 class="logo"><a href="index.php">Гостиница</a></h1>

            <div class="navigation">
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="room.php" >Комнаты<i></i></a></li>
                    <li><a href="services.php" >Услуги<i></i></a></li>
                </ul>
            </div><!-- /.navigation -->
        </div><!-- /.shell -->
    </div><!-- /.header --> 


	<div class="main">
		
		<div class="flexslider slideshow">
		    <ul class="slides">
		    	<li>
		    		<div class="sl-hold">
			    		<div class="slide-info">
			    			<div class="slide-info-head">
			    				<h2>Hotel<br />Golden Apple</h2>
			    			</div><!-- /.slide-info-head -->

			    			<div class="slide-info-box">
			    				<p>Роскошь уникальна, как и каждый наш гость!</p>
			    			</div><!-- /.slide-info-box -->
			    		</div><!-- /.slide-info -->
		    		</div><!-- /.sl-hold -->

		    		<img src="http://shop.borderfree.com/assets/img/uploads/slide-image1.jpg" alt="" draggable="false">
		    	</li>  	
		    </ul> 

		    <div class="slideshow-navigation">
		    	<div class="left-side"></div><!-- /.left-side -->
		    	<div class="right-side"></div><!-- /.right-side -->			    	
	    		<div class="sl-hold">			    	
			    	<ul class="clearfix">
			    		<li><strong class="slideshow-nav1"><img src="http://shop.borderfree.com/assets/css/images/ico1.png" alt="" /> <span>Дата <br />Заезда</span></strong></li>
			    		<li><strong class="slideshow-nav2"><img src="http://shop.borderfree.com/assets/css/images/ico2.png" alt="" /> <span>Дата<br /> Выезда</span></strong></li>
			    		<li><strong class="slideshow-nav3"><img src="http://shop.borderfree.com/assets/css/images/ico3.png" alt="" /> <span>Цена<br /> Номера за сутки</span></strong></li>
			    		<li><strong class="slideshow-nav4"><img src="http://shop.borderfree.com/assets/css/images/ico4.png" alt="" /> <span>Класс<br /> Номера</span></strong></li>			    		
			    	</ul>
			    </div>
		    </div><!-- /.slideshow-navigation -->
		</div><!-- /.slideshow -->

		<div class="section-title">
			<div class="shell">
				<h2>Результаты поиска</h2>

				<i class="section-title-arrow"></i>
			</div><!-- /.shell -->
		</div><!-- /.section-title -->

		<div class="section">
			<div class="section-inner section-inner1">
				<div class="shell clearfix">
					<div class="mobile-visible main-image">
						<img src="http://shop.borderfree.com/assets/img/uploads/home-image1.jpg" alt="">
						<img src="http://shop.borderfree.com/assets/css/images/mobile1.jpg" class="mobile-image" alt="" />
					</div><!-- /.mobile-visible main-image -->
					
					<div class="section-entry">
						<h2>Эконом</h2>
							<h3>Одноместное размещение - 4750 руб./сутки</h3>
							<p>Общая площадь номера 45 кв.м.
							<p>2-х комнатный, 4-х местный</br>
							В номере: двухспальная кровать, две односпальные кровати и раскладной диван, кондиционер, ванна, фен, холодильник, телефон, телевизор. </p>
							<p class="buttons">
							<a href="http://shop.borderfree.com/stores" class="button" target="_blank">Забронировать номер <i></i></a>
							
						</p><!-- /.buttons -->
					</div><!-- /.section-entry -->

					<a href="" class="back-to-top">Вверх</a>
				</div><!-- /.shell -->
			</div><!-- /.section-inner -->
		</div><!-- /.section -->

    <div class="footer">
        <div class="shell clearfix">
            <div class="footer-navigation">
                <a href="http://shop.borderfree.com/" class="footer-logo">Golden Apple</a>
            </div><!-- /.footer-navigation -->

            <div class="socials">
                    <a href="http://www.facebook.com/borderfree" class="ico-facebook" target="_blank">facebook</a>
                    <a href="http://www.twitter.com/shopborderfree" class="ico-twitter" target="_blank">twitter</a>
                </div><!-- /.socials -->
                <p class="copy">Going global. Simplified.</p><!-- /.copy -->
            </div><!-- /.footer-entry -->
        </div><!-- /.shell -->
    </div><!-- /.footer -->     
</body>
</html>

