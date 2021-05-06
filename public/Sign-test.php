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
 
     <!-- 註冊畫面 -->
     <form name="Sign" method="post"  novalidate onsubmit="checkform_sign(); return false;">
           
    
                  <h3>啤女帳號</h3>
                  <input type="email" class="form-control" id="email" name="email" required>
            

                  <h3>密碼</h3>
                 <input type="password"  class="form-control" id="password" name="password" required>


                 <h3>姓名</h3>
                 <input type="text" class="form-control" id="nickname" name="nickname" required>


                 <h3>地址</h3>
                 <textarea  name="address" class="form-control" id="address" cols="20" rows="1"></textarea>
                

                 <h3>生日 </h3>
                 <input type="date"  class="form-control" id="birthday" name="birthday">
                 
             
                 <button type="submit" class="btn btn-primary">註冊</button>
               
            

            
     </form>    





</div>







<?php include __DIR__ . '../../php/common/script.php' ?>



<script>


</script>


<?php include __DIR__ . '../../php/common/html-end.php' ?>