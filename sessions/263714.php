<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit">
    </form>
</body>
</html>
<?
    // session_start();
    // if(!isset($_SESSION['people'])) {
    //     $_SESSION['people']=[];
    // }
    // if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $name = $_POST['name'];
    //     $surname = $_POST['surname'];
    //     $person = ['name' => $name, 'surname' = $surname];
    //     $_SESSION['people'][] = $person;
    // }
    // header("Location: display.php");//для перехода на другую страницу

    session_start();

    if(!isset($_SESSION['numbers'])) {
        $_SESSION['numbers']=[];
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = $_POST['number'];
        echo ($number % 2 == 0)?$number." чётное<br/>":$number." не чётное<br/>";
        if(in_array($number, $_SESSION['numbers'])) {
            echo "Такое число уже вводилось.<br/>";
        } else {
            $_SESSION['numbers'][] = $number;
            echo "Такое число вводится в первый раз.<br/>";
        }
        print_r($_SESSION['numbers']);
        echo "<br/>";
    }
    
?>