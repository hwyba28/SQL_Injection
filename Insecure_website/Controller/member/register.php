<?php 
    //  session_start();
      include("../connect.php");
      
      $id = addslashes($_POST['id']);
      $pwd = addslashes($_POST['pwd']);
      $email = addslashes($_POST['email']);
      $name = addslashes($_POST['name']);
      $aboutMe = addslashes($_POST['aboutMe']);
      $img = addslashes($_POST['img']);
      
      $mem_no = date("His");

  if(!$id || !$pwd || !$email || !$name){
    echo "<script>alert('필수값들을 채워주세요');history.back();</script>";
  }else{
        $query = "INSERT INTO user (mem_no, id, pwd, email, name, aboutMe, photo) VALUES ('$mem_no','$id', '$pwd','$email','$name','$aboutMe','$img')";
     //   print($query);//rank 없어도 됨 그때그때 순위
        $res = mysqli_query($db,$query);
       if($res>0){ //if($res) 해도됨
      echo "<script>alert('회원가입이 완료되었습니다. 로그인해주세요!')</script>";
      echo "<meta http-equiv='refresh' content='0; url=../../index.php'>";
       }else{
                 echo "<script>alert('회원가입 실패!');history.back();</script>";

       }
  
 }     
?>


<!--$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)-->
