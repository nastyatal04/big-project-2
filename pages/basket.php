<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <style>
        .title {
        margin: 8px 32px;
        color: rgb(145, 85, 60);
        font-size: 2rem;
      }
      .message {
        color: rgb(117, 115, 114);
        margin: 4px 8px;
        font-size: 1.25rem;
      }
      .basket-footer {
        width: 30%;
        margin: 4px auto;
      }
      .itog {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 4px 0;
      }
      .line {
        margin: 16px auto;
        border-top: 2px solid rgb(171, 183, 219);
        width: 55%;
      }
      .basket-btn {
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
        margin: 4px 0;
      }
      .basket-btn:hover {
        background-color: rgb(194, 125, 98);
      }
      .basket-container {
        display: flex;
        flex-direction: column;
        gap: 8px;
        align-items: center;
        justify-content: center;
      }
    </style>
</head>
<body>
  <?showHeader();?>
  <div class="basket-container">
    <?
      if(!isset($_SESSION['basket'])) {
          echo '<h3 class="message">Здесь пока нет товаров...</h3>';
      }
      else {
        print_r($_SESSION['basket']);
        cartFilling($conn);
        echo "<div class='line'></div>
        <div class='basket-footer'>
        <h1 class='title'>Итого:</h1>
        <div class='itog'><span><b>Количество товаров</b></span><span>".$_SESSION['total_count']."</span></div>
        <div class='itog'><span><b>Сумма</b></span><span>$".$_SESSION['total_price']."</span></div>
        <form action='' method='post' class='itog'>
          <input type='submit' value='Очистить корзину' name='delet_bas' class='basket-btn'>
          <div class='basket-btn'>Оформить заказ</div>
        </form>";
      }
    ?>   
  </div>
</body>
</html>

<?
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $id = $_REQUEST['id_inp'];
  $price = $_REQUEST['price'];
  if(isset($_POST['min_btn'])) {
      $_SESSION['basket'][$id]--;
      $_SESSION['total_count']--;
      $_SESSION['total_price'] -= $price;
      if($_SESSION['basket'][$id] == 0) {
        unset($_SESSION["basket"][$id]);
      }
      echo "Уменьшили количесво товара на -1 для ".$id.", теперь товара ".$_SESSION['basket'][$id];
  }
  if(isset($_POST['pls_btn'])) {
    $_SESSION['basket'][$id]++;
    $_SESSION['total_count']++;
    $_SESSION['total_price'] += $price;
    echo "Увеличили количесво товара на +1 для ".$id.", теперь товара ".$_SESSION['basket'][$id];
  }
  if(isset($_POST['delet_bas'])) {
    session_destroy();
    $_SESSION['total_count'] = 0;
    $_SESSION['total_price'] = 0;
  }
  if(isset($_POST['del_prd_btn'])) {
    $_SESSION['total_count'] -= $_SESSION["basket"][$id];
    $_SESSION['total_price'] -= $_SESSION["basket"][$id] * $price;
    unset($_SESSION["basket"][$id]); 
    echo "Удалили товар ".$id;
  }
}
?>