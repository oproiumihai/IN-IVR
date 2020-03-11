<?php
shell_exec('gpio write '.$argv[1].' 1');
shell_exec('gpio write '.$argv[2].' 1');
shell_exec('gpio write '.$argv[3].' 1');
?>