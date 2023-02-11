 <?php 
    $students = array(
         array ("id"=>"1001",
         "name"=>"Kitti",
         "score"=>70),
         array ("id"=>"1002",
         "name"=>"Kriti",
         "score"=>75),
         array ("id"=>"1003",
         "name"=>"Chauyut",
         "score"=>69),
         array ("id"=>"1004",
         "name"=>"Narong",
         "score"=>75),
         array ("id"=>"1005",
         "name"=>"Nanta",
         "score"=>90),
     );
//     echo"<pre>";
//     print_r($students[3]);
//     echo"</pre>";-->
    function grade($score){
        if($score>=80){
            $grade = 4;
        }elseif($score>=70){
            $grade = 3;
        }elseif($score>=60){
            $grade = 2;
        }elseif($score>=50){
            $grade = 1;
        }else{
            $grade = 0;
        }
        return ($grade);
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Students Report</h1>
    <hr>
    <table style="width: 100%;" border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>score</td>
            <td>grade</td>
        </tr>

        <?php
        foreach($students as $k =>$s){
        ?>
        <tr>
            <td><?php echo $s['id'];?></td>
            <td><?php echo $s['name'];?></td>
            <td><?php echo $s['score'];?></td>
            <td><?php echo grade($s['score']);?></td>
        </tr>
        <?php
            }
        ?>

    </table>
</body>
</html>