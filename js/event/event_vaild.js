$('.recode').click(function(){
    createCode();
    // $('#js5-authCode').reload("$('#js5-authCode')")
})

// ----------------------------
var authCode;
    randomCode=$("#js5-authCode").eq(0);//獲取驗證碼出現的方框dom
console.log(randomCode);

function createCode() {
    
    authCode="";//設定這個為空變數，然後往裡面新增隨機數
    var authCodeLength=4;//隨機數的長度
    randomArray=[0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R', 'S','T','U','V','W','X','Y','Z'];
    //建立一個陣列，隨機數從裡面選擇四位數或者更多
    for(var i=0;i<authCodeLength;i++){
        var index=Math.floor(Math.random()*36);//隨機取一位數
        authCode +=randomArray[index];//取四位數，並+相連
    }
    console.log(authCode);//取到四位隨機數之後，跳出迴圈
    randomCode.val(authCode);//將四位隨機數賦值給驗證碼出現的方框
    console.log(randomCode.val());
}

//以上是封裝的獲取驗證碼的函式

$(function () {//當文件載入結束後，執行這個函式
    createCode();//一開始先執行一遍取隨機數的函式
    $("#js5-btn").click(function () {//這裡是一個點選事件
        console.log(window.randomCode);
        //這裡寫了一個必報，window.randomCode是在文件裡面找到這個dom，否則上文的四個隨機數傳不到這裡來
        var randomCode=window.randomCode.val();
        console.log(randomCode);
        var authInput=$("#js5-form3-input").val().toUpperCase(),
            user=$("#js5-userNum").val(),
            psd=$('#js5-password').val();
        //上面三個是分別獲取驗證碼輸入框的值，賬號的值，密碼的值。
        //驗證碼輸入框這裡，最後toUpperCase()方法是把小寫轉換成大寫
        console.log(authInput);
        console.log(randomCode);
        console.log(user,psd);
        if (randomCode===authInput) {
        //驗證驗證碼，在驗證碼輸入框與驗證碼的值不相等之前，是不會進入下面登入的步驟的，驗證碼是第一步關卡
            // var firstAjax = new XMLHttpRequest();
            // //建立ajax物件，這裡是ajax跨域的部分
            // firstAjax.open("POST", "這裡是你url跨域的地址", true);
            // //連線伺服器，跨域。
            // firstAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            // //setRequestHeader() 方法指定了一個 HTTP 請求的頭部，它應該包含在通過後續 send() 呼叫而釋出的請求中。
            // //可以理解為，這是http的請求頭，固定格式，位置必須要在open之後，send之前。
            // firstAjax.send("name=" + user + "&pwd=" + psd);
            // //在使用POST方式時引數代表著向伺服器傳送的資料，前面兩個是賬號框和密碼框
            // firstAjax.onreadystatechange = function () {//當引數被傳入伺服器的時候，引用監聽事件。
            //     if (firstAjax.readyState == 4) {//readyState四種狀態，當執行四步完成之後
            //         if (firstAjax.status == 200) {//返回的是200，代表成功，404未找到。
            //             var returnValue = JSON.parse(firstAjax.responseText);//取回由伺服器返回的資料
            //             console.log(returnValue);
            //             if (returnValue.code == 0) {//這裡是後端定義的，當code==0的時候，代表登入正確。
            //                 window.location.href = "https://www.baidu.com/index.php?tn=98012088_3_dg&ch=1";
            //                 //後端返回的資料驗證成功就跳轉連結。
            //             }
            //             else {
            //                 $("#js5Message").text(returnValue.message);//當code不等於0時，返回出錯資訊
            //             }
            //         } else {
            //             alert("出錯咯，咯咯咯");//返回的不是200的時候，出錯。
            //         }
            //     }
            // };
            createCode();//點選登入按鈕，驗證之後會重新整理驗證碼
        }
        else {
            $("#js5Message").text("驗證碼錯誤，請重新輸入");
            createCode();//驗證碼錯誤，重新整理驗證碼。
        }
    })
});

