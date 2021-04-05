<? include "hospital.php"; ?> 
<!DOCTYPE html>
<html lang='ko'>
<head>
    <meta charset="utf-8">
    <title>REHABILITATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
    /* 상단 link*/


    /* 본문 */
        table{
            table-layout:fixed;
            border:1px solid #C0C0C0;
            text-align:center;
            border-left: none;  /* 왼쪽 줄 삭제 */
            border-right: none;
            vertical-align:middle;
        }
        td{
            border:1px solid #C0C0C0;
            text-align:center;
            text-overflow:ellipsis; 
            overflow:hidden;  /* 스크롤이 생기지 않도록 */
            white-space:nowrap;   /*  줄바꿈을 강제로 하지 않도록  */
            vertical-align:middle;
        }
        a:link {            /* 아직 방문하지 않은 링크*/
            text-decoration: none;
        }
        a:visited {         /* 사용자가 방문한 적이 있는 링크 */
        }

    </style>
</head>
<body>
<!-- 상단메뉴 -->

<!-- 게시판 -->
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td class="box1 col-1">NO</td>
                    <td class="box1 col-2">작성자</td>
                    <td class="box2 col">제목</td>
                    <!-- <td class="box2 col-5">내용</td> -->
                    <td class="box1 col-2">작성일</td>
                    <td class="box1 col-2">조회수</td>
                    <td class="box1 col-2">삭제</td>
                </tr>
                <? 
                    // $db = mysqli_connect("localhost", "lab", "lab0323", "lab");
                    
                    // 검색기능
                    if($_GET['search_2']) {
                        
                        $search_1 = trim($_GET['search_1']);
                        $search_2 = trim($_GET['search_2']);
                        
                        $sql = "
                        SELECT *
                        FROM hospital
                        WHERE $search_1 LIKE '%$search_2%'
                        order by idx asc
                        ";
                    } else  {
                        $sql = "
                        SELECT *
                        FROM hospital
                        ORDER BY idx ASC";
                    }

                    $result = mysqli_query($db, $sql);
                   
                    //조회수
                    $bno = "
                            UPDATE hospital
                            SET hit = hit + 1
                            WHERE idx = {$_GET['idx']}
                            ";
                    // $hospital = mysqli_real_escape_string($db, $_GET['idx']); // 필요없는 변수 선언같은데요?
                    while($row = mysqli_fetch_array($result)){
                        
                        ?>
                <tr>
                    <td><?=$row['idx']?></td>
                    <td><a href="hospitalRead.php?idx=<?=$row['idx']?>"><?=$row['name']?></td>
                    <td>&nbsp;&nbsp;&nbsp;<?=$row['title']?></td>
                    <!-- <td>&nbsp;&nbsp;&nbsp;<?=$row['memo']?></td> -->
                    <td><?=$row['date']?></td>
                    <td><?=$row['hit']?></td>
                    <td><a href = "hospitalDelete.php?idx=<?=$row['idx']?>" class="btn btn-outline-secondary">삭제</a></td>
                </tr>
                <?  } 
                    mysqli_close($db);  ?>
            </table>
        </div>
    </div>
    <div class="container w-80 mt-5 mb-5">
        <div class="text-center">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <select name = "search_1" class="btn btn-outline-secondary">
                <option value="name">작성자</option>
                <option value="name">제목</option></option>
                <option value="name">내용</option></option>
            </select>
            <input type="text" name="search_2" class="btn btn-outline-secondary">
            <button type="submit" class="btn btn-outline-secondary" >검색</button>
            <a href="hospitalWrite.php" class="btn btn-outline-secondary">작성</a>
        </div>
    </div>
    

<!-- 부트스트랩 링크 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  
</body>
</html>