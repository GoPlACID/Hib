<?php
    
    session_start();
    ?>
    <html>
    <head>
    <title>������� ��������</title>
    </head>
    <body>
    <h2>������� ��������</h2>
    <form action="testreg.php" method="post">

    
 <p>
    <label>��� �����:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>



 
    <p>

    <label>��� ������:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>



    <p>
    <input type="submit" name="submit" value="�����">


<br>

<a href="registration.html">������������������</a> 
    </p></form>
    <br>
    <?php

    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {

    echo "�� ����� �� ����, ��� �����<br><a href='#'>��� ������  �������� ������ ������������������ �������������</a>";
    }
    else
    {


    echo "�� ����� �� ����, ��� ".$_SESSION['login']."<br><a  href='test.html'>TEST</a>";
    }
    ?>
    </body>
    </html>