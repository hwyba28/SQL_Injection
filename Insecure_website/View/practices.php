<!DOCTYPE html>

<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/header.php"); ?>

<!-- include[ 컨트롤러/뷰 구분 ] 또는 여기에 직접 작성
-->
<style> tr{height:30px;} </style>



<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/sidebar.php"); ?>
  <div id="main" style="height: 383px; text-align: center;">
      <form action="./practices.php" method="post">
        <h3>Search &nbsp;<select name='menu'><option>title</option><option>level</option></select> 
            <input name = "search" type="text" placeholder="search" style="width: 50%;"/>
            <button type="submit" style="background-color:white; border: none; cursor: pointer;">🔍</button></h3><br><!-- comment --></form>
    
            
            <table border="1" width="400px" style="margin: 0 auto; margin-bottom:60px;">
      <th>B.no</th><th>title</th><th>score</th><th>level</th>
      
      <?php // 여기서 db안 만들고, controller 분리시 세션 값으로 가져올 수 있음
      
      
      
      
      
      
      
      
            $menu = $_POST['menu'];

            $search = $_POST['search'];

            //echo $menu;

            //-->
            
//            $menu = addslashes($_POST['menu']);
//            $menu = addslashes($_POST['search']);















 include($_SERVER['DOCUMENT_ROOT']."/Controller/connect.php");
   $query = 'SELECT * from board';// b_no, title, level, score
   
   //해킹 문구
   //SELECT * FROM board where b_title like '%sdf%' or 1=1 UNION all SELECT '','','',id,email,name,'' from user #%'
   //SELECT * FROM board where b_title like '%sdf%' or 1=1 #%' //sdf%' or 1=1 #%' 이부분으로 도출가능
   
   
  // SELECT * FROM `board` WHERE b_title like '%하노이%' // 콤마 조심
       if($menu == 'title'){
    $query = "SELECT * FROM board where b_title like '%$search%'";
    }else if($menu == 'level'){
        $query = "SELECT * FROM board where b_level like '%$search%'";
    }
   
   
  // print($query);
   
   
   $rset = mysqli_query($db, $query); // 전체 목록
   
   
   $num = mysqli_affected_rows($db);
      
    // echo $query;
      
      
      
      
      
      
      
      
      
      
      
      
      for($i=0; $i<$num; $i++){
        mysqli_data_seek($rset, $i);//pointer 위치
        $row = mysqli_fetch_array($rset); // 한 칸의 Array 값 모음
      echo "<tr><td>$row[b_no]</td>"
              . "<td><a>$row[b_title]</a></td>"
              . "<td>$row[b_score]</td>"
              . "<td>$row[b_level]</td></tr>";
       }        
        ?>
    </table>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/footer.php"); ?>

