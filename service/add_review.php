<?php
	// старт сессии
	session_start ();
	// файл проверки авторизации
	include ("../include/auth.php");
	// подключение файла соединения с базой данной
	include ("../connect.php"); 


// Получаем данные из формы
$name = $mysqli->real_escape_string(trim($_REQUEST['name'])); // получаем имя
$email = $mysqli->real_escape_string(trim($_REQUEST['email'])); // получаем email
$message = $mysqli->real_escape_string(trim($_REQUEST['message'])); // получаем сообщение

// Готовим запрос в базу данных


$insert_sql = sprintf ("
		INSERT INTO `reviews`(`id`,`name`, `email`, `message`) VALUES 
		('%s', '%s', '%s', '%s')",
        $_SESSION["id"],
		$name,
		$email,
		$message
		

	);



// Выполняем запрос
if (!$mysqli->query ($insert_sql)) {
    header ("Location: ../personal-cabinet.php?uid=". $_SESSION['id'] ."&message=Ошибка вставки данных. ". $mysqli->error);
    exit;
}



header ("Location: ../personal-cabinet.php?uid=". $_SESSION['id'] ."&message=Заявка создана");
exit;