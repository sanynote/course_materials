<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>join_form</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; background-color:#fcfcfc;}

		form{width:300px; margin:100px auto 0; box-shadow:3px 3px 20px rgba(0,0,0,0.1);
		border:1px solid #ccc; border-radius:5px; padding:10px 20px; font-size:12px;}

		legend{text-align:center; font-size:16px; padding:10px 0;}

		form p{padding:5px 0;}

		label{display:block; width:80px; background-color:#eee; text-align:center;
		line-height:27px; border:1px solid #ccc; float:left;}

		input{width:210px; border:1px solid #ccc; border-left:none; 
		text-indent:10px; height:27px; line-height:27px;}

		#button{width:150px; margin:0 auto; }
		#button input{display:inline-block; width:60px; height:26px; background-color:#fff;
		text-indent:0; border-left:1px solid #ccc;}

		#button input:hover{background-color:#f00; color:#fff; cursor:pointer;}

		/*아이디 중복 체크 (span) */
		#idChkDesc{width:230px; height:20px; float:left; text-align:center; padding:10px 5px; text-align:right;}

		/*아이디 중복 체크 옆에 버튼*/
		#idChkBtn{width:50px; text-align:center; text-indent:0; border-left:1px solid #ccc; margin:5px 0; font-size:12px;}

		#postArea{width:100%;}
		#postArea input{width:97px; border:1px solid #ccc;}
		#postArea #post3{width:190px; text-indent:5px; display:inline-block;}
		#postArea #postBtn{text-indent:0; width:90px; margin-left:5px;}

		#add1, #add2{width:148px; border:1px solid #ccc;}
		#add2{width:298px;}
	</style>

	<!--[1] 아이디 중복관련 script-->
	<script>
		function idChkBtns(){
			
			/*
				1) userid 공간을 id 객체로 만들기
				2) idChkDesc	공간을 id 객체로 만들기

				:: 각각의 공간이 console 창에 잘 출력되는지 확인하기
			*/

			var userid = document.getElementById("userid");
			
			// span 태그
			var idChkDesc = document.getElementById("idChkDesc");
			// console.log(idChkDesc);

			/*
				3) userid 공간이 비어 있다면 , 알림창으로 아이디가 비어 있습니다. 띄우기
				4) 해당하는 userid 공간으로 커서가 이동 되어 있도록 만들기
			*/

			if(userid.value =="" ){
				alert("아이디가 비어있습니다.");
				userid.focus();
				idChkDesc.innerHTML="<strong style='color:red;'>아이디 필수입력</strong>";
			}
			else{
				
				/*
					[해야 할 일]
						
						1) 아이디가 중복되었다면 사용이 불가능한 아이디 입니다. 문구 출력받기
						2) 아이디가 중복되지 않았다면 사용이 가능한 아이디 입니다. 문구 출력받기

					[javascript를 이용한 서버사용 (ajax) 정리]
						
						: form안에서 form을 사용할 경우 action 끼리 충돌이 발생함!
						: form을 여러개 사용해야 할 경우에는 분해해서 사용해야 함!

						: id 중복을 확인하는 form을 따로 만들고, 회원가입용 form을 따로 만든다면 문제 없이 사용할 수 있음!
						: form을 분해하지 않고 사용하기 위하여 비동기식 방법인 ajax를 사용함!
							(javascript을 사용하여 서버 사용가능, jQuery 버전이 많이 사용됨!)
				*/

				xmlhttp = new XMLHttpRequest();

				xmlhttp.open("GET","02_idDouble.php?q="+userid.value,true);

				xmlhttp.onreadystatechange = function(){
					
					if(xmlhttp.readyState == 4 && xmlhttp.status ==200){
						
						idChkDesc.innerHTML = xmlhttp.responseText;
					}
				
				};
				
				xmlhttp.send();
			}
		}
	</script>


	<!--[2] 우편번호 관련 script-->
	<!--
		1) POSTCODE 만들기
		2) 주소
			http://postcode.map.daum.net/guide
	
		3) post3에 새 우편번호 가져오기
			add1에 기본 주소 가져오기
	-->
	<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
	<script>
		
		function postcode(){
			new daum.Postcode({
				oncomplete: function(data) {
					document.getElementById("post3").value=data.zonecode;
					document.getElementById("add1").value=data.address;
					document.getElementById("add2").focus();
				}
			}).open();
		
		}
	</script>
 </head>
 <body>
	<form action="02_join_control.php" method="post">
		<legend>회원가입</legend>
		<p>
			<label for="userid">아이디</label>
			<input id="userid" type="text" name="userid" placeholder="10자 까지 입력가능" maxlength="10" required/>
			<span id="idChkDesc">※ 아이디 중복체크</span>
			<input id="idChkBtn" type="button" value="중복체크" onclick="idChkBtns();"/>
			<!--
				[매우중요]
					id명과 이벤트 같을 경우 (onclick) , function 기능이 작동하지 않을 수 있으므로 주의하기!

				[참고]
					id 명은 idChkBtn
					onclick 명은 idChkBtns()
			-->
		</p>
		<p>
			<label for="userpass">비밀번호</label>
			<input id="userpass" type="password" name="userpass" placeholder="8자 까지 입력가능" maxlength="8" required/>
		</p>
		<p>
			<label for="username">이름</label>
			<input id="username" type="text" name="username" required/>
		</p>
		<p>
			<label for="useremail">이메일</label>
			<input id="useremail" type="email" name="useremail" required/>
		</p>
		<p>
			<label for="userphone">전화번호</label>
			<input id="userphone" type="tel" name="userphone" placeholder="010-123-4567" title="전화 번호 기입시 - 작성" required
			pattern="\d{3}-\d{3,4}-\d{4}"/>
		</p>
		<p id="postArea">
			<input id="post3" type="text" name="post3" title="새로운 우편번호" placeholder="새로운 우편번호"/>
			<input id="postBtn" type="button" value="우편번호 찾기" onclick="postcode();"/>
		</p>
		<p>
			<label for="add1">상세주소</label>
			<input id="add1" type="text" name="add1" title="상세주소1"/> - <input id="add2" type="text" name="add2" title="상세주소2"/>
		</p>
		<p id="button">
			<input type="submit" value="가입하기" title="가입하기"/>
			<input type="reset" value="다시작성" title="다시작성"/>
		</p>
	</form>
 </body>
</html>
<!--
	
	[form 사용하기]

		1) form안에 form을 사용할 수 없음!
			
			* action 끼리 충돌이 발생함! 
			* 어느 주소를 이용해야 할지 서로 알 수 없음!

		2) a태그안에 a태그를 사용하기 어려움!
			
			* href 끼리 충돌이 발생함!


		3) form 안에서 a태그를 사용할 수 없을까?
			
			* form안에 a태그 사용 가능함!
			조건) 아무기능이 없는 태그를 담아줄때 사용가능
			


		문제1: 아래는 사용이 가능할까?

			<a href="" title="">
				<input type="submit" />
			</a>

		답:
			전송버튼을 누르는 순간, a태그의 href가 활성화 되고, 그 위에 form의 action과 충돌이 발생한다!
			그래서 사용이 어렵다!
		


		문제2: 아래는 사용이 가능할까?

			<a href="" title="">
				<input type="button" />
			</a>
		
		답:
			전송, 새로고침 등등의 어떤 역할이 없기 때문에 a태그 사용이 가능하다!
	
-->