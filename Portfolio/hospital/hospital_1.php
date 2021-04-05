<? include "hospital.php"; ?> 
<!DOCTYPE html>
<html lang='ko'>
<head>
    <meta charset="utf-8">
    <title>REHABILITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    /* 상단 link*/
    </style>
</head>
<body?>
<!-- 상단메뉴 Link -->
    <div class="container  mt-5">
        <div class="row ">
            <!-- 내용 -->
            <div>
                <h2 class="mb-5">▣ 진료시간</h2>
                <div class="mx-auto text-center" style="width:70%;">
                    <div class="mb-5">
                        <div class=" mb-3 border border-2 border-secondary rounded-pill">
                        <span class="fs-4">평&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</span>
                        <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 18:00</span></br>
                        </div>

                        <div class="mb-3 border border-2 border-secondary rounded-pill">
                            <span class="fs-4">토&nbsp;요&nbsp;일</span>
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;오전 09:00 ~ 오후 13:00</span>
                        </div> 

                        <div class="mb-3 border border-2 border-secondary rounded-pill">
                            <span class="fs-4">점심시간</span>
                            <span>&nbsp;&nbsp;&nbsp;오후 13:30 ~ 오후 14:30</span>
                        </div>

                        <div class="mb-3 border border-2 border-secondary rounded-pill">
                            <span class="fs-4">일요일 · 공휴일 휴진</span>
                        </div>            
                    </div>
                </div>

                <h2 class="mb-5">▣ 오시는 길</h2>
                    <div class="mx-auto" style="width:60%;">
                        <!-- 1. 지도 노드 -->
                        <div id="daumRoughmapContainer1617352618388" class="root_daum_roughmap root_daum_roughmap_landing"></div>

                        <!--
                            2. 설치 스크립트
                            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                        -->
                        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                        <!-- 3. 실행 스크립트 -->
                        <script charset="UTF-8">
                            new daum.roughmap.Lander({
                                "timestamp" : "1617352618388",
                                "key" : "256gw",
                                "mapWidth" : "50%",
                                "mapHeight" : "360"
                            }).render();
                            </script>
                    </div>
            </div>
        </div>
    </div>

</body>
</html>

