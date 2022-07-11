<?php
  session_start();
#DB connect
  include("../connect.php");

  
//  $id = $_POST['id'];
//  $pw = $_POST['pwd'];
#슬래시 추가-sql 보안  
  $id = addslashes($_POST['id']);
  $pwd = addslashes($_POST['pwd']);
  
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
