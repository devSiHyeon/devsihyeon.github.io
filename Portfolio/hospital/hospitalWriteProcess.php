<?
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    $db = mysqli_connect("localhost", "lab", "lab0323", "lab");

    $name = $_POST['name'];
    $tell = $_POST['tell'];
    $title = $_POST['title'];
    $memo = $_POST['memo'];

    $sql = "
            INSERT INTO
            hospital (name, tell, title, memo, date)
            VALUES('$name', '$tell', '$title', '$memo', NOW())
            ";
            $result = mysqli_query($db, $sql);
        
            if($result) {
                    echo "
                        <script>
                        alert('고객님의 문의가 접수 되었습니다. 오늘도 좋은 하루 되세요');
                        location.href='hospitalList.php';
                        </script>
                        ";
            }else{
                    echo"
                        <script>
                        alert('오류가 생겼습니다. 관리자에게 문의해주세요.');
                        </script>
                        ";
            }

                  
    // 게시판 순번 리셋 (AUTO_INCREMENT)
    // DB의 순번까지 변하기 때문에 사용하지 않음 -> 다음 부터는 $temp_no=1; 을 List에 작성하여 임의 번호를 부여할 것
        $sql_2 = " 
                ALTER TABLE hospital 
                AUTO_INCREMENT=1
                ";

        $sql_3 = " 
                SET @COUNT = 0
                ";

        $sql_4 = " 
                UPDATE hospital 
                SET 
                        idx = @COUNT:=@COUNT+1
                WHERE idx
                ";

        $result_2= mysqli_query($db, $sql_2);
        $result_3= mysqli_query($db, $sql_3);
        $result_4= mysqli_query($db, $sql_4);
    ?>
            <!-- history.back(); -->