<?
// echo '<a href="Untitled-1.php?del=true">удалить</a>';
// echo '</br></br>';
// echo '<a href="Untitled-1.php?del=false">создать</a>';
// echo '</br>';

// if($_GET['del'] == 'true' ){
    // setcookie('authorized', 123, time() + (7 * 24 * 60 * 60), '/');
    // setcookie("email1", '',time()-3600,'/');
    // setcookie("phone1", '',time()-3600,'/');
    // setcookie("login1", '',time()-3600,'/');
    // setcookie("password1", '',time()-3600,'/');
    // echo "куки удалены!";
// }
// if($_GET['del'] == 'false' ){
    setcookie('authorized', '',time()-3600,'/');
    // setcookie("email1", 'email', time() + 3600 * 4);
    // setcookie("phone1", 'phone', time() + 3600 * 4);
    // setcookie("login1", 'login', time() + 3600 * 4);
    // setcookie("password1", 'password', time() + 3600 * 4);
// }
    echo $_COOKIE['authorized'];
    
?>