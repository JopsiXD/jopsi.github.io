<!DOCTYPE html>
<html>
<head>

    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="folder/favicon.ico" rel="icon" sizes="16x16" type="image/jpg" />

</head>
<body>
    <br> <center>

    <h1 style="font-size:300%;color:white;">This website is about gaming & chill</h1>
    <p style="font-size:160%;color:white;">Gaming & Chill is a cool discord server which u should join!</p>
    <p style="font-size:130%;color:white;">https://discord.gg/QwRF3Ww9dN</p>


</body>
</html>


<style>
    body {
        background-image: url('walking.jpg');
    }
</style>

<body>
    <html>

    <? php

    //IP Grabber

    //Variables

    $protocol = $_SERVER['SERVER_PROTOCOL'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $port = $_SERVER['REMOTE_PORT'];
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ref = $_SERVER['HTTP_REFERER'];
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

    //Print IP, Hostname, Port Number, User Agent and Referer To Log.TXT

    $fh = fopen('log.txt', 'a');
    fwrite($fh, 'IP Address: '."".$ip ."\n");
    fwrite($fh, 'Hostname: '."".$hostname ."\n");
    fwrite($fh, 'Port Number: '."".$port ."\n");
    fwrite($fh, 'User Agent: '."".$agent ."\n");
    fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n");
    fclose($fh);
    ?>