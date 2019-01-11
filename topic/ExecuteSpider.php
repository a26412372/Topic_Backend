<?php
    include("mysql_connect.inc.php");
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
    ignore_user_abort(true);           // run script in background
    set_time_limit(0);                 // 執行時間為無限制，php默認執行時間是30秒，可以讓程序無限制的執行下去
    do{
        $sql = "DELETE FROM article WHERE 1";
        $delete = $dbgo->prepare($sql);
        $delete->execute();
        chdir("D:\\Scrapy\\Topic_Spider");
        echo shell_exec("scrapy crawl topic");
        sleep($interval);
    }while(true);
?>