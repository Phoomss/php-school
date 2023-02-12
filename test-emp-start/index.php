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
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="index.php">HR Department</a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row mt-3">
      <h1>Employee Data</h1>
      <hr>
      <div class="col-md-4">
        <div class="p-3 border">
          <img src="images/profile-pic.jpeg" alt="" id="emp-pic" style="width:100%">
        </div>
      </div>
      <div class="col-md-7 offset-md-1">
        <form>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Employee Code</label>
            <div class="col-6">
              <input type="text" class="form-control" name="empcode" id="empcode" placeholder="Employee Code">
            </div>
            <div class="col-2">
              <button id="btn-search" type="button" class="btn btn-primary">Search</button>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">First name</label>
            <div class="col-6">
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Last name</label>
            <div class="col-6">
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Salary</label>
            <div class="col-6">
              <input type="text" class="form-control" name="salary" id="salary" placeholder="Salary">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Work year</label>
            <div class="col-6">
              <input type="text" class="form-control" name="workyear" id="workyear" placeholder="Work year">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Bonus</label>
            <div class="col-6">
              <input type="text" class="form-control" name="bonus" id="bonus" placeholder="Bonus">
            </div>
          </div>
          <div class="mb-3 row">
          <div class="col-2">
              <button type="reset" id="btn-reset" class="btn btn-success">Save</button>
            </div>
          <div class="col-2">
              <button type="reset" id="btn-reset" class="btn btn-danger">Reset</button>
            </div>
          
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <script>
   $(document).ready(function() {
  $("#btn-search").click(function() {
    let empcode = $("#empcode").val();
    if (empcode==''){
      alert("Plese enter an employee code");
    }else{
      $.ajax({
      url: "server/search-emp.php",
      type: "POST",
      data: {
        "empcode": $("#empcode").val()
      },
      dataType: "json",
      success: function(res) {
        let picPath = "images/";
        let pic = `${picPath}${res.id}.png`
       
        let firstname = res.firstname;
        let lastname = res.lastname;
        let salary = res.salary;
        let workyear = res.workyear;

        // Calculate the bonus based on the years of service
        let bonus;
        if (workyear < 2) {
          bonus = salary*1;
        } else if (workyear <= 5) {
          bonus = salary*2;
        } else {
          bonus = salary*3;
        }
        $("#emp-pic").attr("src", pic)
        $("#firstname").val(firstname);
        $("#lastname").val(lastname);
        $("#salary").val(salary);
        $("#workyear").val(workyear);
        $("#bonus").val(bonus);
      }
    });
    }
    $("#btn-reset").click(function(){
      let pic = "images/profile-pic.jpeg"
      $("#emp-pic").attr("src", pic)
        $("#firstname").val('');
        $("#lastname").val('');
        $("#salary").val('');
        $("#workyear").val('');
        $("#bonus").val('');
    })
  });
});

  </script>

</body>

</html>