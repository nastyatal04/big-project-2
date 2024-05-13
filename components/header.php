<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: monospace;
      }
      .header-menu {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: rgb(230, 194, 179);
        margin: 0;
        padding: 4px 16px;
      }
      .header-btn {
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
      }
      .header-btn:hover {
        background-color: rgb(194, 125, 98);
      }
    </style>
  </head>
  <body>
    <div class="header-menu">
      <p>
        <a href="index.php" class="header-btn">Главная</a>
        <a href="reviews.php" class="header-btn">Отзывы</a>
        <a href="catalog.php" class="header-btn">Каталог</a>
        <a href="basket.php" class="header-btn">Корзина</a>
      </p>
      <p>
        <?
        if(isset($_COOKIE['name'])) {
          echo "<a href='login.php' class='header-btn'>".$_COOKIE['name']."</a>";
        } else {
          echo "<a href='authorization.php' class='header-btn'>Войти</a>";
        }
        ?>        
      </p>
    </div>
  </body>
</html>
<? session_start();?>