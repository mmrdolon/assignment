<?php

$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];

$link = mysqli_connect("localhost",
                        "root",
                        "lict@2",
                        "students");

$query = "INSERT INTO `students`.`users` ('id',
`first_name` ,
`last_name`,'phone_number'
)
VALUES (1,
    'Mamdudur', 'Rahman',016655554414
)";

mysqli_query($link, $query);

header('location:list.php');