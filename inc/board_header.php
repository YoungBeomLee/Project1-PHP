<header>
    <div class="board_main_header" id="board_main_header">
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
                        <span class="block"><img src="images/sun.png" alt="해"></span>
                    </li>
                    <li>
                        <span class="block"><img src="images/moon_default.png" alt="달"></span>
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
                                <a href="#">스타트업 경진대회<br>(빅스타)</a>
                            </li>
                            <li>
                                <a href="#">더 좋은 일자리 <br>만들기</a>
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
        <div id="section1_sitemap" class="board_main">
            <div class="inner">
                <h1 class="board_title">한국가스공사 자유 게시판</h1>
                <div class="write_list">
                    <h2>글 목록</h2>
                    <ul>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "krkr127127");
                        if (!$conn) {
                            echo "db연결실패";
                        } else {
                            echo "db연결성공";
                        }
                        $sql = "SELECT * FROM `free_board`";
                        $result = mysqli_query($conn, $sql);
                        $list = '';
                    
                        //반복문
                        while ($row = mysqli_fetch_array($result)) {
                            $list = $list . "<li>{$row['number']}:<a href='inc/board_view.php?number={$row['number']}'>{$row['name']}</a>:{$row['message']}</li>";
                        }
                        echo $list;
                        ?>
                    </ul>
                    <a href="inc/board_view.php"></a>
                </div>
                <hr />
                <div class="write_area">
                    <p><a href="inc/board_write.php">글쓰기</a></p>
                </div>
                <hr />
                <div class="write_search">
                    <h2>글검색</h2>
                    <form action="inc/board_search_result.php" method="post">
                        <h3>검색할 키워드를 입력하세요</h3>
                        <p>
                            <label for="search">키워드: </label>
                            <input type="search" id="search" name="bdkey">
                        </p>
                        <input type="submit" value="검색">
                    </form>
                </div>
                <hr>
                <div class="wirte_del">
                    <h2>글삭제</h2>
                    <form action="inc/board_delete.php" method="post">
                        <h3>삭제할 글번호를 입력하세요</h3>
                        <p>
                            <label for="msgdel">글번호: </label>
                            <input type="text" name="delnum" id="msgdel">
                        </p>
                        <input type="submit" value="삭제">
                    </form>
                </div>
            </div>
        </div>

    </div>
</header>