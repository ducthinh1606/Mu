<?php
@include ('header.php');

if (isset($_POST['add']))
{
    // Nếu người dùng có chọn file để upload
    if (isset($_FILES['start']) && isset($_FILES['end']))
    {
        // Nếu file upload không bị lỗi,
        // Tức là thuộc tính error > 0
        if ($_FILES['start']['error'] > 0 || $_FILES['end']['error'] > 0 || is_numeric($_POST['floor']) == false)
        {
            echo 'Chưa up đầy đủ hoặc sai thông tin';
        }
        else{
            // Upload file

            $id = $_POST['id'];
            $start = $_FILES['start']['name'];
            $end = $_FILES['end']['name'];
            $floor = $_POST['floor'];

            $sql = "update maze set start='$start', endpoint = '$end', floor='$floor' where id=$id";



            move_uploaded_file($_FILES['start']['tmp_name'], 'maze/'.$_FILES['start']['name']);
            move_uploaded_file($_FILES['end']['tmp_name'], 'maze/'.$_FILES['end']['name']);

            if (mysqli_query($conn, $sql)) {
                header('Location: http://thuvienmu.com/home.php');
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    else{
        echo 'Bạn chưa chọn file upload';
    }
}
