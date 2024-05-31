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
    <form action="" method="POST" class="form" id="atr_form">
        <input type="submit" value="Выход" name="log_btn" class="log_btn">
        <div>
            Имя <?echo $_COOKIE['name'];?>
        </div>
    </form>
</body>
</html>

<?
    if(isset($_POST['log_btn'])){
        delCoockie();
    }    
?>