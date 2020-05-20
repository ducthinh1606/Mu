<?php
@include ('connect.php');
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

$sql = "SELECT DISTINCT floor FROM maze";
$result = $conn->query($sql);

$sql1 = "select * from maze";

$result1 = $conn->query($sql1);
if ($result->num_rows > 0)
{

?>
<html>
<head>
    <title>trang chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <style>
        .mainmenubtn {
            background-color: red;
            color: white;
            border: none;
            padding:5px;
            margin-top:5px;
            border-radius: 20px;
        }

        .mainmenubtn:hover {
            background-color: red;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-child {
            display: none;
        }
        .dropdown-child a {
            color: black;
            padding: 5px;
            text-decoration: none;
            display: block;
        }
        .dropdown:hover .dropdown-child {
            display: block;
        }
    </style>
</head>
<body>
<div class="container">
    <div id="header">
        <div class="row">
            <div class="col-md-12 text-right">
                <div class="dropdown">
                    <button class="mainmenubtn"><?php echo $_SESSION['username'] ?></button>
                    <div class="dropdown-child">
                        <a href="">Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <table width="1000" align="center" border="1">
            <tr>
                <td align="center" height="80px">[ MAZE ]</td>
            </tr>
            <tr>
                <td height="80px"></td>
            </tr>
            <tr>
                <td>
                    <select onchange='floor(this)'>
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" .$row['floor'] ."'>Floor: " . $row["floor"] . "</option>";
                        }
                        }?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="" method="get">
                        <table width="1000" align="center" border="1">
                            <tr align="center">
                                <td>
                                    Start
                                </td>
                                <td>
                                    End
                                </td>
                            </tr>
                            <table class="floor">

                            </table>
                        </table>
                    </form>
                </td>
            </tr>
            <script>
                function floor(obj) {
                    var value = obj.value;
                    $.ajax({
                        type: "get",
                        url: "adminfloor.php",
                        data: {
                            'value': value
                        },
                        success: function (data) {
                            $('.maze').remove();
                            $('.floor').prepend(data);
                        }
                    })
                }
            </script>
    </div>
