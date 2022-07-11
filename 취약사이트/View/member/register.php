<?php include($_SERVER['DOCUMENT_ROOT']."/View/common/header.php"); ?>


<div style="padding:10px 50px 10px 50px;">
			<h2>회원가입</h2><hr><br>
                        <form name="register" action="/Controller/member/register.php" method="post">
				<table  align=center; style="margin:0 auto !important; padding:10px; background-color: #efefef;">
					<tr>
						<td>ID </td>
						<td><input type="text" name="id"> </td>
						<td><input type="button" value="중복확인" style="margin-left:10%;width:99.5% !important; background-color: #e0e0e0; color:black;
						margin-top:3px; border-radius: 3px;"></td>
						<td></td>

					</tr>
					<tr>
						<td>Password </td>
						<td><input type="password" name="pwd"><span style="font-size: 10px;">&nbsp; 4~12자의 영문 대소문자 숫자 조합</span></td>
						<td></td><td></td>

					</tr>
					<tr>
						<td>Confirm password &nbsp;</td>
						<td><input type="password" name="rpwd"></td>
						<td></td><td></td>


					</tr>
					<tr>
						<td>E-mail </td>
						<td><input type="text" name="email"></td>
						<td></td><td></td>


					</tr>
					<tr>
						<td>name </td>
						<td><input type="text" name="name"></td>
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
						<td colspan="3"><textarea name="aboutMe" cols=60 rows=10 ></textarea>
							</td>
						</tr>
						<tr><td>Photo</td><td colspan="3"><input type="file" name="img" value="" style="margin:0 auto !important; width:100% !important;" /></td></tr>
						<tr><td colspan="4"><input type="submit" value="Register" style="margin:0 auto !important; width:100% !important;" /></td></tr>
					</table>


				</form>
				<br>
			</div>
			<div id="footer"> &copy;2021 sample &nbsp;<span class="separator">|</span>&nbsp; Design by <a href="">Hwyba Software</a> </div>
		</div>
	</body>
	</html>
