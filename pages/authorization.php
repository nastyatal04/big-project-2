<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .form {
            display: flex;
            flex-direction: column;
            justify-items: center;
            gap: 8px;
            width: 300px;
            padding: 8px 16px;
        }
        .form_label {
            display: flex;
            flex-direction: column;
            gap: 4px;
            font-size: 1.2rem;
            font-weight: bold;
            color: rgb(145, 85, 60);
        }
        .message {
        color: rgb(117, 115, 114);
        margin: 4px 8px;
        font-size: 1.25rem;
        }
        .form span {
            text-align: center;
        }
        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .inputs {
        padding: 4px;
        }
        .atr_btn {
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
        }
        .atr_btn:hover {
            background-color: rgb(194, 125, 98);
        }
        .atr_btn:focus {
            outline:none!important;
        }
    </style>
</head>
<body>
    <?showHeader();?>
    <div class="wrapper">
        <form action="" method="post" class="form" id="atr_form">
            <label for="" class="form_label">Логин<input type="text" name="login" id="login" class="inputs"></label>
            <label for="" class="form_label">Пароль<input type="text" name="password"  class="inputs"></label>
            <input type="submit" value="Войти" name="atr_btn" class="atr_btn">
            <span>Если Вы впервые на нашем сайте то <a href="registration.php">зарегестрируйтесть</a>.</span>
        </form>
    </div>
</body>
<!-- Ёмаё как это переделать -->
<script>
    $(document).ready(function() {
        // Обработчик отправки формы
        $('#atr_form').submit(function(event){
            event.preventDefault(); // Предотвращение стандартного поведения формы

            // Получение значения комментария из поля ввода
            var login = $('#login').val();
            var password = $('#password').val();
            
            // Отправка данных на сервер с помощью Ajax
            $.ajax({
                type: 'POST',
                url: 'authorization.php', // Файл на сервере для обработки данных
                data: { login: login, password: password }, // Данные для отправки
                success: function(response) {
                    // // Обновление блока с комментариями на странице
                    // $('#comments').append('<p>' + commentText + '</p>');
                    // $('#comment').val(''); // Очистка поля ввода
                }
            });
        });
    });
</script>
</html>
<?
    if(isset($_POST['atr_btn'])) {
        echo '<h3 class="message">Ткнулось</h3>';
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        if($login != "" && $password != "") {
            autorization($login, $password, $conn);
        }
    }
?>