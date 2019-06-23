<?php
$i=0;
$host='127.0.0.1';
$port='25003';
while($i<1){
    $message="hola";
    $socket=socket_create(AF_INET, SOCK_STREAM,0) or die("could not create a socket\n");
    $result= socket_connect($socket,$host,$port) or die ("could not connect to server");
    socket_write($socket,$message,strlen($message)) or die("could not send to esrver");
    $result= socket_read($socket,1024) or die("could not read server response");
    echo $result . "\n";
    $result= socket_read($socket,1024) or die("could not read server response");
    echo $result . "\n";
    socket_close($socket);
    $i++;
}
?>