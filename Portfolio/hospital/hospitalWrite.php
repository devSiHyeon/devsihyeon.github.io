<? include "grade.php"; ?>

<!DOCTYPE html>
<html lang='ko'>
<head>
    <meta charset="utf-8">
    <title>REHABILITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        .menu{
            color:white;
        }
        
        table, tr, td{
            border:1px solid #000000;
        }
        .box{
            width:100px;
            text-align:center;
        }
        .box2{
            width:500px;
            height:60px;
        }
        a:link { 
            text-decoration: none;
        }      
    </style>
</head>
<body>
    <!-- 상단메뉴 -->
    <div class="text-center mt-5">
    <a href="hospitalIndex.php"><img src="Logo.jpg"></a>
        <div class="row mt-4" style="background-color:#1E90FF;">
            <div class="col-sm mt-3 mb-3"><a href="hospital_1.php" class="menu">병원소개</a></div>
            <div class="col-sm mt-3 mb-3"><a href="hospital_2.php" class="menu">입원안내</a></div>
            <div class="col-sm mt-3 mb-3"><a href="hospitalTherapy.php" class="menu">재활치료</a></div>
            <div class="col-sm mt-3 mb-3"><a href="hospitalList.php" class="menu">고객문의</a></div>
            <div class="col-sm mt-3 mb-3"><a href="hospital_3.php" class="menu">입원상담</a></div>
        </div>
    </div>


<!-- 게시판 -->
<form action="hospitalWriteProcess.php" method="POST">
    <div class="container mt-5">
        <table class="mx-auto">
            <tr>
                <td class="box">이름</td>
                <td class="box2">&nbsp;&nbsp;<input name="name"></td>
            </tr>
            <tr>
                <td class="box">연락처</td>
                <td class="box2">&nbsp;&nbsp;<input name="tell"></td>
            </tr>
            <tr>
                <td class="box">제목</td>
                <td class="box2">&nbsp;&nbsp;<input name="title"></td>
            </tr>
            <tr>
                <td class="box">내용</td>
                <td class="box2">&nbsp;&nbsp;<textarea name="memo"></textarea></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-outline-secondary float-end mt-5" >작성</button>
        <a type="button" href="hospitalList.php" class="btn btn-outline-secondary float-end mt-5">목록</a>
    </div>
</form>
    

<!-- 부트스트랩 링크 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
</body>
</html>