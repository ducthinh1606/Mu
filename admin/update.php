<?php
    @include('header.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM maze WHERE id='$id'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $start = $row['start'];
        $end = $row['endpoint'];
        $floor = $row['floor'];
?>
        <form method="post" action="process.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div>Img Start</div>
            <img src="maze/<?php echo $start ?>" alt="">
            <input type="file" name="start"/><br><br>
            <div>Img End</div>
            <img src="maze/<?php echo $end ?>" alt="">
            <input type="file" name="end"/><br><br>
            <div>Floor</div>
            <input type="number" name="floor" value="<?php echo $floor ?>"><br><br>
            <input type="submit" name="add" value="Upload"/>
        </form>
<?php
    }
}
?>
