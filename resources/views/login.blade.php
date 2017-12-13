<html lang="zh-Hant-TW">
    
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>登入頁面</title>
       <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
       
       <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/font-awesome.min.css">
       <link rel="stylesheet" href="css/my.css"> -->
       <script language="JavaScript">
        function ShowTime(){
        　document.getElementById('showbox').innerHTML =  new Date();
        　setTimeout('ShowTime()',1000);
        }
        </script>
   </head>
    
   <body onload="ShowTime()">
        <div class="py-4 fon text-center">
            
            
                <h1><img src="image/logo1.gif" class="logo" alt="logo"><div class="d-block d-lg-inline"></div><strong>慈濟科技大學
                    <div class="d-block d-lg-inline"></div>
                    學生資訊系統</strong></h1>
            </div>    

        <div class="container text-center pt-2 pb-5">
            <form >
                
                <div class="stu "><strong><span>請使用本校學號及密碼進行登入</span></strong></div>
                <div class="stu "><span>Login With Your Student ID<div class="d-block d-lg-inline"></div> And Password</span></div>
                <hr width="70%">
                <div class="py-3  log">
                        <span><strong>學號:</strong></span>
                        <input type="text" autocomplete="off" placeholder="Student ID">
                </div>
                
                    <div class="my-3">
                        <input class="login_btn1" type="submit" value="登入">
                        <input class="login_btn2" type="submit" value="清除" onclick="javascrtip:form.reset();">
                    </div>
                    <div class="he">
                        <a href="#" class="btn-tools">[助理人員登入]</a>
                    </div>
                    <div class="eng pt-3">切換語言-<a href="#" class="btn-tools">English</a></div>
                    <div class=" pt-3" id="showbox"></div>
                        <div class="d3 py-1" align="center">
                                <span>每日凌晨 03:00 ～ 04:00 系統資料庫維護<div class="d-block d-lg-inline"></div>，本學生資訊系統暫停使用！</span>
                            </div>
                            <div class="d1 pb-4" align="center">
                                    <span>有問題請聯絡</span><a href="#"><span>電算中心</span></a>
                                    <span>分機:2583</span>
                                    
                                </div>
                                
                        
                
            
        
        
    </div>
    </div></form>
    <div class="fixed-bottom text-center down py-3">
        Copyright © 慈濟科技大學<div class="d-block d-lg-inline"></div> Tzu Chi University of Science and Technology</div>
    
            
    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

</body>
</html>
