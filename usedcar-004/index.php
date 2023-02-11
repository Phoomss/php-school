<?php
  include("connect.inc.php");
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand" href="#">004 Used Cars</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">All Cars <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <div class="container mt-3">
      <h3>New Car</h3>
      <hr>
      <form action="" method="post">
        <div class="form-group mt-3">
            <label for="text">Brand</label>
            <input type="text" class="form-control" name="brand" aria-describedby="brand"  placeholder="Brand">
        </div>
        <div class="form-group mt-3">
            <label for="text">Model</label>
            <input type="text" class="form-control" name="model" aria-describedby="model"  placeholder="Model">
        </div>
        <div class="form-group mt-3">
            <label for="text">Color</label>
            <input type="text" class="form-control" name="color" aria-describedby="color"  placeholder="Color">
        </div>
        <div class="form-group mt-3">
        <label for="text">Year</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Year Model</option>
            <option value="1">2023</option>
            <option value="2">2022</option>
            <option value="3">2021</option>
            <option value="1">2020</option>
            <option value="2">2019</option>
            <option value="3">2018</option>
          </select>
        </div>
        <div class="form-group mt-3">
            <label for="text">Price</label>
            <input type="text" class="form-control" name="Price" aria-describedby="Price"  placeholder="Price">
        </div>
      </form>
      <form action="savefile.php" method="post" enctype="multipart/form-data" class="mt-3">
      <div class="input-group">
        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="file1">
      </div>
       <p><button class="btn btn-primary mt-3">save</button></p>
    </form>
    </div>






  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>