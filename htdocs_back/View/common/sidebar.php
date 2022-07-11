<!DOCTYPE html>
  <div id="sidebar">
    <?php if(isset($_SESSION['user_id'])){ ?>
      <h1>Hello, <?php echo $_SESSION['name']; ?> &nbsp;<a style="font-size:12px;" href="/View/member/edit.php">Edit</a></h1>
    <div style="background-color:white;"><img style="width:100%; height:auto;" <?php if($_SESSION['photo']==NULL){ ?>src="/img/wood.png" /> <p style="margin-top:-20px; color:lightgray; font-size:14px;">&nbsp;Default img</p><?php } else {?> src="" /><?php }?> </div><?php// $_SESSION['photo']?>
    <p style="font-size: 14px;">You are ranked at <b style="color:blue;"><br><?php echo '# '; echo $_SESSION['rank']; ?><i style="color:black;">  score is &nbsp;<?php echo $_SESSION['score']; ?></i></b></p>
<button onclick="location.href='/Controller/member/logout.php'" style="width:100%;padding:10px;">logout</button>
 <?php  } else{ ?>
      
    <h1>Login / <a href="/View/member/register.php">Register</a></h1>
  <!-- <img src="wood.png" style="height:100%; width: 100%;">-->
    <form method="post" action="/Controller/member/login.php">
  <span>ID</span><input type="text" name="id"/>
  <span>password</span> <input type="password" name="pwd"/>
  <input type="submit" value="Login"/>
      </form> <?php } ?>
  </div>
<!-- echo 함수 = html 형태로 출력해줌 -->