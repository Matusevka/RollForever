<?php
	function sendMail($to, $code)
	{
		$msg = "Перейдите по ссылке для подтверждения аккаунта \n http://localhost/Сайт_v3/php/activation.php?code=".$code;
		$subject = "Подтверждение аккаунта";
		mail($to, $subject, $msg);
	}
?>