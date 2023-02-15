<?php 

    session_start();
    
    include '../connect.php';
    
    $id = $_SESSION['pwd'];
    $query = "Delete from user where id = '$id'";
    $rset = mysqli_query($db, $query);
    
    
        session_destroy();
        echo "<script>alert('thanks for using our site!');location.href='/index.php';</script>";

  ///      echo "<script>alert('fail..');history.back();</script>";
    



?>