<?
require_once "connect.php";
function catalogFilling ($conn){
    $sql = "SELECT * FROM `products`";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $image = $row['image'];
            $descriptions = $row['descriptions'];
            require 'components\card.php';
        }
    }
}
function reviewsFilling ($conn) {
    $sql = "SELECT * FROM `reviews`";
    if($result = $conn->query($sql)){
        while($row = $result->fetch_array()){
            $name = $row['name'];
            $phone = $row['phone'];
            $review = $row['review'];
            require 'components\review_card.php';
        }
    }
}
function reviewsAdd($conn, $name, $phone, $review) {
    if(isset($name) && isset($phone) && isset($review)) {
        $sql = "INSERT INTO `reviews` (`id`, `name`, `phone`, `review`) VALUES (NULL, '$name', '$phone', '$review');";
        mysqli_query($conn, $sql);
    }
}
function cartFilling ($conn) {
    $_SESSION['total_price'] = 0;
    foreach ($_SESSION['basket'] as $key => $value) {
        $sql = "SELECT * FROM `products` WHERE `id`='$key';";
        if($result = $conn->query($sql)) {
            while($row = $result->fetch_array()) {
                $id = $row['id'];
                $title = $row['title'];
                $price = $row['price'];
                $image = $row['image'];
                $descriptions = $row['descriptions'];
                $count = $value;
                $_SESSION['total_price'] += $price * $count;
                require 'components\basket_card.php';
            }
        }
    }
}

function showTitle ($title) {
    require '..\components\title.php';
}

function showHeader () {
    //Добавить, чтобы имя высвечивалось или кнопка войти
    require '..\components\header.php';
}

function registration($name, $email, $phone, $login, $password, $conn) {
    $sql = "SELECT * FROM `users` WHERE `name`='$name' AND `email`='$email' AND `phone`='$phone' AND `login`='$login' AND `password`='$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        $sql = "INSERT INTO `users`(`id`, `name`, `email`, `phone`, `login`, `password`) VALUES (NULL,'$name','$email','$phone','$login','$password')";
        if($result = $conn->query($sql)) {
            header("Location: http://localhost/big_project/pages/index.php");
        }        
    }
    else {
        echo "<div class='message'>Такой пользователь уже есть в базе.</div>";
    } 
}

function autorization($login, $password, $conn) {
    $sql = "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
        echo "<div class='message'>Такого пользователя нет в базе.</div>";
    } else {
        while($row = $result->fetch_array()){
            // setcookie("name", $row['name'], time() + 3600 * 4);
            // setcookie("email", $row['email'], time() + 3600 * 4);
            // setcookie("phone", $row['phone'], time() + 3600 * 4);
            // setcookie("login", $row['login'], time() + 3600 * 4);
            // setcookie("password", $row['password'], time() + 3600 * 4);
            echo "<div class='message'>". $_COOKIE['name'] ."</div>";
        }
        header("Location: index.php");
    }
}

function countProducts() {
    $total = 0;
    foreach($_SESSION['basket'] as $value) {
        $total += $value;
    }
    return $total;
}
?>