<?php
@include ('header.php');

$id = $_POST['id'];
$start = $_FILES['start']['name'];
$end = $_FILES['end']['name'];
$floor = $_POST['floor'];

$sql = "update maze set start='$start', endpoint = '$end', floor='$floor' where id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Update success";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
