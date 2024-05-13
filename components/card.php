<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <style>
      .container {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        font-size: 1rem;
        margin: 8px 40px;
      }
      .card {
        display: flex;
        flex-direction: column;
        padding: 16px;
        border: 1px solid rgb(171, 183, 219);
        border-radius: 8px;
        width: 250px;
        gap: 8px;
      }
      .card img {
        aspect-ratio: 1/1;
        object-fit: cover;
        border-radius: 8px;
      }
      .footer {
        display: flex;
        flex-direction: column;
        gap: 8px;
      }
      .card .name {
        font-weight: bold;
        color: rgb(145, 85, 60);
      }
      .card .price {
        font-weight: bold;
      }
      .info {
        display: flex;
        justify-content: space-between;
      }
      .btnn {
        color: white;
        font-weight: bold;
        width: 230px;
        margin: 0 auto;
        text-align: center;
        padding: 8px;
        border-radius: 8px;
        background-color: rgb(215, 149, 122);
        cursor: pointer;
        border: 0;
        outline: 0;
      }
      .btnn:hover {
        background-color: rgb(194, 125, 98);
      }      
      .btnn:focus {
        outline:none!important;
      }
      .title {
        margin: 8px 32px;
        color: rgb(145, 85, 60);
        font-size: 2rem;
      }
    </style>
</head>
<body>
      <div class="card">
        <img
          src="<?echo $image;?>"
          alt=""
        />
        <div class="footer">
          <div class="info">
            <div class="name"><?php
            echo $title;
        ?></div>
            <div class="price">$<?echo $price;?></div>
          </div>
          <div class="color"><?echo $descriptions;?></div>
        </div>
        <form action="../pages/catalog.php" method="post">
          <?echo "<input type='hidden' name='id_inp' value=".$id.">";?>
          <input type="submit" value="Купить" name="buy" class="btnn">
        </form>
      </div>
</body>
</html>

