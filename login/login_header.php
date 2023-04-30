<header>
      <div class="main_header" id="main_header">
        <div class="header_topbox">
          <div class="inner">
          <p class="notice_board"><a href="board.php">게시판 바로가기</a></p>  
          <ul class="gnb fr">
              <li><a href="#">ENG</a></li>
              <li><a href="#">KOR</a></li>
              <li>
                <span class="block"><a href="login.php">어린이 KOGAS</a></span>
              </li>
            </ul>
          </div>
        </div>
        <div class="header_bottombox">
          <div class="inner">
            <ul class="mode_ch fl">
              <li>
                <span class="block"><img src="images/sun.png" alt="해" ></span>
              </li>
              <li>
                <span class="block"><img src="images/moon_default.png" alt="달" ></span>
              </li>
            </ul>
            <h1 class="img_headlogo">
              <div class="coo_logo"><a href="index.php" class="coo_logo"></a></div>
            </h1>
            <div class="nav fl">
              <ul class="nav_wrap">
                <li><a href="#">KOGAS소개</a></li>
                <li><a href="#">함께해요</a></li>
                <li><a href="#">청정에너지</a></li>
                <li><a href="#">지식IN</a></li>
                <li><a href="#">열린경영</a></li>
                <li><a href="#">정보공개</a></li>
              </ul>
            </div>
            <div class="threebar"></div>
          </div>
          <div class="gnb_dep2">
            <div class="dep2_wrap">
              <div class="dep2_ulwrap">
                <ul class="dep2_1">
                  <li><a href="#">KOGAS개요</a></li>
                  <li><a href="#">뉴스룸</a></li>
                  <li><a href="#">KOGAS사보</a></li>
                  <li><a href="#">CEO인사말</a></li>
                  <li><a href="#">공사연혁</a></li>
                  <li><a href="#">조직안내</a></li>
                  <li><a href="#">채용정보</a></li>
                </ul>
                <ul class="dep2_2">
                  <li><a href="#">KOGAS홍보자료</a></li>
                  <li><a href="#">천연가스홍보관</a></li>
                  <li><a href="#">온라인민원</a></li>
                  <li><a href="#">고객지원제도</a></li>
                  <li><a href="#">선수단 소개</a></li>
                  <li><a href="#">사회공헌</a></li>
                  <li><a href="#">비정규직 정규직 전환 알림방</a></li>
                  <li>
                    <a href="#">스타트업 경진대회<br >(빅스타)</a>
                  </li>
                  <li>
                    <a href="#">더 좋은 일자리 <br >만들기</a>
                  </li>
                </ul>
                <ul class="dep2_3">
                  <li><a href="#">수소에너지 사업</a></li>
                  <li><a href="#">미래에너지 사업</a></li>
                  <li><a href="#">천연가스사업</a></li>
                  <li><a href="#">해외사업</a></li>
                  <li><a href="#">연구개발</a></li>
                </ul>
                <ul class="dep2_4">
                  <li><a href="#">수소에너지 정보</a></li>
                  <li><a href="#">천연가스정보</a></li>
                  <li><a href="#">천연가스투어</a></li>
                  <li><a href="#">천연가스요금정보</a></li>
                  <li><a href="#">도시가스열량제도</a></li>
                  <li><a href="#">천연가스보고서</a></li>
                  <li><a href="#">통합자료실</a></li>
                  <li><a href="#">용어사전</a></li>
                </ul>
                <ul class="dep2_5">
                  <li><a href="#">경영공시</a></li>
                  <li><a href="#">지속가능경영</a></li>
                  <li><a href="#">저탄소경영</a></li>
                  <li><a href="#">안전환경경영</a></li>
                  <li><a href="#">윤리인권경영</a></li>
                  <li><a href="#">혁신경영</a></li>
                  <li><a href="#">IR정보</a></li>
                  <li><a href="#">동반성장</a></li>
                </ul>
                <ul class="dep2_6">
                  <li><a href="#">KOGAS정보</a></li>
                  <li><a href="#">정보공개제도</a></li>
                  <li><a href="#">공공데이터제공</a></li>
                  <li><a href="#">사전정보공표</a></li>
                  <li><a href="#">사업실명제</a></li>
                </ul>
              </div>
            </div>
            <div class="dep2_servicegnb">
              <div class="dep2_servicegnb_inner">
                <h4>자주찾는 서비스</h4>
                <ul class="dep2_servicegnb_info">
                  <li><a href="#">채용안내</a></li>
                  <li><a href="#">천연가스 도매요금</a></li>
                  <li><a href="#">고객지원 제도</a></li>
                  <li><a href="#">출입신청</a></li>
                  <li><a href="#">온라인민원</a></li>
                  <li><a href="#">공지사항</a></li>
                  <li><a href="#">주요사업 안내</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="section1_sitemap">
          <div class="inner">
            <div class="login_test"><h1>로그인 테스트</h1>
          <form action="" method="post">
          <p>
            <label for="email">이메일:</label>
            <input type="text" id="email" name="email" placeholder="이메일을 입력하세요." autocomplete="off">
          </p>
          <p>
            <label for="password">비밀번호:</label>
            <input type="password" id="password" name="password" placeholder="비밀번호를 입력하세요.">
          </p>
          <p><input type="submit" name="login" value="로그인"></p>
          </form>
          </div>
          <div class="error">
            <p>
              <?php
              if(isset($status)){
                echo $status;
              }
              ?>
            </p>
          </div>
          </div>
          </div>
        
      </div>
    </header>