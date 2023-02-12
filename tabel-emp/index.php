<?php
    include("connect.inc.php");
    $sql = "select * from employee";
    $qEmp = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="mt-5 me-5 ms-5">
        <div class="row">
            <!-- TABLE -->
        <div class="container col-md-8 col-sm-12">
            <div class="h2 text-center mb-3"> DATA</div>
            <table class="table mt-3 text-center" id="table-emp">
                    <tr class="bg-dark text-light">
                        <th>ID Employee</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Salary</th>
                        <th>Workyear</th>
                    </tr>
                    <?php
                        while($row=$qEmp->fetch_object()){
                    ?>
                        <tr id="row-<?php echo $row->id;?>">
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->lastname; ?></td>
                            <td><?php echo $row->salary; ?></td>
                            <td><?php echo $row->workyear; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
<!-- TABLE -->
</body>

</html>