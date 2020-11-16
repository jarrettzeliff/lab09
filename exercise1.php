<?php
echo "<table border =\"7\" >";
	for ($i=1; $i <= 100; $i++) {
		echo "<tr> \n";
		for ($j=1; $j <= 100; $j++) {
		   $p = $j * $i;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>
