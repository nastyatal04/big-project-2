<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
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
        .rev-btn {
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
      }
      .rev-btn:hover {
        background-color: rgb(194, 125, 98);
      }
      .rev-btn:focus {
        outline:none!important;
      }
      textarea {
        resize: vertical;
      }
      .inputs {
        padding: 4px;
      }
    </style>
</head>
<body>
    <?showHeader();?>
    <?showTitle("Добавить свой отзыв");?>
    <form action="" method="post" class="form">
        <label for="" class="form_label">Имя<input type="text" name="name" class="inputs"></label>
        <label for="" class="form_label">Телефон<input type="text" name="phone" class="inputs"></label>
        <label for="" class="form_label">Отзыв<textarea type="text" name="feedback" class="inputs"></textarea></label>
        <input type="submit" name="rev_add" class="rev-btn">
    </form>
    <?showTitle("Отзывы наших покупателей");?>
    <?
        if(isset($_POST['rev_add'])) {
            reviewsAdd($conn, $_POST['name'],$_POST['phone'],$_POST['feedback']);
        }
        reviewsFilling($conn);

    ?>
</body>
</html>
