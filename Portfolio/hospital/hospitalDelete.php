<?
    $db = mysqli_connect ("localhost", "lab", "lab0323", "lab");
    $hospital = mysqli_real_escape_string($db, $_GET['idx']);

    $sql = "
            DELETE FROM hospital
            WHERE idx = '$hospital'
            limit 1
        ";
    
    $result = mysqli_query($db, $sql);

    if($result){
        echo "
                <script>
                alert('삭제 되었습니다');
                location.href='hospitalList.php';
                </script>
            ";
        
    }else{
        echo "
                <script>
                alert('삭제하는 과정에서 문제가 생겼습니다.');
                location.href='hospitalList.php';
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