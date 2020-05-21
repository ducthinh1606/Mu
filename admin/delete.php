<?php
@include ('header.php');

$id = $_GET['id'];

$sql = "delete from maze where id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Delete success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}