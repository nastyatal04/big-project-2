<?php
require_once "../connect.php";
require_once "../functionsProduct.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
</head>
<body>
    <?showHeader();?>
    <h1 class="title">Каталог товаров</h1>
    <div class="container">
        <?php
            catalogFilling($conn);
        ?>
    </div>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $id = $_REQUEST['id_inp']; 
  if(!isset($_SESSION['basket'])) {
      $_SESSION['basket']=[];
      $_SESSION['total_count'] = 0;
  }
  if(isset($_POST['buy'])) {
    if (isset($_SESSION['basket'][$id])) {
          $_SESSION['basket'][$id]++;
      } else {
          $_SESSION['basket'][$id] = 1;

      }
      $_SESSION['total_count']++;
    // $flag = true;
    // foreach ($_SESSION['basket'] as &$product) {
    //     if($product['id'] == $id) {
    //     $product['count'] += 1;
    //     $flag = false;
    //     echo "<div class='message'>Товар " .$product['id'].", количество ".$product['count'].", ФЛАГ = ".$flag."</div>";
    //     break;
    //   } 
    // }
    // //Если такого товара ещё нет в корзине или она пуста, то добавляем его в массив корзины с количеством = 1
    // if($flag){      
    //   $count = 1;
    //   $product = [
    //     "id" => $id,
    //     "count" => $count
    //   ];
    //   $_SESSION['basket'][] = $product;
    //   echo "<div class='message'>В корзину добавлен новый товар" .$product['id'].", количество ".$product['count'].", ФЛАГ = ".$flag."</div>";
    // }
  }
}
?>