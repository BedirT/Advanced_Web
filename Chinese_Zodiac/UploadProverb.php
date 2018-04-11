<textarea name="proverb" form="proverb"></textarea>
<form method="POST" id="proverb">
  <input type="submit">
</form>

<?php 

if (isset($_POST["proverb"])) {
  $proverb = $_POST["proverb"];
  $file = fopen("proverbs.txt", a);
  fwrite($file, $proverb."\n");
}
?>