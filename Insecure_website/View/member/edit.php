<!DOCTYPE html>
<?php 
include($_SERVER['DOCUMENT_ROOT']."/View/common/header.php"); ?>


		<div style="padding:10px 60px 10px 60px;">
			<h2>회원정보 수정</h2><hr><br>
                        <form name="edit" action="/Controller/member/edit.php" method="post">
				<table align=center; style="margin:0 auto !important; padding:10px; background-color: #efefef;">
					<tr>
						<td>ID </td>
						<td><?php echo $_SESSION['user_id']?></td>
						<td></td>
						<td></td>

					</tr>
					<tr>
						<td>Password </td>
						<td><br><input type="password" name="pwd"><span style="font-size: 10px;">&nbsp; 4~12자의 영문 대소문자 숫자 조합</span></td>
						<td></td><td></td>

					</tr>
					<tr>
						<td>Confirm password </td>
						<td><input type="password" name="rPwd"></td>
						<td></td><td></td>


					</tr>
					<tr>
						<td>E-mail </td>
						<td><?php echo $_SESSION['email']?></td>
						<td></td><td></td>


					</tr>
					<tr>
						<td>name </td>
						<td><?php echo $_SESSION['name']?></td>
						<td></td><td></td>

					</tr>
<!--
					<tr>
						<td>관심분야 </td>
						<td><input type="checkbox" id="web" name="interest" value="web"> <label for="web">web</label></td>
						<td><input type="checkbox" id="app" name="interest" value="app"> <label for="app">app</label></td>
						<td><input type="checkbox" id="system" name="interest" value="system"> <label for="system">system</label></td>
					</tr>-->
					<tr>
						<td>About me </td>
						<td colspan="3"><textarea name="aboutMe" cols=60 rows=10><?php echo $_SESSION['aboutMe']?></textarea></td>
						</tr>
						<tr><td>Photo</td><td colspan="3"><img src="<?php $_SESSION['photo'] ?>"/>
                                                        <input type="file" name="img" value="" style="margin:0 auto !important; width:100% !important;" /></td></tr>

						<tr><td colspan="4"><input type="submit" value="Edit" style="margin:0 auto !important; width:100% !important;" /></td></tr>
						<tr><td colspan="4"><input type="button" value="회원탈퇴" style="margin:0 auto !important; width:100% !important;
                                                                           background-color:white; color:blue;" onclick="location.href='/Controller/member/delete.php'"/></td></tr>
					</table>


				</form>
				<br>
			</div>
			<div id="footer"> &copy;2021 sample &nbsp;<span class="separator">|</span>&nbsp; Design by <a href="">Hwyba Software</a> </div>
		</div>
	</body>
	</html>
