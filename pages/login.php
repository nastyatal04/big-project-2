<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
        .log_btn {
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 8px 24px;
            border-radius: 8px;
            background-color: rgb(215, 149, 122);
            cursor: pointer;
            font-size: 1.25rem;
            text-decoration: none;
            width: max-content;
            border: 0;
            outline: 0;
            margin: 0 auto;
            text-decoration: none;
        }
        .log_btn:hover {
            background-color: rgb(194, 125, 98);
        }
        .atrlog_btn_btn:focus {
            outline:none!important;
        }
    </style>
</head>
<body>
    <?showHeader();?>
    <?showTitle("Личный кабинет")?>
    <form action="" method="post" class="form" id="atr_form">
        <a href="login.php?delete_cookie=true" name="log_btn" class="log_btn">Выход</a>
        <!-- <input type="submit" value="Выход" name="log_btn" class="log_btn"> -->
        <div>
            Имя <?echo $_COOKIE['name'];?>
        </div>
    </form>
</body>
</html>
<?
echo '<a href="login.php?del=true">удалить</a>';
echo '</br></br>';
echo '<a href="login.php?del=false">создать</a>';
echo '</br>';

if($_GET['del'] == 'true' ){
    setcookie("aaa", '',time()-3600,'/');
    // setcookie("email1", '',time()-3600,'/');
    // setcookie("phone1", '',time()-3600,'/');
    // setcookie("login1", '',time()-3600,'/');
    // setcookie("password1", '',time()-3600,'/');
    echo "куки удалены!";
}
if($_GET['del'] == 'false' ){
    setcookie("aaa", 'Name', time() + 3600 * 4);
    // setcookie("email1", 'email', time() + 3600 * 4);
    // setcookie("phone1", 'phone', time() + 3600 * 4);
    // setcookie("login1", 'login', time() + 3600 * 4);
    // setcookie("password1", 'password', time() + 3600 * 4);
}
    echo $_COOKIE['aaa'];
    
?>
<?

?>
<?
// if(isset($_POST['log_btn'])){
//     echo "<div class='message'>УУУУУ, бляха.</div>";
//     unset($_COOKIE['name']);
//     unset($_COOKIE['email']);
//     unset($_COOKIE['phone']);
//     unset($_COOKIE['login']);
//     unset($_COOKIE['password']);
    // setcookie("name", null,-1,'/');
    // setcookie("email", null,-1,'/');
    // setcookie("phone", null,-1,'/');
    // setcookie("login", null,-1,'/');
    // setcookie("password", null,-1,'/');

    // echo $_COOKIE['name'];
//} 
?>