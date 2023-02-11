<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Car Data</h1>
    <hr>
    <form action="#">
        ID: <input type="text" id="id" name="id">
        <button type="button" id="btn-search">Search</button> <br>
        Brand: <input type="text" id="brand" name="brand"> <br>
        Model: <input type="text" id="model" name="model"> <br>
        <br>
        <button>Save</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            // เมื่อกด search จะไปดึงข้อมูล car ตาม id ที่ระบุ
            $("#btn-search").click(function(){
                $.ajax({
                    url: "server/search-car.php",
                    type: "POST",
                    data: { "id": $("#id").val() },
                    dataType: "json",
                    success: function(res){ //result
                        let brand = res.brand;
                        let model = res.model;
                        $("#brand").val(brand);
                        $("#model").val(model);
                    }
                })
            });
        });
    </script>
</body>
</html>