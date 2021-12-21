<?php
$list='';
$conn = mysqli_connect("localhost", "root", "123456", "pknu_db");
$sql = "select * from Poems";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    $list = $list."<li><a href = \"phpSelect.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
    'title'=>'안내의 말',
    'description'=>'대한민국의 시와 시인들'
);

$update_link = '';
$delete_link = '';

if(isset($_GET['id']))
{
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "select * from Poems where id={$filtered_id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['author'] = $row['author'];
    $article['description'] = $row['description'];

    $update_link = '<a href = "update.php?id='.$_GET['id'].'">update</a>';

    $delete_link = '
    <form action = "process_delete.php" method = "POST">
        <input type = "hidden" name = "id" value = "'.$_GET['id'].'">
        <input type = "submit" value = "delete">
    </form>
    ';

}

?>

<html>
    <head>
        <meta charset = "utf-8">
        <title>Poems</title>
        
    </head>
    <body>
        <h1>우리나라의 시</h1>    
        <ol>
            <?php 
                echo $list; 
            ?>
        </ol>
        

        <a href = "create.php">create</a>
        <?= $update_link ?>
        <?= $delete_link ?>



        <h2>
            <?php 
                echo $article['title']; 
            ?>
        </h2>
        <h3>
            <?php 
                echo $article['author']; 
            ?>
        </h3>
        <h4>
            <?php 
                echo $article['description']; 
            ?>
        </h4>
    </body>
</html>