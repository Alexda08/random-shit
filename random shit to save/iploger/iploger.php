<?php
session_start();
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'iplogger'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iplogger</title>
</head>
<body>
    
</body>

<!-- IP LOGGER -->
    <?php 
    
    if(isset($conn)){            
        function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
        $a = "".get_client_ip();
      /*  echo $a; // (know the ip adress is picking up) */

        $total = mysqli_num_rows(mysqli_query($conn,"SELECT ip FROM iptable WHERE ip='$a'"));
        if($total==0){
            // not registret in the db
        $query = "INSERT INTO iptable(ip) VALUES ('$a')";
            $result = mysqli_query($conn, $query);
            if(!$result) {
            die("Query Failed.");           
                }
        }/*else{
            // alredy resgistred in the db
          echo 'Hay un total de '.$total.' usuarios';
        }
        header("Location: http://hatcheggs.epizy.com/1/index.html", true, 301);
        exit();     */
} 
   ?>    
</html>