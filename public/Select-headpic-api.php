<?php
include __DIR__ . '../../php/common/config.php' ;


$output = [
    'success' => false,
    'code' => 0,
    'error' => '資料沒有新增'
];


$old_userPic = $_SESSION['user']['user-pic'];

$data_pic = $_GET['data_pic'];


if ($old_userPic == $data_pic){

    $output['error'] = '圖片相同';


}else{

    $m_sid = $_SESSION['user']['sid'];
    
    $p_sql = "UPDATE `member` SET `user-pic`=?  WHERE `sid` = $m_sid";
    $p_stmt = $pdo -> prepare($p_sql);


    $p_stmt -> execute([

        $data_pic
        
    ]);

    
    if($p_stmt->rowCount()){

      $_SESSION['user']['user-pic']= $_GET['data_pic'];

      $output['success'] = true;
      $output['error'] = '';


    }else{
       
        $output['error'] = '編輯頭貼錯誤';

    }


    
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>