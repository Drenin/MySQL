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

if(isset($_GET['id']))
{
    $sql = "select * from Poems where id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title'] = $row['title'];
    $article['author'] = $row['author'];
    $article['description'] = $row['description'];
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

        <form action = "myprocess_update.php" method = "POST">
            <input type = "hidden" name="id" value="<?=$_GET['id']?>">
            <p><input type = "text" name = "title" placeholder = "title" value="<?=$article['title']?>"></p>
            <p><input type = "text" name = "author" placeholder = "author" value="<?=$article['author']?>"></p>
            <p><textarea name = "description" placeholder = "description"><?=$article['description']?></textarea></p>
            <p><input type = "submit"></p>

        </form>

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