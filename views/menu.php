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
    <link rel="stylesheet" href="../css/menu.css">

    <title>Меню</title>
</head>

<body>
        
    <?php require "../blocks/header.php"  ?>

    <main>
        <script src="../js/button.js"></script>
        <h3>...меню...</h3>
        <table class="obmenu">
            <tbody>
                <tr>
                    <td>
                        <a href="../contacts/contacts.html">
                            <h6>Японская кухня</h6>
                        </a>
                    </td>

                    <td>
                        <a href="../new/new.html">
                            <h6>Китайская кухня</h6>
                        </a>
                    </td>

                    <td>
                        <a href="../stock/stock.html">
                            <h6>Корейская кухня</h6>
                        </a>
                    </td>
                        
                </tr>

                <tr>
                    <td>
                        <a href="../contacts/contacts.html">
                            <div class="kartinochki_krug"><img src="https://i.pinimg.com/originals/b1/56/7c/b1567cfabe2c6d8d3c5f591a5ed8537b.jpg" height="226px" width="226px"></div>
                        </a>
                    </td>
                    <td>
                        <a href="../new/new.html">
                            <div class="kartinochki_krug"><img src="https://kartinkin.net/uploads/posts/2021-07/1626348258_34-kartinkin-com-p-blyuda-kitaiskoi-kukhni-yeda-krasivo-foto-39.jpg" height="226px" width="226px"></div>
                        </a>
                    </td>
                    <td>
                        <a href="../stock/stock.html">
                            <div class="kartinochki_krug"><img src="https://i.pinimg.com/564x/ea/7a/8e/ea7a8ee85c621b10e56bb2730d9a3f3c.jpg" height="226px" width="226px"></div>
                        </a> 
                    </td>
                    
                </tr>

                <tr>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                </tr>
                    
                <tr>
                    <td>
                        <a href="../stock/stock.html">
                            <h6>Паназиатская кухня</h6>
                        </a>
                    </td>
                    <td>
                        <a href="../stock/stock.html">
                            <h6>Европейская кухня</h6>
                        </a>
                    </td>
                    <td>
                        <a href="../stock/stock.html">
                            <h6>Русская кухня</h6>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="../contacts/contacts.html">
                            <div class="kartinochki_krug"><img src="https://sun9-63.userapi.com/impg/c858216/v858216593/103c8e/bn71Tzo3rjY.jpg?size=529x469&quality=96&sign=0af589938d2c9a2f781a9eccd9a9b273&type=album" height="226px" width="226px"></div>
                        </a>
                    </td>
                    <td>
                        <a href="../contacts/contacts.html">
                            <div class="kartinochki_krug"><img src="https://i.pinimg.com/originals/ea/d4/88/ead488b608a1d040a7b36f85d2888576.jpg" height="226px" width="226px"></div>
                        </a>
                    </td>
                    <td>
                        <a href="../contacts/contacts.html">
                            <div class="kartinochki_krug"><img src="https://i.pinimg.com/564x/02/20/2b/02202be399e051f18a797ee13db8be7e.jpg" height="226px" width="226px"></div>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="../contacts/contacts.html">
                            <h6>Напитки</h6>
                        </a>
                    </td>
                    <td>
                        <a href="../new/new.html">
                            <h6>Десерты</h6>
                        </a>
                    </td>
                    <td>
                        <a href="../stock/stock.html">
                            <h6>Соусы</h6>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <a href="../contacts/contacts.html">
                            <div class="kartinochki_krug"><img src="https://avatars.dzeninfra.ru/get-zen_doc/5232749/pub_6364bdb84bc7e8299112b796_6364be8a4bc7e8299113518f/scale_1200" height="226px" width="226px"></div>
                        </a>
                    </td>
                    <td>
                        <a href="../new/new.html">
                            <div class="kartinochki_krug"><img src="https://i.pinimg.com/736x/fd/38/03/fd38030bedc086ba06f0cd801c8a3fd4.jpg" height="226px" width="226px"></div>
                        </a> 
                    </td>
                    <td>
                        <a href="../stock/stock.html">
                            <div class="kartinochki_krug"><img src="https://kambey.ru/netcat_files/366/sousy_0.jpg" height="226px" width="226px"></div>
                        </a> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                    <td>
                        <button class="button-primary plus" data-id="dfg"></button>
                        <button class="button-primary minus" data-id="dfg"></button>
                    </td>
                </tr>
                    
            </tbody>
               
        </table>
                        <!--        <li>
                                        <img src="https://kambey.ru/netcat_files/343/pitstsa.jpg">
                                    </li>
                                    <li>
                                        <img src="https://kambey.ru/netcat_files/343/pitstsa.jpg">
                                    </li>
                                    <li>
                                        <img src="https://kambey.ru/netcat_files/343/pitstsa.jpg">
                                    </li> -->
    </main>
    
    <?php require "../blocks/footer.php"  ?>

</body>
</html>