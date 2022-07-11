<?php
  session_start();
#DB connect
  include("../connect.php");

  
  $id = $_POST['id'];
  $pwd = $_POST['pwd'];
#슬래시 추가-sql 보안  
//  $id = addslashes($_POST['id']);
//  $pwd = addslashes($_POST['pwd']);
  echo $id;
  #null instance chk
  if(!$id || !$pwd){
    echo "<script>alert('NULL value NOT allowed.');history.back();</script>";
  }
  else{
  //$pw_hash = hash("sha256",addslashes($_POST['pwd']));
  $query = "SELECT mem_no, id, pwd, email, name, aboutMe, photo, score FROM user WHERE id='$id' and pwd='$pwd'";
  //회원가입 이후부터는 pw_hash로!
  //확인 - print($query);
  $res = mysqli_query($db,$query);
  
  
  
  //sql 문 중요! 동점자 처리
  $query2 = "SELECT id, score, ROW_NUMBER() OVER(order by score desc) rank FROM user;";
  $res2 = mysqli_query($db,$query2);
  $total = mysqli_affected_rows($db);//row 개수
  
  
  
  
  //login시 ranking.php 내에 함수 호출
  
  
  $num = mysqli_num_rows($res);

  $row = mysqli_fetch_array($res);
// member_reg.date 추가
  #login process
  if($num == 1)
  { 
    $_SESSION['user_id']=$id;
    $_SESSION['name'] = $row["name"];
    $_SESSION['email'] = $row["email"];
    $_SESSION['pwd'] = $pwd; 
    $_SESSION['aboutMe'] = $row["aboutMe"]; 
    $_SESSION['photo'] = $row["photo"]; 
//    $_SESSION['score'] = $row["score"]; 
//    $_SESSION['rank'] = $row["rank"]; 
    
    
    for($i=0; $i<$total; $i++) {
        mysqli_data_seek($res2, $i);//pointer 위치
        $row2 = mysqli_fetch_array($res2);
        if($_SESSION['user_id'] == $row2['id']){
            //세션변수 생성
            $_SESSION['rank'] = $row2['rank'];
            $_SESSION['score'] = $row2['score'];

        }
          
    }
    
    
    
    //  print($row["name"]);
    if(isset($_SESSION['user_id'])){
    //  echo "<script>alert('login as $id')</script>";
      echo "<meta http-equiv='refresh' content='0; url=../../index.php'>";
    }
    else {
      echo "login fail...";
    }
  }
  else if ($num==0){
    echo "<script>alert('NO SUCH ID OR WRONG PW');history.back();</script>";
  }
  else{
    echo "<script>alert('ERROR...Contact ADMIN')</script>";
  }
  //mysqli_close($db);
  }
?>
