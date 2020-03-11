<?php
do
{
$id=shell_exec(" gpio read 8 ");
$id=trim(preg_replace('/\s\s+/', ' ', $id));
	
	if ($id == "0") {
	   shell_exec(" gpio write 2 0 ");
	} else {
	   shell_exec(" gpio write 2 1 ");
	}
	sleep(1);
} while(1);
echo $id;
?>
