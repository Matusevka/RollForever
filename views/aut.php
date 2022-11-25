<?php
	echo $_SESSION['userID'];
    if (isset($_POST["btn_login"])) {
        include("../php/connect.php");
        $email = $link -> escape_string($_POST["email"]);
        $pass = $link -> escape_string($_POST["password"]);

        
        $query = "SELECT id, email, password, status FROM users WHERE email='".$email."' LIMIT 1";
        $result = $link -> query($query) or die("Ошибка входа");
        $data = $result -> fetch_assoc();
        if ($data["status"] == 1) {
        	if(password_verify($pass, $data["password"])){
	            $_SESSION['userID'] = $data["id"];
	            header('Location: ../views/osnova.php');
	        } else{
	            $err = "Неверный логин или пароль";  
	        }
        } else{
        	$err = "Ваш аккаунт не активирован";
    	}
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>САСАЙТ</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="../css/form.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://use.fontawesome.com/f59744c84d.js"></script>
	<title>Enter</title>
</head>
<body>
	<?php require "../blocks/header.php"; echo ''  ?>
	<form action="" method="post">
		<div class="mb-3" style="margin: 5px;">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input class="form-control" type="text" name="email" placeholder="Enter your text">
		</div>

		<div class="mb-3" style="margin: 5px;">
			<label for="exampleInputEmail1" class="form-label">Password</label>
			<input class="form-control" type="text" name="password" placeholder="Enter your text">
		</div>

		<button style="margin: 5px;" type="submit" class="btn btn-primary" name="btn_login" type="submit">Отправить</button>
	</form>
	<?php 
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'; echo $err; echo '</div>';
	?>

<?php require "../blocks/footer.php"  ?>
</body>
</html>