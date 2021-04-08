<? include "hospital.php"; ?> 
<!DOCTYPE html>
<html lang='ko'>
<head>
    <meta charset="utf-8">
    <title>REHABILITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    /* 상단 */
        .menu{
            color:white;
        }
        .box1{
            width:150px;
            height:40px;
            background-color:#D3D3D3;
        }
        .box2{
            width:200px;
            background-color:#D3D3D3;
        }
    </style>
</head>
<body>
<!-- 상단메뉴 -->
<div class="mx-auto mt-4" style="width:75%;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <!-- 배너 이미지 -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="index1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="index2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="index3.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <!-- 진료시간 -->
    <div class="mt-5 mb-5 text-center">
    <div class="mx-auto" style="width:70%;">
        <h2 class="mb-3" style="color:#1E90FF;">진료시간</h2>
            <div class="mb-5" >
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
    </div>
</div>


</body>
</html>

