<?php
$stare=shell_exec('gpio read '.$argv[1]);
$stare=trim(preg_replace('/\s\s+/', ' ', $stare));
//echo "Stare curenta: $stare\n";
if($stare == "1"){
        //echo "Sting lumina\n";
        shell_exec('gpio write 17 0');

}else{
        //echo "Aprind lumina\n";
        shell_exec('gpio write 17 1');
}
$stare=shell_exec('gpio read 17');
//echo "Noua stare este $stare";
echo trim(preg_replace('/\s\s+/', ' ', $stare));
?>