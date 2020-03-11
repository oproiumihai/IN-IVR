<?php
do
{
$id=shell_exec(" gpio read 9 ");
$id=trim(preg_replace('/\s\s+/', ' ', $id));
	
	if ($id == "0") {
	   shell_exec(" gpio write 1 1 ");
	} else {
	   shell_exec(" gpio write 1 0 ");
	}
	sleep(1);
} while(1);
echo $id;
?>
