<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-basket {
        display: flex;
        flex-direction: row;
        gap: 24px;
        padding: 16px;
        border-radius: 8px;
        width: 50%;
        font-size: 1rem;
        border: 1px solid rgb(171, 183, 219);
        border-radius: 8px;
      }
      .card-basket img {
        aspect-ratio: 1/1;
        object-fit: cover;
        border-radius: 8px;
        width: 130px;
      }
      .btn-container {
        display: flex;
        flex-direction: row;
        gap: 8px;
        font-size: 1rem;
        align-items: center;
      }
      .znack-btn {
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 8px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
        height: 40px;
        width: 40px;
        border: 0;
        outline: 0;
        font-size: 1rem;
      }
      .znack-btn:focus {
        outline:none!important;
      }
      .znack-btn:hover {
        background-color: rgb(194, 125, 98);
      }
      .card-basket .count {
        padding: 8px;
        font-weight: bold;
      }
      .card-basket .name {
        font-weight: bold;
        color: rgb(145, 85, 60);
      }
      .card-basket .price {
        font-weight: bold;
        margin: 0 16px;
      }
      .info-basket {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
        align-items: center;
      }
      .btn_wrapper {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
      }
      .negativ_btn {
        color: rgb(215, 149, 122);
        font-weight: bold;
        text-align: center;
        padding: 8px;
        border-radius: 8px;
        background-color: white;
        cursor: pointer;        
        width: max-content;
        border: 0;
        outline: 0;
        font-size: 1rem;
      }      
      .negativ_btn:focus {
        outline:none!important;
      }
      .negativ_btn:hover {
        background-color: rgb(255, 244, 240);
      }
    </style>
</head>
<body>    
  <form action="../pages/basket.php" method="post" class="card-basket">
    <img
        src="<?echo $image;?>"
        alt=""
    />
    <div class="info-basket">
        <div>
            <div class="name"><?php echo $title;?></div>
            <div class="color"><?echo $descriptions;?></div>
        </div>
        <div class="price" name="price">$<?echo $price;?></div>
    </div>
    <div class="btn_wrapper">
      <div  class="btn-container">
          <?echo "<input type='hidden' name='id_inp' value=".$id.">";?>
          <input type='submit' value='-' name='min_btn' class="znack-btn">
          <div class="count"><?echo $count;?></div>
          <input type='submit' value='+' name='pls_btn' class="znack-btn">
      </div>
      <input type='submit' value='Удалить товар' name='del_prd_btn' class="negativ_btn">
    </div>    
  </form>
</body>
</html>

