<?php
    //var_dump($_POST);
    $conn = mysqli_connect("localhost", "root", "123456", "pknu_db");

    settype($_POST['id'], 'integer');
    $filtered = array(
        'id'=>mysqli_real_escape_string($conn, $_POST['id']),
        'title'=>mysqli_real_escape_string($conn, $_POST['title']),
        'author'=>mysqli_real_escape_string($conn, $_POST['author']),
        'description'=>mysqli_real_escape_string($conn, $_POST['description'])
    );


    $sql = "
        update Poems set
        title = '{$filtered['title']}',
        author = '{$filtered['author']}',
        description = '{$filtered['description']}'
        where id = {$filtered['id']}
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
        echo '업데이트 성공했습니다. <a href = "phpSelect.php">돌아가기</a>';
    }

?>