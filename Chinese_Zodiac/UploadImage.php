<form enctype="multipart/form-data" method="POST" >
  <input type="file" name="filename">
  <input type="submit" value="Upload File">
</form>

<?php

$directory = "images";
$tmp_name = $_FILES["filename"]["tmp_name"];
$newname = getname();
if (isset($_FILES['filename'])) {
if ( move_uploaded_file($_FILES["filename"]["tmp_name"], $directory."/".$newname) === FALSE) {
  echo "Could not upload file " . htmlentities($_FILES['filename']['name']) . "<br />\n";
} else {
  chmod( $directory . "/" . $newname, 0644);
  echo "successfully uploaded file " . htmlentities($_FILES['filename']['name']) . " to ".$newname."<br />\n";
  //DEBUGGING echo $_FILES['filename']['error'];
}
}
function getname() {
  $directory = "images";
  $files = glob($directory."/Dragon*.png");
  // DEBUGGING print_r($files);
  natsort($files);
  preg_match('!Dragon(\d+)!', end($files), $matches);
  $newname = 'Dragon' . ($matches[1] + 1) . '.png';
  return $newname;
}
?>