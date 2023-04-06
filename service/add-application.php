<?php
	// старт сессии
	session_start ();
	// файл проверки авторизации
	include ("../include/auth.php");
	// подключение файла соединения с базой данной
	include ("../connect.php"); 	


	
	// запись полученных данных формы в переменные
	$title = $mysqli->real_escape_string (trim ($_REQUEST["title"]));
	$description = $mysqli->real_escape_string (trim ($_REQUEST["description"]));
	$category = $mysqli->real_escape_string (trim ($_REQUEST["category"]));


	// запрос на добавление данных в базу
	$insert_sql = sprintf ("
		INSERT INTO `applications`(`user_id`, `title`, `description`, `category`, `status`) VALUES 
		('%s', '%s', '%s', '%s', '%s')",
		$_SESSION["user_id"],
		$title,
		$description,
		$category,
		$path,
		"Новая"
	);

	// выполняем запрос на вставку
	if (!$mysqli->query ($insert_sql)) {
		header ("Location: ../personal-cabinet.php?uid=". $_SESSION['user_id'] ."&message=Ошибка вставки данных. ". $mysqli->error);
		exit;
	}

	header ("Location: ../personal-cabinet.php?uid=". $_SESSION['user_id'] ."&message=Заявка создана");
	exit;