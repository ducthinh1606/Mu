<?php @include('header.php');
$sql = "SELECT DISTINCT floor FROM maze";
$result = $conn->query($sql);


$sql1 = "select * from maze where floor=1";

$result1 = $conn->query($sql1);
if ($result->num_rows > 0)
{

?>

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
                    <?php
                    if($result1->num_rows > 0)
                    {
                        while ($row = $result1->fetch_assoc()){ ?>
                            <table class='maze'>
                                <tr>
                                    <td align='center'>
                                        <img width='400px' src='admin/maze/<?php echo $row['start'] ?>' alt=''>
                                    </td>
                                    <td align='center'>
                                        <img width='400px' src='admin/maze/<?php echo $row['endpoint'] ?>' alt=''>
                                    </td>
                                </tr>
                                <tr>
                                    <td height='50px'></td>
                                </tr>
                            </table>
                            <?php
                        }
                    }
                    ?>
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
                url: "floor.php",
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