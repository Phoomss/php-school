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
<!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LOGO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Market</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>  
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
<!-- NAVBAR -->

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
                        <th colspan="2">Management</th>
                    </tr>
                    <?php
                        while($row=$qEmp->fetch_object()){
                    ?>
                        <tr id="row-<?php echo $row->id;?>">
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->firstname; ?></td>
                            <td><?php echo $row->lastname; ?></td>
                            <td><?php echo $row->salary; ?></td>
                            <td><button class="btn btn-info text-light btn-edit" style="width: 100px;" data-id="<?php echo $row->id?>" id="btn-edit">Edit</button></td>
                            <td><button class="btn btn-danger text-light btn-delete" style="width: 100px;">Delete</button></td>
                        </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
<!-- TABLE -->

<!-- FORM. -->
    
    <div class="container col-md-4 col-sm-12">
        <div class="h2 text-center mb-3">INSERT DATA</div>
    <div class="input-group mb-2">
        <span class="input-group-text" style="width: 120px;">ID Employee</span>
        <input type="text" class="form-control" type="text" id="id" disabled>
    </div>
    <div class="input-group mb-2">
        <span class="input-group-text" style="width: 120px;">First Name</span>
        <input type="text" class="form-control" type="text" id="firstname">
    </div>
    <div class="input-group mb-2">
        <span class="input-group-text" style="width: 120px;">Last Name</span>
        <input type="text" class="form-control" type="text" id="lastname">
    </div>
    <div class="input-group mb-2">
        <span class="input-group-text" style="width: 120px;">Salary</span>
        <input type="text" class="form-control" type="text" id="salary">
    </div>
    <button class="btn btn-success text-light w-100" id="btn-add">Add</button>
    <div class="row">
        <div class="col">
            <button class="btn btn-success text-light w-100" id="btn-update">Update</button>
        </div>
        <div class="col">
            <button class="btn btn-danger text-light w-100" id="btn-close">Close</button>   
        </div>
        
    </div> 
      
       
    </div>
<!-- FORM. -->
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $("#btn-edit").click(function(){
                $("#btn-add").hide();
                $("#btn-update").show();
                $("#btn-close").show();
            });

            $("#btn-update").hide();
            $("#btn-update").click(function(){
                $("#id").val('');
                $("#firstname").val('');
                $("#lastname").val('');
                $("#salary").val('');
            })

            $("#btn-close").hide();
            $("#btn-close").click(function(){
                $("#id").val('');
                $("#firstname").val('');
                $("#lastname").val('');
                $("#salary").val('');
            })
            $("#btn-add").click(function(){
                let firstname = $("#firstname").val();
                let lastname = $("#lastname").val();
                let salary = $("#salary").val();

                let emp_data = {
                        "firstname": firstname,
                        "lastname": lastname,
                        "salary": salary
                };

                $.ajax({
                    url: "server/employee.insert.php",
                    type: "POST",
                    dataType: "json",
                    data: emp_data,
                    success: function(result){
                        // alert(result.msg);
                        console.log(result);
                        // location.reload();
                        
                        emp_data.id = result.insert_id;
                        append_data(emp_data);
                    }
                });
                // alert(`${firstname} ${lastname} ${salary}`)
            });
        });

        function append_data(data){
            let lastrow = $("#table-emp tr").last();
            let newrow = `<tr id='row-${data.id}' >
                    <td>${data.id}</td>
                    <td>${data.firstname}</td>
                    <td>${data.lastname}</td>
                    <td>${data.salary}</td>
                    <td><button class="btn btn-info text-light btn-edit" style="width: 100px;" data-id=${data.id}>Edit</button></td>
                    <td><button class="btn btn-danger text-light btn-delete" style="width: 100px;">Delete</button></td>
                </tr>`;
            $("#table-emp").append(newrow);
            //reset form
            $("#firstname").val('')
            $("#lastname").val('')
            $("#salary").val('');
        }

        $(document).on('click','.btn-edit',function(){
            let id = $(this).data('id');
            let tr = $("#row-"+id);

            let emp_id = tr.find("td:eq(0)").text()
            let firstname = tr.find("td:eq(1)").text()
            let lastname = tr.find("td:eq(2)").text()
            let salary = tr.find("td:eq(3)").text()

            // ใส่ input

            $("#id").val(emp_id);
            $("#firstname").val(firstname);
            $("#lastname").val(lastname);
            $("#salary").val(salary);
        });

    </script>

</body>

</html>