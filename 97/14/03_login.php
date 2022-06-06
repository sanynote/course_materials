<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>login</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:#fcfcfc;}
		h2{position:absolute; left:-9999px; width:1px; height:1px; line-height:0; font-size:1px; overflow:hidden;}

		#link{width:340px; margin:100px auto 0; text-align:right; font-size:12px;}
		#link a{text-decoration:none; padding:0 8px; color:#000; text-shadow:1px 1px 3px rgba(0,0,0,0.2);}

		#link a:hover, #link a:focus{background-color:#f00; color:#fff;}


		form{width:300px; margin:0 auto; padding:10px 20px; box-shadow:3px 3px 20px rgba(0,0,0,0.1);
		font-size:12px;}

		form fieldset{border:none;}
		form p{padding:5px 0;}

		form legend{text-align:center; font-size:16px; padding:10px 0;}
		
		form label{width:80px; display:inline-block; line-height:27px; text-align:center;
		background-color:#eee; border:1px solid #ccc;}

		form input{width:210px; border:1px solid #ccc; height:27px; text-indent:10px;}

		form #button{padding:10px 0; text-align:center;}
		form #button input{width:60px; height:26px; background-color:#fff; text-indent:0;}
		form #button input:hover{background-color:#f00; color:#fff; cursor:pointer;}
	</style>
 </head>
 <body>
	<h2>LOGIN</h2>
	<div id="link">
		<span>*</span><a href="#none" title="home">HOME</a>
		<span>*</span><a href="#none" title="login">LOGIN</a>
		<span>*</span><a href="01_join_form.php" title="join">JOIN</a>
	</div>
	<form action="04_login_control.php" method="post">
		<fieldset>
			<legend>회원 로그인</legend>
			<p>
				<label for="userid">아이디</label>
				<input id="userid" type="text" name="userid" maxlength="10" title="10자 까지 입력가능" required/>
			</p>
			<p>
				<label for="userpass">비밀번호</label>
				<input id="userpass" type="password" name="userpass" maxlength="8" title="8자 까지 입력가능" required/>
			</p>
			<p id="button">
				<input type="submit" value="로그인" title="로그인"/>
			</p>
		</fieldset>
	</form>
 </body>
</html>