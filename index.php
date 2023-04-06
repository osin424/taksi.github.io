<?php
	// cтарт сессии
	session_start();	
	// подключение файла соединения с базой данной
	include ("connect.php"); 
	// подключаем сервисные функции
	include ("service/func.php");
?>
<!-- подключение файла Хедера --> 
<?php include ("include/header.php"); ?> 

<div class="info">
	<h1 class="info_head">Немного о компании</h1>
	<div class="info_txt">Наш сайт заказа городского такси – это удобный и надежный способ быстро добраться до места назначения в городе. Мы предоставляем услуги по вызову такси любой категории: от эконом до бизнес класса.

Оформление заказа на нашем сайте займет всего несколько минут: введите свой адрес отправления и прибытия, выберите марку и класс автомобиля, укажите количество пассажиров и время подачи – и готово!В нашем автопарке – только современные автомобили, оснащенные системами безопасности и комфорта. Водители – опытные и вежливые профессионалы, которые всегда довезут вас до места назначения без задержек и пробок.
<br>
Мы ценим ваше время и комфорт, поэтому предоставляем услугу безналичной оплаты, а также возможность отслеживания маршрута вашей поездки в реальном времени.

Заказывая такси на нашем сайте, вы можете быть уверены в качестве предоставляемых услуг – мы всегда на связи и готовы помочь вам в любой ситуации. Доверьтесь нам и наслаждайтесь комфортом и безопасностью в своих поездках по городу!</div>
</div>

<div class="info_banners">
	<div class="info_banner">
		<img src="images/banner1.png" alt="bn1">
		<div class="info_banner_txt">Закажите такси</div>
	</div>
	<div class="info_banner" style="margin-left: 2%;">
		<img src="images/banner2.png" style="margin-top: 25%; margin-bottom: 7%; width: 80%;" alt="bn2">
		<div class="info_banner_txt">Свободное такси приедет к вам как можно быстрее</div>
	</div>
	<div class="info_banner" style="margin-left: 2%;">
		<img src="images/banner3.png" style="margin-top: -2%;" alt="bn3">
		<div class="info_banner_txt">Мы доставим вас в любую точку города</div>
	</div>
</div>

	<main onload="onload_page()">
		<div class="content">
			
			<div class="heading">Отзывы</div>
			<div class="container_1">
  <img src="images/avatar-female.png" style="width: 20%;" alt="avatar">
  <p><span>Марина Белова</span> judgh@email.ru</p>
  <p>Такси приехало быстро!</p>
</div>
<div class="container_1">
  <img src="images/avatar-male.png" style="width: 20%;" alt="avatar">
  <p><span>Алексей Фролов</span> gadgas@email.ru</p>
  <p>Очень удобный сайт для заказа такси!</p>
</div>
			<!-- последние решённый заявки -->
			

			<?php 
				// подключаем формы
				include ("include/form_reg.php");
				include ("include/form_login.php");
			?>

		</div>
	</main>

<!-- подключение файла Футера -->
<?php include ("include/footer.php") ?>