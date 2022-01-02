# 2021-2-BDA(2021년 2학기 프로젝트)
# 주제: 고속도로 휴게소 인기 음식 랭킹 사이트 
# 사용한 데이터: 고속도로 공공데이터 포털 < https://data.ex.co.kr >  
경부 고속도로(망향(부산방향)/안성(서울방향)/천안삼거리(서울방향) 휴게소), 호남(여산(천안방향)/황전(순천방향)/벌곡(대전방향) 휴게소), 영동 고속도로(문막(강릉방향)/평창(강릉방향)/여주(강릉방향)휴게소) 데이터 이용
# 개발환경: PHP, MariaDB 10.6, HTML5
## DB 구축
***
### DB ER Diagram
![image](https://user-images.githubusercontent.com/76611903/147883207-fbc88563-a0e7-4ea9-ad2d-31e01a428694.png)

### DB 구성 (data script.txt 파일 참고)     

## PHP 파일 구성
***
### BestFood.php (휴게소별 인기음식 TOP5)
![image](https://user-images.githubusercontent.com/76611903/147883344-18b9507b-a9db-4536-8a78-e9944b48ba20.png)

### EntireRanking.php (전체 휴게소 전체 기간 인기음식 순위 및 월별 인기음식 순위) 
![image](https://user-images.githubusercontent.com/76611903/147883452-ca5f4bbc-3166-4b4e-8cab-23bed1e0a0fa.png)
![image](https://user-images.githubusercontent.com/76611903/147883474-ed55135b-2a25-4ebf-891a-0298cbddad53.png)
![image](https://user-images.githubusercontent.com/76611903/147883503-a8db0b08-191f-42c8-af30-93d6c8f8c3d5.png)
![image](https://user-images.githubusercontent.com/76611903/147883512-0e58a5b0-ba6e-48f8-95d7-45d3589fc2ea.png)
![image](https://user-images.githubusercontent.com/76611903/147883529-c9f582bb-1611-4e5c-b4dd-16be0959fbb1.png)

### FvFoods.php (전체 인기음식 TOP5 중 사용자가 먹고싶은 메뉴 담을 수 있는 기능)
![image](https://user-images.githubusercontent.com/76611903/147883910-122bd11a-5b92-44aa-89b9-5f57a9e0de26.png)

### BulletinBoard.php 한 줄 게시판 틀
### HitCount.php 게시판에서 글 누르면 hit 올라감
![image](https://user-images.githubusercontent.com/76611903/147883918-b0a0fa59-7f43-4bb2-934a-7a0c7e8fc0e6.png)

### EditDeletePage.php 게시판에서 Edit/Delete 눌렀을 때 넘어가는 페이지
### Edit.php Edit버튼 눌렀을 때 동작 (게시글 수정)
### Delete.php Delete버튼 눌렀을 때 동작 (게시글 삭제)
![image](https://user-images.githubusercontent.com/76611903/147883948-e5a4b1c4-cd90-44f2-94fb-97f18a59bb2c.png)


### WritePage.html 게시판에서 Write버튼 눌렀을 때 동작
### Write.php 게시판에서 WritePage에서 글 쓰면 글 저장
![image](https://user-images.githubusercontent.com/76611903/147883928-256cd61f-15e1-4bf2-8c6d-6ca81947bede.png)

