<?php
header('Content-type: application/json');

$myfile = fopen("trangthaiLED1.txt", "r");
    $stt_led_1 = fgets($myfile);
fclose($myfile);
$myfile = fopen("trangthaiLED2.txt", "r");
    $stt_led_2 = fgets($myfile);
fclose($myfile);
$myfile = fopen("trangthaiLED3.txt", "r");
    $stt_led_3 = fgets($myfile);
fclose($myfile);

$reponse = array(
    array(
        "led_id"=>"led_1", 
        "status"=>$stt_led_1
    ),
    array(
        "led_id"=>"led_2", 
        "status"=>$stt_led_2
    ),
    array(
        "led_id"=>"led_3", 
        "status"=>$stt_led_3
    ),
    array(
        "led_id"=>"led_4", 
        "status"=>$stt_led_4
    ),
    array(
        "led_id"=>"led_5", 
        "status"=>$stt_led_5
    ),
);

echo json_encode($reponse);



?>