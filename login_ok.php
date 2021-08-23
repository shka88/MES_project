<?php
     $id =  $_POST['id'];
     $pass = $_POST['pass'];

   if($id!=="aaa123") {
     echo("
           <script>
             window.alert('등록되지 않은 아이디입니다!')
             location.href = 'login.php';
           </script>
         ");
    } else {
     
        if($pass!=="1234"){
        	echo("
	              <script>
	                window.alert('비밀번호가 틀립니다!')
	                location.href = 'login.php';
	              </script>
	           ");
	           exit;
        }else {
            session_start();     
            echo("
               <script>
                 location.href = 'main.php';
               </script>
            ");
        }
     }        
?>
