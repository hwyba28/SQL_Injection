<?php
  session_start();
#DB connect
  include("../connect.php");
  $id = $_SESSION['user_id'];
  $pwd = addslashes($_POST['pwd']);
  $aboutMe = addslashes($_POST['aboutMe']);
//    if(!$aboutMe){
//          $query = "UPDATE user SET pwd='$pwd', photo='$photo' where id='$id'";
//
//    }else{
          $query = "UPDATE user SET pwd='$pwd', aboutMe='$aboutMe', photo='$photo' where id='$id'";

//    }

  $photo = addslashes($_POST['img']);;//session- photo / post-img


  //$pw_hash = hash("sha256",addslashes($_POST['pwd']));
  //회원가입 이후부터는 pw_hash로!
 // print($query);
  $res = mysqli_query($db,$query);

if($res>0){
    $_SESSION['aboutMe'] = $aboutMe;
      echo "<script>alert('edit perfectly!')</script>";
      echo "<meta http-equiv='refresh' content='0; url=../../index.php'>";
}else{        
        echo "<script>alert('edit fail..')</script>";
}
  //mysqli_close($db);

?>

<!--

connect.php (db연동정보 저장 - db 객체)
query 준비

  $res = mysqli_query($db,$query);
    쿼리와 db연동정보를 넣은 것의 결과를 res에 저장


res = Result Set 명심!!! - "실행" 

Mybatis Query 성공시,

1)Select - rset 존재하는 동안 반복{}
row를 가져옴!
결과가 행렬값이므로 null 이면 로그인 실패

#Select문에 해당하는결과 / 행의 개수 - 함수이용(가져오기)

2) Update
//row 가져오진 않고(select아니므로)
//rset 결과가 0보다 크면 수정 성공 
//업데이트 성공한 행 개수 가져올수 있음



3) Insert - rset - 성공하면 0보다 큼(성공행 개수)





delete - Delete된 행의개수 (없다면 0)




php 에서 row select 정보 가져오려면 array를 row개수만큼 가져오면 됨
-->





<!--보안 부분
pstmt = conn.prepareStatement(sql);
			
			pstmt.setString(1, m.getUserPwd());
			pstmt.setString(2, m.getEmail());
			pstmt.setInt(3, m.getAge());
			pstmt.setString(4, m.getPhone());
			pstmt.setString(5, m.getAddress());
			pstmt.setString(6, m.getHobby());
			pstmt.setString(7, m.getUserId());-->