<?php
  include("../connect.php");

   
    $menu = $_POST['menu'];

    $search = $_POST['search'];
   // echo $search;
   // echo $menu;
    if($menu == 'title'){
    $query = "SELECT * FROM board where title like '%$search%'";
    }else if($menu == 'level'){
        $query = "SELECT * FROM board where level like '%$search%'";
    }
    
    $rset = mysqli_query($db, $query);
    $num = mysqli_affected_rows($db);
    
    for($i=0;$i<$numl;$i++){
        mysqli_data_seek($rset, $i);
        $row = mysqli_fetch_array($rset, $i);
    }
    






?>