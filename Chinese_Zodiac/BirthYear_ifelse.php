<?php

  $currentyear = date(Y);

  if (isset($_POST['birthyear'])) {
    $year = $_POST['birthyear'];
    $sign = findsign($year);
    $count = getstats($year);
    echo "You were born under the sign of the " . $sign;
    echo "<br/ ><br/ >";
    echo "<img src='img/2x/" . $sign .".png'>";
    echo "<br/ ><br/ >";
    echo "You are visitor ".$count." to enter ".$year;
  } else {
  ?>
    <form method="POST" >
    <p>What year were you born?
      <input type="number" name="birthyear" min="
      <?php echo $currentyear-100 ?>" max="<?php echo $currentyear ?>" 
      mrequired autofocus></p>
      <input type="submit" name="submit">
    </form>
  <?php } ?>

  <?php
  function findsign($zyear) {
    // create zodiac signs array
    $signs = array( "Monkey", "Rooster", "Dog", "Pig", "Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Sheep");
    if ($zyear % 12 === 0) {
      $sign = $signs[0];
    } elseif ($zyear % 12 === 1) {
      $sign = $signs[1];
    } elseif ($zyear % 12 === 1) {
      $sign = $signs[1];
    } elseif ($zyear % 12 === 2) {
      $sign = $signs[2];
    } elseif ($zyear % 12 === 3) {
      $sign = $signs[3];
    } elseif ($zyear % 12 === 4) {
      $sign = $signs[4];
    } elseif ($zyear % 12 === 5) {
      $sign = $signs[5];
    } elseif ($zyear % 12 === 6) {
      $sign = $signs[6];
    } elseif ($zyear % 12 === 7) {
      $sign = $signs[7];
    } elseif ($zyear % 12 === 8) {
      $sign = $signs[8];
    } elseif ($zyear % 12 === 9) {
      $sign = $signs[9];
    } elseif ($zyear % 12 === 10) {
      $sign = $signs[10];
    } elseif ($zyear % 12 === 11) {
      $sign = $signs[11];
    }
    return $sign;
  }
  function getstats($syear) {
    $name = "statistics/$syear.txt";
    if (file_exists($name)) {
      $file = fopen($name, "r");
      $counter = fgets($file);
      fclose($file);
    } else {
      $file = fopen($name, "w");
      $counter = 0;
      fclose($file);
    }
    // add 1 to counter
    $counter += 1;
    file_put_contents($name, $counter);
    return $counter;
  }
?>