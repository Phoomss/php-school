<?php
    include("connect.inc.php");
    $sql = "SELECT * FROM food";
    $qUser = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //echo mysqli_num_rows($qUser)
        echo $qUser->num_rows;
    ?>
    <table border="1" style="width: 100%;">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Price_extra</td>
        </tr>
        <?php
            while($row = $qUser->fetch_object()){
        ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->price; ?></td>
                <td><?php echo $row->Price_extra; ?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>