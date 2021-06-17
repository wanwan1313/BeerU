<?php include __DIR__ . '../../php/common/config.php';

//寄信通知------------------------------
use PHPMailer\PHPMailer\PHPMailer;

include __DIR__ . ' ../../PHPMailer/src/Exception.php';
include __DIR__ . ' ../../PHPMailer/src/PHPMailer.php';
include __DIR__ . ' ../../PHPMailer/src/SMTP.php';

//預設------------------------------
$output = [
    'success' => false,
    'code' => 0,
    // 可以更換error文字
    'error' => '填寫資料有誤，資料沒有新增',
    'post' => $_POST
];
//------------------------------
// event_sid
$event_sid = isset($_POST['event_sid']) ? intval($_POST['event_sid']) : NULL;

// total_p
$total_p = isset($_POST['total_p']) ? intval($_POST['total_p']) + 1 : 0;
// p0
$p0_name = isset($_POST['p0_name']) ? $_POST['p0_name'] : '';
$p0_mobile = isset($_POST['p0_mobile']) ? $_POST['p0_mobile'] : '';
// p1
$p1_name = isset($_POST['p1_name']) ? $_POST['p1_name'] : '無';
$p1_mobile = isset($_POST['p1_mobile']) ? $_POST['p1_mobile'] : '無';
// p2
$p2_name = isset($_POST['p2_name']) ? $_POST['p2_name'] : '無';
$p2_mobile = isset($_POST['p2_mobile']) ? $_POST['p2_mobile'] : '無';
$user_sid = $_SESSION['user']['sid'];
$checkCode = isset($_POST['checkCode']) ? $_POST['checkCode'] : '';

// 要怎麼加上驗證碼？(已在資料庫新增一欄checkCode)
// 加上checkbox???

if(empty($p0_name) or empty($p0_mobile) or empty($event_sid) or empty($checkCode)){
    echo json_encode($output);
    exit;
}

// $input_check_val = $('#js5-form3-input').val();

// if ($input_check_val != $checkCode) {
//     $output['error'] = '驗證碼錯誤，請重新填寫';}

$join_SQL = "SELECT COUNT(*) FROM `event_join` WHERE `event_sid` = $event_sid AND`member_sid`= $user_sid";
$Join = $pdo->query($join_SQL)->fetch(PDO::FETCH_NUM)[0];

