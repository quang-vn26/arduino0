<?php 

header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['statusLed'])){
    $statusLed = $_POST['statusLed'];

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
    }
    if ($statusLed == "led_4_bat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "led_4_tat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }
    if ($statusLed == "led_5_bat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }else if($statusLed == "led_5_tat"){
        $myfile = fopen("trangthaiLED3.txt", "w");
        fwrite($myfile, $statusLed);
        fclose($myfile);
    }
    
    $reponse = array(
            "led_id"=>"0",
            "status"=>$statusLed
        );
    

    echo json_encode($reponse);
} 

?>