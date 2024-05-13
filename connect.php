<?
$conn = new mysqli('localhost', 'root', '', 'mydb');
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>