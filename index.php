<?php
   if (isset($_GET["led_1_bat"])) 
    {
	    $myfile = fopen("trangthaiLED1.txt", "w");
	    fwrite($myfile,"led_1_bat");
	    fclose($myfile);
	    echo "Đã bật LED 1 ";
    }
   else if (isset($_GET["led_1_tat"])) 
    {
	    $myfile = fopen("trangthaiLED1.txt", "w");
	    fwrite($myfile,"led_1_tat");
	    fclose($myfile);
	    echo "Đã tắt LED 1";
    }
    if (isset($_GET["led_2_bat"])) 
    {
	    $myfile = fopen("trangthaiLED2.txt", "w");
	    fwrite($myfile,"led_2_bat");
	    fclose($myfile);
	    echo "Đã bật LED 2";
    }
   else if (isset($_GET["led_2_tat"])) 
    {
	    $myfile = fopen("trangthaiLED2.txt", "w");
	    fwrite($myfile,"led_2_tat");
	    fclose($myfile);
	    echo "Đã tắt LED 2";
    }
    if (isset($_GET["led_3_bat"])) 
    {
	    $myfile = fopen("trangthaiLED3.txt", "w");
	    fwrite($myfile,"led_3_bat");
	    fclose($myfile);
	    echo "Đã bật LED 3";
    }
   else if (isset($_GET["led_3_tat"])) 
    {
	    $myfile = fopen("trangthaiLED3.txt", "w");
	    fwrite($myfile,"led_3_tat");
	    fclose($myfile);
	    echo "Đã tắt LED 3";
    }
    if (isset($_GET["led_4_bat"])) 
    {
	    $myfile = fopen("trangthaiLED4.txt", "w");
	    fwrite($myfile,"led_4_bat");
	    fclose($myfile);
	    echo "Đã bật LED 4";
    }
   else if (isset($_GET["led_4_tat"])) 
    {
	    $myfile = fopen("trangthaiLED4.txt", "w");
	    fwrite($myfile,"led_4_tat");
	    fclose($myfile);
	    echo "Đã tắt LED 4";
    }



    if (isset($_GET["fan_1_bat"])) 
    {
	    $myfile = fopen("trangthaiFan1.txt", "w");
	    fwrite($myfile,"fan_1_bat");
	    fclose($myfile);
	    echo "Đã bật Fan 1";
    }
   else if (isset($_GET["fan_1_tat"])) 
    {
	    $myfile = fopen("trangthaiFan1.txt", "w");
	    fwrite($myfile,"fan_1_tat");
	    fclose($myfile);
	    echo "Đã tắt Fan 1";
    }

     if (isset($_GET["fan_2_bat"])) 
    {
	    $myfile = fopen("trangthaiFan2.txt", "w");
	    fwrite($myfile,"fan_2_bat");
	    fclose($myfile);
	    echo "Đã bật Fan 2";
    }
   else if (isset($_GET["fan_2_tat"])) 
    {
	    $myfile = fopen("trangthaiFan2.txt", "w");
	    fwrite($myfile,"fan_2_tat");
	    fclose($myfile);
	    echo "Đã tắt Fan 2";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Nhà thông minh</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    body {
    background-color: #00c6ff ;
    }
</style>
</head>
<body>
    
    <br>
    <div class="container">
    <h1 class="jumbotron text-center">NHÀ THÔNG MINH</h1>
    <h2>LED 1</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="led_1_bat" class="btn btn-primary btn-block" value="Bật">
	    <input type="submit" name="led_1_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	<h2>LED 2</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="led_2_bat" class="btn btn-primary btn-block" value="Bật">
	    <input type="submit" name="led_2_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	
	<h2>LED 3</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="led_3_bat" class="btn btn-primary btn-block"value="Bật">
	    <input type="submit" name="led_3_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	
	<h2>Cam Bien Anh Sang</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="led_4_bat" class="btn btn-primary btn-block"value="Bật">
	    <input type="submit" name="led_4_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	
	<h2>Fan</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="fan_1_bat" class="btn btn-primary btn-block"value="Bật">
	    <input type="submit" name="fan_1_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	
	<h2>Cua</h2>
	<form method="GET" action="index.php">
	    <input type="submit" name="fan_2_bat" class="btn btn-primary btn-block"value="Bật">
	    <input type="submit" name="fan_2_tat" class="btn btn-danger btn-block" value="Tắt">
	</form>
	
	<div class="container">
</body>
</html>