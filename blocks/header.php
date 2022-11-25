<header>
    <div>
        <a href="../views/osnova.php">
            <img src="../media/logo.png" height="100px" alt="Лого">
        </a>
        <img src="https://cdn-icons-png.flaticon.com/512/733/733497.png" height="20px" alt="ик_зв">
        <h2>(914)892-52-48</h2>
    </div>
    <nav class="nado_tak">
        <a href="../views/menu.php"><span>Меню</span></a>
        <a href="../views/new.php"><span>Новости</span></a>
        <a href="../views/stock.php"><span>Акции</span></a>
        <a href="../views/contacts.php"><span>Контакты</span></a>
    <?php
        if (empty($_SESSION['userID'])){
            echo '<a href="../views/reg.php"><span>Регистрация</span></a>
            <a href="../views/aut.php"><span>Авторизазазаза</span></a>';
        } 
        if (!empty($_SESSION['userID'])){
            echo '<a href="../php/exit.php"><span>Выход</span></a>';
        }
    ?>
    </nav>
</header>