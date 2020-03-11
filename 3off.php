<?php
shell_exec('gpio write '.$argv[1].' 0');
shell_exec('gpio write '.$argv[2].' 0');
shell_exec('gpio write '.$argv[3].' 0');
?>