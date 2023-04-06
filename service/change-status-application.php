<?php
	// старт сессии
	session_start ();
	// файл проверки авторизации
	include ("../include/auth.php");
	// подключение файла соединения с базой данной
	include ("../connect.php"); 

	// если статус заявки меняется на -Решена то загружаем изображение 
	// --> данные отправлены методом POST
	if (isset ($_POST["app_id"])) {



		// Запись полученных данных в переменные
		$app_id = $mysqli->real_escape_string (trim ($_POST["app_id"]));
		$status = $mysqli->real_escape_string (trim ($_POST["change"]));

		// Запрос на обновление данных заявки
		$update_app_sql = sprintf ("UPDATE `applications` SET `status` = '%s' WHERE `application_id`='%d'",
			$status, 
			$path, 
			$app_id
		);

		// Проверка выполнения запроса
		if (!$mysqli->query ($update_app_sql)) {
			header ("Location: ../admin.php?uid=" . $_SESSION['user_id'] . "&message=Ошибка изменения данных. ". $link->error);
			exit;
		}

		// В случае успеха выполнения запроса
		header ("Location: ../admin.php?uid=" . $_SESSION["user_id"] . "&message=Статус заявки изменён на 'Решена'");
		exit;
	}
	// если статус заявки меняется на -Отклонена то отправляем текст 
	// --> данные отправлены методом GET
	elseif(isset ($_GET["app_id"])) {
		// Запись полученных данных в переменные
		$app_id = $mysqli->real_escape_string (trim ($_GET["app_id"]));
		$status = $mysqli->real_escape_string (trim ($_GET["change"]));
		$rejection_reason = $mysqli->real_escape_string (trim ($_GET["rejection_reason"]));

		// Запрос на обновление данных заявки
		$update_app_sql = sprintf("UPDATE `applications` SET `status` = '%s', `rejection_reason`='%s' WHERE `application_id`='%d'",
			$status, 
			$rejection_reason, 
			$app_id
		);

		// Проверка выполнения запроса
		if (!$mysqli->query ($update_app_sql)) {
			header ("Location: ../admin.php?uid=" . $_SESSION["user_id"] . "&message=Ошибка изменения данных. ". $link->error);
			exit;
		}

		// В случае успеха выполнения запроса
		header ("Location: ../admin.php?uid=" . $_SESSION["user_id"] . "&message=Статус заявки изменён на 'Отклонена'");
		exit;
	}

?>