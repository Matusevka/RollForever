<?php
	include 'connect.php';
	if (!empty($_GET["code"])) {
		$code = $link -> escape_string($_GET["code"]);
		$query = "SELECT email FROM users WHERE code='$code'";
		$reslut = $link -> query($query) or die($link -> error);
		if (mysqli_num_rows($reslut) > 0) {
			$query = "SELECT email FROM users WHERE code='$code' and status='0'";
			$reslut = $link -> query($query) or die($link -> error);
			if (mysqli_num_rows($reslut) == 1){
				$query = "UPDATE users SET status='1' WHERE code='$code'";
				$reslut = $link -> query($query) or die($link -> error);
				header('Location: ../views/osnova.php');
				exit();
				echo "Ваш аккаунт активирован"; 
				
			} else {
				echo "Ваш аккаунт уже активирован, нет необходимости активировать его снова.";
			}
		} else{
 			echo "Неверный код активации.";
 		}
	}
?>
<div class="activation">
	<H1><?php $msg ?></H1>
	<a href="../views/osnoca.php">Перейти на главную </a>
</div>