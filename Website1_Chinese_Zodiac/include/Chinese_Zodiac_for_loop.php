<?php
$zodiacArray = array('rat', 'ox', 'tiger', 'rabbit', 'dragon', 'snake', 'horse', 'sheep', 'monkey', 'rooster', 'dog', 'pig');
echo "<table border =\"1\" style='border-collapse: collapse'>";
echo "<th> \n";
for ($i=0; $i < 12; $i++) { 
	echo "<td>$zodiacArray[$i]</td> \n";
}
echo "</th> \n";
$cur = 0;
echo "<tr>";
for ($row=1912; $row <= 2018; $row++) { 
	if($cur){

	}
	echo "<td>$row</td> \n";
	if ($row % 12 == 0) {
		echo "</tr> \n";
		echo "<tr> \n";
	}
}
echo "</table>";
?>