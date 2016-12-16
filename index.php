<?php
    
    session_start();
    ?>
    <html>
    <head>
    <title>Главная страница</title>
    </head>
    <body>
    <h2>Главная страница</h2>
    <form action="testreg.php" method="post">

    
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>



 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>



    <p>
    <input type="submit" name="submit" value="Войти">


<br>

<a href="registration.html">Зарегистрироваться</a> 
    </p></form>
    <br>
    <?php

    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {


    echo "Вы вошли на сайт, как ".$_SESSION['login']."<br><a  href='test.html'>TEST</a>";
    }
    ?>
    </body>
    </html>