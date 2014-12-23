<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23-Dec-14
 * Time: 7:08 PM
 */
$id = $_GET['id'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "students");

$query = "DELETE FROM `students`.`users` WHERE `users`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');