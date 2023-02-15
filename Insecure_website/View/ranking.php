<!DOCTYPE html>

<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/header.php"); ?>

<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/sidebar.php"); ?>

<?php include($_SERVER['DOCUMENT_ROOT']."/Controller/connect.php");
//include 문 문제 있음!! 그냥 /Controller경로하면 안됨!
//error 있을시, 다음 문장 진행 안됨!
      $query = 'SELECT *, ROW_NUMBER() OVER( ORDER BY SCORE DESC ) FROM USER';
      $rset = mysqli_query($db,$query);     //print위치로 에러 위치 찾기
     
//      $row = mysqli_fetch_assoc($rset);
//      $num = mysqli_num_rows($rset);
      $total = mysqli_affected_rows($db);
 //     $row = mysqli_fetch_row($result);

?>

    <div id="main" style="height: 383px; text-align: center;">
    <h2>Current Scores</h2>
<?php// echo $_SESSION['user_id']?>
    <table border="1" width="400px" height="100px"style="margin: 0 auto; background-color: #efefef;">
        <tr><th width="80px">place</th><th width="130px">name</th><th>score</th></tr>
      <?php
    for($i=0; $i<$total; $i++) {//모든 사용자
//      for($i=0; $i<10; $i++) {//top 10 만 출력
        mysqli_data_seek($rset, $i);//pointer 위치
        $row = mysqli_fetch_array($rset);
       // if($row[score]!=0){
        $ii = $i+1;
//        if($_SESSION['user_id'] == $row['id']){
//            //세션변수 생성
//            $_SESSION['rank'] = $ii;
//            $_SESSION['score'] = $row['score'];
//          // print($_SESSION['rank']);
//            //index나 다른 화면에서 ranking 들어오지 않아도 순위 표시되어야 함! 데이터 베이스 생성 필요!
//        }//echo 안에 들어갔으므로 """" 두번해서 없앰 // 세션변수 문제
              echo "<tr><td> # $ii </td><td> $row[name] </td>
              <td> $row[score] </td>
              </tr>";
          
    }

      //mysqli_close($db)?>
    </table>
  </div>
<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/footer.php"); ?>







<!--row 를 열로 끄집어 낼때 $row
row 를 각 행으로 끄집어 낼때 $i | $row[$i]-->