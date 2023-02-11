<?php
    // $i=1;
    // do{
    //     if($i%7!=0){
    //         echo"$i ";
    //     }else{
    //         echo"?";
    //     }echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    //     if($i%5==0){
    //         echo"<br>";
    //     }
    //     $i++;
    // }while($i<=50);
    // echo"&nbsp;"
    // for($i=2;$i<=50;$i+=2){
    //     echo"$i <br>";
    // }
    //------------------------------------------------------//
    // $money = 10000;
    // $interest_rate = 0.05;
    // $goal = 50000;
    // $period = 1000;
    // for($y=1;$y<=100;$y++){
    //     $money = $money * (1 + $interest_rate);
    //     $money += $period;
    //     if($money>$goal){
    //         break;
    //     }
    // }
    // echo "ปีที่ $y จะมีเงินเก็บ $money";
   //------------------------------------------------------//
    // for ($y=1;$y<=100;$y++){
    //     //$money = $money + ($money * $interest_rate);
    //     $money = $money * (1 + $interest_rate);
    //     echo "ปีที่ $y: $money<br>";
    // }


    $car = 600000;
    $goal = 12000;
    $interest_rate = 0.015;
    for ($m=1;$m<=300;$m++){
        $interest =  ($goal * $interest_rate) ;
        $capital = $goal - $interest;
        $car -= $capital;

        $str_capital = number_format($capital,2);
        $str_interest = number_format($interest,2);
        $str_balance = number_format($car,2);

        echo "งวดที่ $m: เงินต้น: $str_capital ดอกเบี้ย: $str_interest คงเหลือ: $str_balance<br>";
        if($car <0){
            break;
        }
    }
    echo "จำนวนที่ต้องผ่อน : $m ";
?>