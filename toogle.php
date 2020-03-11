<?php
$stare=shell_exec('gpio read '.$argv[1]);

$stare=trim(preg_replace('/\s\s+/', ' ', $stare));
if($stare == "1"){
            shell_exec('gpio write '.$argv[1].' 0');

}else{
                shell_exec('gpio write '.$argv[1].' 1');
}
?>