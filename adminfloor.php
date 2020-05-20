<?php
@include('connect.php');

if (isset($_GET['value']))
{
    $value = $_GET['value'];

    $sql = "select * from maze where floor=$value";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            //Tạo bảng hiển thị ảnh maze
            echo "<table class='maze'>";
            echo "<tr>";
            echo "<td align='center'>";
            echo "<img width='400px' src='maze/". $row['start'] ."' alt=''>";
            echo "</td>";
            echo "<td align='center'>";
            echo "<img width='400px' src='maze/". $row['end'] ."' alt=''>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td height='50px'></td>";
            echo "</tr>";
            echo "</table>";
        }
    }
}