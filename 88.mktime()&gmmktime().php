<?php 
echo date("l", mktime(0,0,0,05, 02, 1998 . "<br>"));
echo date("d/m/Y h:i:sa", gmmktime(0,0,0,05, 02, 1998));

?>