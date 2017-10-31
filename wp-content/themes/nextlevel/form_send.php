<?php 

	$result = mail("next_level203@ukr.net", "Заявка с сайта Next Level", 
		"Данные о клиенте:
		Имя клиента: $_POST[name]
		Телефон клиента: $_POST[phone]
		Комментарий клиента: $_POST[comments]");

	if ($result) {
		echo "<p>Заявка успешно отправлена!</p><br><a href='/'>Вернуться на Главную</a>";
	}
	else {
		echo "<p>Заявка НЕ отправлена, попробуйте ещё раз позже. </p>";
	}
?>