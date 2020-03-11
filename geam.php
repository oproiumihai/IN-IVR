<?php
do
{
$geam=shell_exec(" gpio read 10 ");
$geam=trim(preg_replace('/\s\s+/', ' ', $geam));
	
	if ($geam == "0") {
	   shell_exec(" gpio write 30 0 ");
	} else {
	   shell_exec(" gpio write 30 1 ");
	}
	sleep(1);
} while(1);
echo $geam;
?>
