<?php
$stare=shell_exec('gpio read '.$argv[1]);
$stare=trim(preg_replace('/\s\s+/', ' ', $stare));
echo "$stare";
?>