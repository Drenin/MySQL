<?php
$conn = mysqli_connect("localhost", "root", "123456", "pknu_db");

$sql = "select * from Poems";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';

$row = mysqli_fetch_array($result);
echo '<h1>', $row['title'], '</h1>';
echo '<h2>', $row['author'], '</h2>';
echo '<h4>', $row['description'], '</h4>';



if($result == false)
{
    echo mysqli_error($conn);
}
?>