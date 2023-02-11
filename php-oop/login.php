<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <h3 >LOGIN</h3>
        <hr>
        <form action="user.checked.php" method="post">
            <p>
                <label for="username">Username : </label>
                <input type="text" name="username" placeholder="ป้อนชื่อของผู้ใช้งาน">
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" name="password" placeholder="โปรดป้อนรหัสผ่าน">
            </p>
            <button class="btn btn-primary">Log in</button>
        </form>
    </div>
</body>
</html>