if ($Join > 0) {
    $output['error'] = '您已經報名過囉！快到會員中心瞧瞧～';
    
} else {
    $sql = "INSERT INTO `event_join` (
        `event_sid`,
        `p0_name`,
        `p0_mobile`,
        `member_sid`,
        `p1_name`,
        `p1_mobile`,
        `p2_name`,
        `p2_mobile`,
        `total_p`,
        `checkCode`,
        `created_at`) 
        VALUES (
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            NOW())";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $event_sid,
        $p0_name,
        $p0_mobile,
        $_SESSION['user']['sid'],
        $p1_name,
        $p1_mobile,
        $p2_name,
        $p2_mobile,
        $total_p,
        $checkCode
    ]);

    // 改預約總數------------------------------
    $user = $_SESSION['user']['sid'];
    $aget_SQL = "SELECT `accum_event` FROM `member` WHERE `sid` = $user";
    $new_num = $pdo->query($aget_SQL)->fetch(PDO::FETCH_NUM)[0] + 1;
    $ain_SQL = "UPDATE `member` SET `accum_event`= ? WHERE `sid` = $user";
    $ain_stmt = $pdo->prepare($ain_SQL);
    $ain_stmt->execute([
        $new_num,
    ]);
    //寄信通知------------------------------ 
    $mail = new PHPMailer(); //建立新物件
    $mail->IsSMTP(); //設定使用SMTP方式寄信
    $mail->SMTPAuth = true; //設定SMTP需要驗證
    $mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線
    $mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機
    $mail->Port = 465; //Gamil的SMTP主機的埠號(Gmail為465)。
    $mail->CharSet = "utf-8";  //郵件編碼
    $mail->Username = "beeru0516@gmail.com"; //Gamil帳號
    $mail->Password = "beerUtaiwan0516"; //Gmail密碼
    $mail->From = "beeru0516@gmail.com"; //寄件者信箱
    $mail->FromName = "BeerU"; //寄件者姓名

    $mail->Subject = "BeerU啤女:品飲會【預約成功】通知信"; //郵件標題
    //------------------------------
    // 抓資料

    // 抓email和暱稱
    $a_mail = $_SESSION['user']['email'];
    $a_nickname = $_SESSION['user']['nickname'];

    // 抓活動資料
    $e_SQL = "SELECT * FROM `event` WHERE sid=$event_sid";
    $e = $pdo->query($e_SQL)->fetch();

    // 抓同伴姓名電話
    $ej_SQL = "SELECT * FROM `event_join` WHERE `event_sid`=$event_sid";
    $ej = $pdo->query($ej_SQL)->fetch();
    $ej_stmt = $pdo->prepare($ej_SQL);
    $ej_stmt->execute([$_POST['p1_name']]);
    $ej_stmt->execute([$_POST['p1_mobile']]);
    $ej_stmt->execute([$_POST['p2_name']]);
    $ej_stmt->execute([$_POST['p2_mobile']]);

    $p1_name = $_POST['p1_name'];
    $p1_mobile = $_POST['p1_mobile'];
    $p2_name = $_POST['p2_name'];
    $p2_mobile = $_POST['p2_mobile'];
    //------------------------------
    // 郵件內容

    if ($p1_name != ''){
        // 2人
        $mail->Body =
        "<p>親愛的 " . $a_nickname . "：</p>" .
        "<br><h2 style='color:#B66496;'>🎉 🙌 您已報名成功 🥳 🎊 </h2>" .
        "<br><p>以下是您報名的內容</p>" .
        "<h4 style='color:#b69564;'>➤ 報名主題：</h4>" .
        "<h3 style='font-weight:bold;'>【" . $e['event_title'] . "】</h3>" .
        "<h4 style='color:#b69564;'>➤ 活動時間：</h4>" . $e['event_time'] .
        "<h4 style='color:#b69564;'>➤ 活動地點：</h4>" . $e['event_place'] .
        "<h4 style='color:#b69564;'>➤ 活動地址：</h4>" . $e['event_address'] .
        "<h4 style='color:#b69564;'>➤ 價格：</h4>" . "<p>NT$" . $e['event_price'] . "</p>" .
        "<p>*費用為當天當場繳交，活動前一個禮拜不開放取消</p>" .
        // 這裡要改成其他網址???
        "👉" . "<a href='localhost/Beeru/public/member.php?memberEvent'> 詳細內容由此進入</a>" . "<br>" .
        "<br><p>⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎</p>" .
        "<h4 style='color:#b69564;'>➤ 我的同伴：</h4>" .
        $p1_name . "<br>" . $p1_mobile . "<br><br>" .
        "<p>別忘了提醒您的同伴一同前往～🍺</p>" .
        "<br><p>⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎</p>" .
        "<br><br><p>啤女 敬上</p>";
// 3人
        if ($p2_name != ''){
        $mail->Body =
            "<p>親愛的 " . $a_nickname . "：</p>" .

            "<br><h2 style='color:#B66496;'>🎉 🙌 您已報名成功 🥳 🎊 </h2>" .
            "<br><p>以下是您報名的內容</p>" .
            "<h4 style='color:#b69564;'>➤ 報名主題：</h4>" .
            "<h3 style='font-weight:bold;'>【" . $e['event_title'] . "】</h3>" .
            "<h4 style='color:#b69564;'>➤ 活動時間：</h4>" . $e['event_time'] .
            "<h4 style='color:#b69564;'>➤ 活動地點：</h4>" . $e['event_place'] .
            "<h4 style='color:#b69564;'>➤ 活動地址：</h4>" . $e['event_address'] .
            "<h4 style='color:#b69564;'>➤ 價格：</h4>" . "<p>NT$" . $e['event_price'] . "</p>" .
            "<p>*費用為當天當場繳交，活動前一個禮拜不開放取消</p>" .
            // 這裡要改成其他網址???
            "👉" . "<a href='localhost/Beeru/public/member.php?memberEvent'> 詳細內容由此進入</a>" . "<br>" .
            "<br><p>⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎</p>" .
            "<h4 style='color:#b69564;'>➤ 我的同伴：</h4>" .
            $p1_name . "<br>" . $p1_mobile . "<br><br>" .
            $p2_name . "<br>" . $p2_mobile . "<br>" .
            "<p>別忘了提醒您的同伴一同前往～🍺</p>" .
            "<br><p>⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎</p>" .
            "<br><br><p>啤女 敬上</p>";
        }
    }
    // 1人
    else{
        $mail->Body =
            "<p>親愛的 " . $a_nickname . "：</p>" .

            "<br><h2 style='color:#B66496;'>🎉 🙌 您已報名成功 🥳 🎊 </h2>" .
            "<br><p>以下是您報名的內容</p>" .
            "<h4 style='color:#b69564;'>➤ 報名主題：</h4>" .
            "<h3 style='font-weight:bold;'>【" . $e['event_title'] . "】</h3>" .
            "<h4 style='color:#b69564;'>➤ 活動時間：</h4>" . $e['event_time'] .
            "<h4 style='color:#b69564;'>➤ 活動地點：</h4>" . $e['event_place'] .
            "<h4 style='color:#b69564;'>➤ 活動地址：</h4>" . $e['event_address'] .
            "<h4 style='color:#b69564;'>➤ 價格：</h4>" . "<p>NT$" . $e['event_price'] . "</p>" .
            "<p>*費用為當天當場繳交，活動前一個禮拜不開放取消</p>" .
            // 這裡要改成其他網址???
            "👉" . "<a href='localhost/Beeru/public/member.php?memberEvent'> 詳細內容由此進入</a>" . "<br>" .
            "<br><p>⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎⁎</p>" .
            "<br><br><p>啤女 敬上</p>";
    }




    $mail->IsHTML(true); //郵件內容為html
    $mail->AddAddress("$a_mail"); //收件者郵件及名稱

    if ($mail->Send() && $stmt->rowCount()) {
        $output['success'] = true;
    }
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
