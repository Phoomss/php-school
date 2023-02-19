<?php
include("connect.inc.php");
$sql = "SELECT * FROM products";
$qCate = $conn->query($sql);
?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div class="container col-md-6">
        <h1 class="text-center">Product Report</h1>
        <hr>
        <div class="row">
            <form action="out-product.php" method="post">
                <div class="row">
                    <div class="col-md-2">
                        <label>Category</label>
                    </div>
                    <div class="col-md-4">
                        <select name="category" id="category" style="width: 100%;">
                            <?php
                            foreach (range('A', 'Z') as $alphabet) {
                            ?>
                                <option value="<?php echo $alphabet ?>">
                                    <?php echo $alphabet ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label>Category</label>
                    </div>
                    <div class="col-md-4">
                        <select name="reorder" id="reorder" style="width: 100%;">
                            <option value="500">500</option>
                            <option value="300">300</option>
                            <option value="100">100</option>
                            <option value="50">50</option>
                        </select>
                    </div>

                </div>
                <div class="row">
                    <button class="btn btn-primary mx-auto mt-3" style="width: 100%;">Search</button>
                </div>
            </form>

        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>