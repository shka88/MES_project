<?php
     $form1 =  $_POST['form1'];
    //  $form2 = $_POST['form2'];
    //  $form3 = $_POST['form3'];


    if($form1==""){
      echo("
      <script>
      window.alert('입력 안된 부분이 있습니다.')
      location.href = 'business1.php';
      </script>
      ");
    }else if($form1=="기계부품") {
      {
        // $db_id='w1004mesmg';
        // $db_pw='sunmoons1s2s3!';
        // $db_name='w1004m';
        // $db_domain='localhost';

        $db_id='root';
        $db_pw='';
        $db_name='mes_project';
        $db_domain='localhost';
        $db=mysqli_connect($db_domain,$db_id,$db_pw,$db_name);
    
        $jb_sql = "SELECT * FROM sales where sphere='기계부품' LIMIT 50;";
    
        $jb_result = mysqli_query( $db, $jb_sql );
    
            while( $jb_row = mysqli_fetch_array( $jb_result ) ) 
        {
            echo "<tr><style>tr {border:1px solid #ccc; padding:5px; text-align:center; line-height:45px; }</style>";
             echo "<p><td>". $jb_row[ 'no' ]. "</td><td> ". $jb_row[ 'sphere' ]. "</td><td>  ".$jb_row[ 'type' ]. "</td><td>" .$jb_row[ 'product' ] ."</td><td>". $jb_row[ 'company' ]. "</td><td> ". $jb_row[ 'day' ]. "</td></p>";
            echo "</tr>";
          }
     }     
    }else{
      echo("
      <script>
      location.href = 'business1.php';
      </script>
      ");
    }   


?>
