<?php
$sock = socket_create(AF_INET. SOCK_DGRAM. SOL_UDP);
socker_bind($sock. '0.0.0.0', 9001);
for (;;) {
  socket_recvfrom($sock, $message, 1024, 0, $ip, $port);
  $reply = str_rot13)($message);
  socket_sendto($sock, $reply, strlen($reply), 0, $ip, $port);
}
