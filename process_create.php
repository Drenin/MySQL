<?php
    //var_dump($_POST);
    $conn = mysqli_connect("localhost", "root", "123456", "pknu_db");

    $filtered = array(
        'title'=>mysqli_real_escape_string($conn, $_POST['title']),
        'author'=>mysqli_real_escape_string($conn, $_POST['author']),
        'description'=>mysqli_real_escape_string($conn, $_POST['description'])
    );


    $sql = "
    INSERT INTO Poems 
        (title, author, description, created) 
        VALUES(
            '{$filtered['title']}', 
            '{$filtered['author']}', 
            '{$filtered['description']}', 
            NOW());
    ";

    //die($sql);

    $result = mysqli_query($conn, $sql);
    if($result === false)
    {
        echo '문제가 발생했습니다.';
        echo mysqli_error($conn);
    }
    else
    {
        echo '성공했습니다. <a href = "phpSelect.php">돌아가기</a>';
    }

?>