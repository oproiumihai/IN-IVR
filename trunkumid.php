<?php
$u=shell_exec("sudo python /home/mihai/xumiditate.py");
$u=trim(preg_replace('/\s\s+/', ' ', $u));
$p=substr($u,0,-2);
echo $p;
?>
