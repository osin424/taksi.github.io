<!DOCTYPE html>
<html lang=ru>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Такси</title>
		<!-- подключение файла стилей -->
		<link rel="stylesheet" href="pick.css">
		<!-- подключение файлов скриптов -->
		<!-- для удобства скрипты вынесены в отдельные файлы -->
		<!-- скрипт носит имя файла в котором используется -->
		<script src="./script/index.js"></script>
		<script src="./script/personal-cabinet.js"></script>
		<script src="./script/admin.js"></script>

	<link href="../style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="../slider.css" rel="stylesheet" type="text/css" media="all" />
	<script src="script/jquery.min.js"></script>
	<script type="text/javascript" src="script/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="script/camera.min.js"></script>
	<script type="text/javascript">
		jQuery(function () {
			jQuery('#camera_wrap_1').camera({
				height: '500px',
				pagination: false,
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	</head>
	<body>
	<div class="slider">
		<div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
			<div data-src="images/slider3.jpg"> </div>
			<div data-src="images/slider2.jpg"> </div>
			<div data-src="images/slider1.jpg"> </div>
			<div data-src="images/slider2.jpg"> </div>
		</div>
		<div class="clear"> </div>
	</div>
		<!-- logo сайта -->
		<div class="logo"><img src="logo/logotype.png" alt="logotype"></div>
		<header>
			<div class="content">
				<!-- подключение файла меню -->
				<?php include ("menu.php"); ?>
			</div>
		</header>
		<div class="message">
			<!-- вывод сообщений о действиях пользователя (в случае его наличия) -->
			<?php if (isset ($_GET["message"])) print ($_GET["message"]); ?>
		</div>