<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Form</title>
</head>
<body>
    <h1>New User</h1>
    <hr>
    <form action="user.create.php" method="post">
        <p>
            <label for="">Name: </label>
            <input type="text" name="user_name">
        </p>
        <p>
            <label for="">Tel: </label>
            <input type="text" name="user_tel">
        </p>
        <p>
            <label for="">Email: </label>
            <input type="text" name="user_email">
        </p>
        <p>
            <label for="">Password: </label>
            <input type="text" name="user_password">
        </p>
        <p>
            <label for="">Address: </label>
            <input type="text" name="user_address">
        </p>
        <p>
            <button>Submit</button>
        </p>
       
    </form>
</body>
</html>