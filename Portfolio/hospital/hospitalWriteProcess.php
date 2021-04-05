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
    ?>
            <!-- history.back(); -->