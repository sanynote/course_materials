<?php

	include "00_conn.php";

	/*
		세션이 유지되는 시간
		네트워크 터널에 유지되는 시간
		30은 30분 유지
	
	*/

	session_cache_expire(30);
	session_start();

	/*
		[선행작업]

			1) phpMyAdmin 페이지에서 콘솔 이용하기
			2)
				SELECT * FROM stdscore, no 필드를 기준으로 확인해보면 1 2 3 4 5... 순서로 작성되어있음
					: 최신의 글이 하단으로 작성됨

				SELECT * FROM stdscore ORDER BY no DESC를 작성하면 no 필드를 기준으로 역순정렬됨
					+ DESC (역순)
					+ ASC (기본순서)

			[정리] 최신의 글을 가장 상단으로 가지고오려면 필드의 정보를 역순으로 조회해서 가져와야함
	
	*/

	/*
		[sql문 작성하기]
			1) 요청할 sql문은 no 필드를 기준으로 역순조회하기
			2) 로그인이 되어있다면 sql문 요청하기
	
	*/

	$sql = "SELECT * FROM freeboard ORDER BY no DESC";
	$result = mysqli_query($conn,$sql);

	/*
		result, 정보가 넘어가면 true 함께 생성됨
			if($result == true), if($result), result 값 자체가 true이기때문에 생략도 가능함
	*/
?>


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
<!--닫는 부분의 물음표 기호 한 칸 띄우기-->
<?php if( empty($_SESSION['userid']) ){ ?>
			<span>*</span><a href="03_login.php" title="login">LOGIN</a>
<?php }else{?>

			<strong style="color:#caf;"><?=$_SESSION['userid']?></strong>님 환영합니다
			<span>*</span><a href="03_1_logout.php" title="logout">LOGOUT</a>
<?php } ?>
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

<?php

	/*
		[반복되는 태그 확인하기]
			1) ol li, ul li라면 li 태그가 반복됨
			2) table이라면 tr부터 반복이 됨

		[while문 확인(참의 조건일 때 반복이 일어남)]
			
			var i=0;
			while(true){
				i++;
			}
	*/

	$num=0;
	while($row=mysqli_fetch_array($result)){

?>

				<tr>
					<td><a href="09_read.php?no=<?=$row['no']?>" title="no=<?=$row['no']?>"><?=$num+1?></a></td>
					<td><a href="09_read.php?no=<?=$row['no']?>" title="title"><?=$row['title']?></a></td>
					<td><?=$row['name']?></td>
					<td><?=$row['wdate']?></td>
					<td><?=$row['view']?></td>
				</tr>
				
<?php $num++; } ?>
				<tr class="writeClk">
					<td colspan="5">
<?php if( empty($_SESSION['userid']) ){ ?>
						<a href="03_login.php" title="로그인">로그인</a>
<?php }else{?>
						<a href="07_write.php" title="글쓰기">글쓰기</a>
<?php } ?>
					</td>
					<!--
						[응용문제]
							SESSION['userid'] 공간이 비어져있다면 로그인 버튼이 나타나도록 만들고,
							아니라면 글쓰기 버튼이 나타나도록 만들기
					-->
				</tr>
			</tbody>
		</table>
	</div>
 </body>
</html>