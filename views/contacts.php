<?php 
	session_start();
	echo $_SESSION['userID'];
 ?>
 <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Контакты</title>
</head>
<body>

    <?php require "../blocks/header.php"  ?>

    <main>
            ...контакты...
    </main>

    <?php require "../blocks/footer.php"  ?>

</body>
</html>