<?php 

// header("Content-Type: application/json; charset=UTF-8");

if(isset($_GET['statusLed'])){
    $statusLed = $_GET['statusLed'];

    if ($statusLed == "led_1_bat"){
        $myfile = fopen("trangthaiLED1.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "led_1_tat"){
        $myfile = fopen("trangthaiLED1.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }elseif ($statusLed == "led_2_bat"){
        $myfile = fopen("trangthaiLED2.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "led_2_tat"){
        $myfile = fopen("trangthaiLED2.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }if ($statusLed == "led_3_bat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "led_3_tat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }if ($statusLed == "quat_1_bat"){
        $myfile = fopen("trangthaiquat1.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "quat_1_tat"){
        $myfile = fopen("trangthaiquat1.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }if ($statusLed == "quat_2_bat"){
        $myfile = fopen("trangthaiquat2.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "quat_2_tat"){
        $myfile = fopen("trangthaiquat2.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }
    
    echo "OK";
} 

?>