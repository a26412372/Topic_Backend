<?php
    $day = $_POST['day'];
    $hour = $_POST['hour'];
    $minute = $_POST['minute'];


    if($hour == 0 && $day==0){         //if hour and day is zero that don't multiply day and hour
        $interval = $minute * 60;
    }else if($day == 0 && $hour!=0){   //if day is zero that don't multiply day
        $interval = $hour * 60 * $minute * 60;
    }else{                             //it recrawl time normally
        $interval = $day * 24 * $hour * 60 * $minute * 60;
    }
    echo $day."<br>";
    echo $hour."<br>";
    echo $minute."<br>";
    echo $interval."<br>";
    echo substr("a1vph7xa", 3, 2).chr(112);
?>