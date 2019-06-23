<?php
set_time_limit(0);
$host='127.0.0.1';
$port='25003';
$socket= socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
socket_bind($socket,$host,$port) or die("ERROR AL VINCULAR SOCKET CON IP EN ESE CLIENTE");
echo socket_strerror(socket_last_error());
socket_listen($socket);
$i=0;
while(true){
    $client[++$i]= socket_accept($socket);
    $message=socket_read($client[$i],1024);
    echo $message;
    $message ="hola". $message . "\n";
    socket_write($client[$i],"jaja que tonto". "\n\r",1024);
    socket_write($client[$i],$message. "\n\r",1024);
    socket_close($client[$i]);
}
socket_close($socket);
?>