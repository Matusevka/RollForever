<?php
	include("../php/connect.php");
    if (isset($_POST["btn_reg"])) {
        $email = $link -> escape_string($_POST["email"]);
        $pass = $link -> escape_string($_POST["password"]);
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $code = md5($email.time());
        $regex = '/^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/';

        if (preg_match($regex, $email)) {

            $query = "SELECT COUNT(*) FROM users WHERE email='$email'";
            $result = $link -> query($query) or die("Ошибка регистрации");
            $data = $result -> fetch_assoc();

            if($data['COUNT(*)'] == '0'){
                $query = "INSERT INTO users (email,password,code) VALUES('$email','$pass', '$code')";
                $result = $link -> query($query) or die($link -> error);
                include 'php/sendMail.php';
                sendMail($email, $code);
                $err = "Сообщение отправленно на электронную почту";
            } else{
                $err = "Введённая вами электронная почта уже зарегистрирована";

            }

        } else{
            $err = "Неверный формат email";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Вычитаю 1000-7, я забираю пьедестал</title>
</head>

<?php require "../blocks/header.php" ?>

<body>
	<form action="" method="post">
        <div class="mb-3" style="margin: 5px;">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
			<input class="form-control" type="text" name="email" placeholder="Enter your text">
		</div>
        <div class="mb-3" style="margin: 5px;">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
			<input class="form-control" type="text" name="password" placeholder="Enter your text">
		</div>
		<button style="margin: 5px;" type="submit" class="btn btn-primary" name="btn_reg">Отправить</button>
	</form>
	<?php 
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'; echo $err; echo '</div>';
	?>
</body>

<?php require "../blocks/footer.php" ?> 

</form>
</html>
