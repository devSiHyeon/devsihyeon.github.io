<?
    error_reporting(E_ALL & ~E_NOTICE); 
    ini_set('display_errors', '1');
    $db = mysqli_connect("localhost", "lab", "lab0323", "lab");

    $idx = $_POST['idx'];
    $name = $_POST['name'];
    $tell = $_POST['tell'];
    $title = $_POST['title'];
    $memo = $_POST['memo'];

    $sql = "
            UPDATE hospital
            SET
                name = '$name',
                tell = '$tell',
                title = '$title',
                memo = '$memo'
            WHERE 
                idx = '$idx'
    ";

    $result = mysqli_query($db, $sql);
    print_r($sql);
    print_r($db);
    if($result){
        echo "
            <script>
            alert('수정하였습니다');
            location.href='hospitalList.php';
            </script>
            ";
    } else {
        echo "
                <script>
                alert('오류가 발생하였습니다. 관리자에게 문의해주세요.');
                history.back();
                </script>
            ";
    }
?>