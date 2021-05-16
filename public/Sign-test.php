<?php include __DIR__ . '../../php/common/config.php' ?>

<!-- 需要置換的變數們 -->
<?php

$page_title = '登入測試';


?>

<?php include __DIR__ . '../../php/common/html-head.php' ?>
<!-- 這裡插入要放在head的東西 -->
<!-- 包含自己的css和js -->



<style>
 
   .content {
        width: 100%;
        height: 100vh;
    }
</style>



<div class="content">
 
    
     <!-- 登入測試 -->


     <form class="LogIn-content-wrap" name="Login" method="post"  novalidate onsubmit="checkform_Login(); return false;">
    
         <h3>登入帳號</h3>
          <input  type="email" id="account" name="account">
               
          
          <h3>登入密碼</h3>
          <input  type="password" id="password" name="password" >
          
          
          <button class="LogIn-btn02" type="submit"> 登入</button>
          


     </form>    


     <br>  <br>  <br> 
     <!-- 註冊畫面 -->
         <form name="Sign" method="post"  novalidate  onsubmit="Sign_email();return false">
           
    
           <h3>註冊帳號</h3>
           <input type="email" id="newAccount" name="newAccount" required>
     

           <h3>密碼</h3>
          <input type="password"  id="newPassword" name="newPassword" required>


          <h3>姓名</h3>
          <input type="text"  id="nickname" name="nickname" required>


          <h3>地址</h3>
          <textarea  name="address"  id="address" cols="20" rows="1"></textarea>
         

          <h3>生日 </h3>
          <input type="date" name="birthday">
          
      
          <button type="submit" class="btn btn-primary" >註冊</button>


     </form>     

     <br><br> 
     
     <form name="Sign_submit" method="post"  novalidate onsubmit="SignSubmit();return false">



        <h3>驗證碼</h3>
        <input type="text" name="check_number">
        

        <button type="submit" class="btn btn-primary">驗證</button>


     </form>



</div>
<?php include __DIR__ . '../../php/common/script.php' ?>



<script>




</script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>