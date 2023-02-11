<?php
    include("connect.inc.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $qUser = $conn->query($sql);
    $user = $qUser->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Form</title>
</head>
<body>
    <h1>Edit User</h1>
    <hr>
    <form action="user.update.php" method="post">
        <input type="hidden" name="id" value="<?php $user->id; ?>">
        <p>
            <label for="">Name:</label>
            <input type="text" name="user_name"
                value="<?php echo $user->name; ?>">  
        </p>
        <p>
            <label for="">Tel:</label>
            <input type="text" name="user_tel"
            value="<?php echo $user->tel; ?>"> 
        </p>
        <p>
            <label for="">Email:</label>
            <input type="text" name="user_email"
            value="<?php echo $user->email; ?>">  
        </p>
        <p>
            <label for="">Address:</label>
            <input type="text" name="user_address"
            value="<?php echo $user->address; ?>"> 
        </p>
        <p>
            <button>Submit</button>
        </p>
    </form>
</body>
</html>