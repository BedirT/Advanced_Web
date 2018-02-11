<?php
$zodiacArray = array('rat', 'ox', 'tiger', 'rabbit', 'dragon', 'snake', 'horse', 'sheep', 'monkey', 'rooster', 'dog', 'pig');
echo "<table border =\"2\" style='border-collapse: collapse'>";
echo "<tr>";
for ($i=0; $i < 12; $i++) {
	echo "<td><img src = 'img/2x/$zodiacArray[$i].png' width='60px'></td>\n";
}
echo "</tr> \n";
$row=1912
while($row <= 2018){
	echo "<tr>";
	$i = 0;
	while($i < 12 && $row <= 2018){
		echo "<td>$row</td> \n";
		$i++;
		$row++;
	}
	echo "</tr> \n";
	$row++;
}
echo "</table>";
?>