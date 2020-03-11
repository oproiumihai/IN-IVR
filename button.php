<?php
$stare=shell_exec('gpio read '.$argv[1]);
$on=1;
$off=0;
$stare=trim(preg_replace('/\s\s+/', ' ', $stare));
echo "Stare curenta: $stare\n";
if($stare == "1"){
        echo "Sting lumina\n";
       shell_exec('gpio write '.$argv[1].' 0');

}else{
        echo "Aprind lumina\n";
        shell_exec('gpio write '.$argv[1].' 1');
}
$stare=shell_exec('gpio read '.$argv[1]);
echo "Noua stare este $stare";
echo trim(preg_replace('/\s\s+/', ' ', $stare));
?>