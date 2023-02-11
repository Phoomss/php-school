<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%" id="tbl-list">
        <tr>
            <td>#</td><td>Name</td><td>Lastname</td>
        </tr>
        <tr>
            <td>1</td><td>Phakpoom</td><td>Ittirattanakomon</td>
        </tr>
        <tr>
            <td>2</td><td>Chayutpong</td><td>Pikulhom</td>
        </tr>
    </table>
    <hr><h3>Add Name</h3>
    <form onsubmit="return false;">
        <p>Name: <input type="text" id="name" name="name"></p>
        <p>Lastname: <input type="text" id="lastname" name="lastname"></p>
        <p><button id="btn-add">Add</button></p>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            $("#btn-add").click(function(){
                
                let inputName = $("#name");
                let inputLastName = $("#lastname");

                let name = inputName.val();
                let lastname = inputLastName.val();

                //หาแถวสุดท้าย
                let lastrow = $("#tbl-list tr").last();
                console.log(lastrow);
                let lastid = parseInt(lastrow.find("td:first-child").text())
                // "2"  -> 2
                lastid++;
                
                let newrow = `<tr><td>${lastid}</td><td>${name}</td><td>${lastname}</td></tr>`;
                $("#tbl-list").append(newrow);

                inputName.val('');
                inputLastName.val('');
            });
        });
    </script>
</body>
</html>