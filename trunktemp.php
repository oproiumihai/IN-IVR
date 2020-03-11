<?php
$t=shell_exec("sudo python /home/mihai/xtemperatura.py");
$t=trim(preg_replace('/\s\s+/', ' ', $t));
$p=substr($t,0,-2);
echo $p;
?>
