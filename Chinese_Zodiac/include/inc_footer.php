&copy; 2018 <br/>
M Bedir Tapkan <br/>

<?php
$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$proverbcount = count($prov_array);
$index = rand(0, $proverbcount-1);
echo $prov_array[$index]."<br />";
echo "<img src=".getimage().">";
function getimage(){
  $files = glob( "img/2x/*.png");
  shuffle($files);
  return $files['0'];
}
?>