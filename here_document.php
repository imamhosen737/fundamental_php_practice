<?php
echo <<<MYDATA
		<b>This is a practice file of PHP Here Document.</b>
 Explored it to know how work the system.
MYDATA;
echo PHP_EOL;
// Whole document can be stored in a variable
$hereDocument = <<<MYDATA
         <b>This is a practice file of PHP Here Document.</b>
Explored it to know how work the system.
MYDATA;

echo $hereDocument;
?>