<?php 

session_start();

unset($_SESSION['user']);


$come_from = $_SERVER['HTTP_REFERER'];


///抓url為“member.php";
$catch_page = substr(strchr($_SERVER['HTTP_REFERER'], "m"),0,10);



if ($catch_page == 'member.php'){

    ///在會員中心登出時，回到首頁
    header("Location: index.php");


}
else{

   header("Location: $come_from");
    
 }


?>