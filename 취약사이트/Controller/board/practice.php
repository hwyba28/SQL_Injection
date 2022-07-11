<?php 

    include ('../connect.php');

    
   $query = ' Select b_no, title, level, score from board';
   $rset = mysqli_query($db, $query);
   
   $num = mysqli_affected_rows($db);
?>