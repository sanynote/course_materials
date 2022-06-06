<!DOCTYPE html>
<html lang="ko">
 <head>
	<title>list</title>
	<meta charset="utf-8"/>
	<style>
		*{margin:0; padding:0;}
		body{margin:0; padding:0; font:12px/1.2em "Malgun Gothic";}
		a:link, a:visited{color:#333; text-decoration:none;}
		a:hover, a:focus{color:#f00; text-decoration:underline;}

		#wrap{width:940px; margin:50px auto;}
		#wrap h3{text-align:center; font-size:25px; color:#ddd;
		text-transform:uppercase; padding-bottom:25px;}

		#link{width:100%; text-align:right; padding:10px 0;}
		#link a{padding:0 8px; color:#000; text-shadow:1px 1px 3px rgba(0,0,0,0.2);}
		#link a:hover, #link a:focus{background-color:#f00; color:#fff;}

		#freeboard{width:100%; line-height:22px; font-size:14px;}
		#freeboard caption{display:none;}

		#freeboard th, #freeboard td{padding:10px; border-bottom:1px solid #f1f1f1;}
		#freeboard th{background-color:#f5f5f5; color:#e52202; border-right:1px solid #fefefe;}

		#freeboard td{color:#333; padding-left:30px;}
		#freeboard .writeClk td{border:none;}

		.writeClk{text-align:right;}
		/*
			table의 경우, td에 따라서 칸이 나뉘기 때문에 합쳐 놓지 않으면 글자가 오른쪽
			왼쪽, 가운데, 정렬이 되지 않는다!
			
			* 테이블은 사용하지 않는 칸 까지 계산해서 합쳐 놓지 않으면 벽에 막혀서 사용하기 어려움!
		*/

		.writeClk a{border:1px solid #ccc; padding:5px 10px; color:#333;}
		.writeClk a:hover, .writeClk a:focus{
			font-weight:700; color:#fff; background-color:#e52202;
			text-decoration:none;
		}

	</style>
 </head>
 <body>
	<div id="wrap">
		<h3>Free Board Produce</h3>
		<div id="link">
			<span>*</span><a href="#none" title="home">HOME</a>
			<span>*</span><a href="03_login.php" title="login">LOGIN</a>
			<span>*</span><a href="01_join_form.php" title="join">JOIN</a>
		</div>
		<table id="freeboard" title="게시판 제작">
			<caption>FREE BOARD</caption>
			<colgroup>
				<col width="10%"/>
				<col width="52%"/>
				<col width="13%"/>
				<col width="15%"/>
				<col width="10%"/>
			</colgroup>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">제목</th>
					<th scope="col">글쓴이</th>
					<th scope="col">작성일</th>
					<th scope="col">조회수</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="#none" title="no">번호표현</a></td>
					<td><a href="#none" title="title">제목출력</a></td>
					<td>이름 출력</td>
					<td>작성일 출력</td>
					<td>조회수 출력</td>
				</tr>
				<tr class="writeClk">
					<td colspan="5">
						<a href="03_login.php" title="로그인">로그인</a>
					</td>
					<!--
						td를 하나만 사용해도 , 위에서 5칸을 나누었기 때문에 합치지 않으면 
						끝에까지 영역을 사용하기가 어렵다!
					-->
				</tr>
			</tbody>
		</table>
	</div>
 </body>
</html>