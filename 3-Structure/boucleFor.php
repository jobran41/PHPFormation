﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>


<table  border="1">
<?php


for( $lig=3  ;  $lig>0 ;  $lig-- )
{
echo "<tr>";
	for( $col=6  ;  $col>0 ;  $col-- )
		{
		echo "<td>";
			echo $lig."-".$col;
		echo "</td>";
		}
echo "</tr>";
}

?>
</table>
</body>
</html>