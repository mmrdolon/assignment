<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23-Dec-14
 * Time: 7:00 PM
 */

$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "select * from users WHERE id = $id";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>

<a href="list.php">Go to Home</a>