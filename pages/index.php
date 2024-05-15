<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>
<body>
    <?showHeader();?>
    <?showTitle("Супер-пупер-распупенная главная страница");?>
</body>
</html>
<!-- <?

// if(isset($_GET['delete_cookie']) && $_GET['delete_cookie'] == 'true'){
//     echo "<div class='message'>УУУУУ, бляха.</div>";
//     setcookie("name", null,-1,'/');
//     setcookie("email", null,-1,'/');
//     setcookie("phone", null,-1,'/');
//     setcookie("login", null,-1,'/');
//     setcookie("password", null,-1,'/');

//     echo($_COOKIE['name']);
// } 
?> -->