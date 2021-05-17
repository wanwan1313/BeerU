<?php
include __DIR__ . '../../php/common/config.php' ;

use PHPMailer\PHPMailer\PHPMailer;

include __DIR__ . ' ../../PHPMailer/src/Exception.php';
include __DIR__ .' ../../PHPMailer/src/PHPMailer.php';
include __DIR__ . ' ../../PHPMailer/src/SMTP.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


// 檢查是否已註冊
$a_sql = "SELECT `email` FROM `member` WHERE `email`=?";
$a_stmt = $pdo->prepare($a_sql);
$a_stmt->execute([ $_POST['newAccount'] ]);

if($a_stmt->rowCount()){

    $output['error'] = '此 email 已經註冊過';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit();  // 程式結束



}else{


    //生成6位隨機驗證碼
    function codestr(){
        $arr=array_merge(range('a','b'),range('A','B'),range('0','9'));
        shuffle($arr);
        $arr=array_flip($arr);
        $arr=array_rand($arr,6);
        $res='';
        foreach ($arr as $v){
            $res.=$v;
    }
    return $res;
    }


    //寄送驗證碼
    $m_newAccount = $_POST['newAccount'];
    $m_newPassword = $_POST['newPassword'];
    $m_nickname= $_POST['nickname'];


    $mail= new PHPMailer();//建立新物件
    $mail->IsSMTP(); //設定使用SMTP方式寄信
    $mail->SMTPAuth = true;//設定SMTP需要驗證
    $mail->SMTPSecure = "ssl";// Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com";//Gamil的SMTP主機
    $mail->Port = 465;//Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8";  //郵件編碼
    $mail->Username = "beeru0516@gmail.com"; //Gamil帳號
    $mail->Password = "beerUtaiwan0516"; //Gmail密碼
    $mail->From = "beeru0516@gmail.com"; //寄件者信箱
    $mail->FromName = "BeerU"; //寄件者姓名

    $mail->Subject ="BeerU啤女註冊e-mail驗證"; //郵件標題


    $check_code = codestr();

    $mail->Body = "<h4>歡迎新成員：</h4>".$m_nickname."<br/><h4>您的啤女帳號：</h4>".$m_newAccount."<br /><h4>請輸入驗證碼驗證帳號：</h4>".$check_code; //郵件內容


    $mail->IsHTML(true);   //郵件內容為html
    $mail->AddAddress("$m_newAccount");//收件者郵件及名稱




    if(!$mail->Send()  ){
    
        $output['error'] = 'email寄送錯誤';
    

    }else{
        // echo "<b>驗證碼發送成功</b>".$check_code;
        $output['success'] = true;
        $output['error'] = '';

        $_SESSION['check-user']['newAccount'] = $_POST['newAccount'];
        $_SESSION['check-user']['newPassword'] = $_POST['newPassword'];
        $_SESSION['check-user']['nickname'] = $_POST['nickname'];
        $_SESSION['check-user']['address'] = $_POST['address'];
        $_SESSION['check-user']['birthday'] = $_POST['birthday'];
        $_SESSION['check-user']['check_code'] = $check_code;


    }

}

 echo json_encode($output, JSON_UNESCAPED_UNICODE);


 ?>
 