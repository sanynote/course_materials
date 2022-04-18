/*ver-2: 두번째 문법 사용하기 (선택한 문서가 준비가 되면 기능구현 해주세요.)*/

		$(document).ready(function(){
			
			/*1) 클릭전에 내용들 숨기기*/
			$("dd").css({"display":"none"});
			
			/*
				2) 클릭 후 기능구현하기
					: dt를 클릭하면 해당하는 내용이 effect 기능으로 부드럽게 나타나도록 만들기
					: 나머지 dd들은 숨겨져있도록 만들기 (부드럽게 올라가야 함)
					: accodion.js 분해해서 제출하기

					필수) this, next, slideUp, slideDown 

					정리) dt 클릭하면 다음 대상 보여주세요
			*/

			/*
				[대상 선택하기]

					$(this).siblings()		: 형제요소
			*/ 
			$("dt").click(function(){
		
				$("dd").slideUp(1000,"swing");
				$(this).next().slideDown(1000,"swing");

			});
			
		});
