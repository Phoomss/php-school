<?php
    session_start();
    include("connect.inc.php");
    // check session
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    }else{

  
    //(2) Query Data
    $sql = "SELECT * FROM users";
    //mysqli_query($conn, sql)
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
    
    <table style="width: 100;">
        <td style="width: 20;" ><a href="newuser.php">add_user</a></td>
        <td style="width: 20;" ><h1><?php echo "ยืนดีต้อนรับ ".$_SESSION['user']?></h1></td>
        <td style="width: 20;" ><a href="logout.php">Log Out</a></td>
    </table>
    <?php
        // echo mysqli_num_rows($qUser)
        
    ?>
    <table border="1" style="width:100%;">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Tel</td>
            <td>Email</td>
            <td>Address</td>
            <td>Edit</td>
            <td>Delete</td>
            
        </tr>
        <?php
        $num = $qUser->num_rows;
        if($num > 0){
            $i = 1;
            // (3) Fetch data
            while($row = $qUser->fetch_object()){
        ?>
            <tr>
                <td><?php echo$row->id; ?></td>
                <td><?php echo$row->name; ?></td>
                <td><?php echo$row->tel; ?></td>
                <td><?php echo$row->email; ?></td>
                <td><?php echo$row->address; ?></td>
                <td><a href="user.edit.php?id=<?php echo $row->id;?>">Edit</a></td>
                <td><a href="user.delete.php?id=<?php echo $row->id; ?>"
                        onclick="return confirm('ยืนยันการลบข้อมูลหรือไม่?')">
                        Delete
                    </a></td>
            </tr>
        <?php
            $i++;
            }
        }else{
        ?>
            <tr>
                <td colspan="3">--No User Data--</td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>   
<?php   
    }
?>