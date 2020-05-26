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
            echo "<a data-fancybox='gallery' data-width='1000' data-height='1000' href='admin/maze/". $row['start'] ."'>";
            echo "<img width='400px' height='400px' class='zoom' src='admin/maze/". $row['start'] ."' alt=''>";
            echo "</a>";
            echo "</td>";
            echo "<td align='center'>";
            echo "<a data-fancybox='gallery' data-width='1000' data-height='1000' href='admin/maze/". $row['endpoint'] ."'>";
            echo "<img width='400px' height='400px' class='zoom' src='admin/maze/". $row['endpoint'] ."' alt=''>";
            echo "</a>";
            echo "</td>";
            echo "<td align='center'>";
            echo "<a href='admin/update.php?id=". $row['id'] ."'>Update</a><br>";
            echo "<a href='admin/delete.php?id=". $row['id'] ."'>Delete</a>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td height='50px'></td>";
            echo "</tr>";
            echo "</table>";
        }
    }
}