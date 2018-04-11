<?php
  date_default_timezone_set('America/Los_Angeles');
  $currentyear = date(Y);
  $AnimalSigns = array(
    "Rat" => array(
      "Start Date" => "1900",
      "End Date" => "2020",
      "President" => "George Washington"),
    "Ox" => array(
      "Start Date" => "1901",
      "End Date" => "2021",
      "President" => "Barack Obama"),
    "Tiger" => array(
      "Start Date" => "1902",
      "End Date" => "2022",
      "President" => "Dwight Eisenhower"),
    "Rabbit" => array(
      "Start Date" => "1903",
      "End Date" => "2023",
      "President" => "John Adams"),
    "Dragon" => array(
      "Start Date" => "1904",
      "End Date" => "2024",
      "President" => "Abraham Lincoln"),
    "Snake" => array(
      "Start Date" => "1905",
      "End Date" => "2025",
      "President" => "John Kennedy"),
    "Horse" => array(
      "Start Date" => "1906",
      "End Date" => "2026",
      "President" => "Theodore Roosevelt"),
    "Goat" => array(
      "Start Date" => "1907",
      "End Date" => "2027",
      "President" => "James Madison"),
    "Monkey" => array(
      "Start Date" => "1908",
      "End Date" => "2028",
      "President" => "Harry Truman"),
    "Rooster" => array(
      "Start Date" => "1909",
      "End Date" => "2029",
      "President" => "Grover Cleveland"),
    "Dog" => array(
      "Start Date" => "1910",
      "End Date" => "2030",
      "President" => "George Walker Bus"),
    "Pig" => array(
      "Start Date" => "1911",
      "End Date" => "2031",
      "President" => "Ronald Reagan"),
  );
  if (isset($_POST['birthyear'])) {
    $year = $_POST['birthyear'];
    $sign = findsign($year);
    $count = getstats($year);
    $SignMessage = "If your Chinese zodiac sign is the $sign you share a zodiac sign with President " . $AnimalSigns[$sign]["President"] . ". <br /><br/ >";
    $SignMessage .= "Years of the $sign include ";
    for ($i = $AnimalSigns[$sign]["Start Date"]; $i < $AnimalSigns[$sign]["End Date"]; $i+=12)
      $SignMessage .= $i . ", ";
    $SignMessage .= "and " .
    $AnimalSigns[$sign]["End Date"] . ".";
    echo "You were born under the sign of the " . $sign;
    echo "<br/ ><br/ >";
    echo "<img src='img/2x/" . $sign .".png'>";
    echo "<br/ ><br/ >";
    echo "You are visitor ".$count." to enter ".$year;
    echo "<br/ ><br/ >";
    echo $SignMessage;
  } else {
  ?>
    <form method="POST" >
    <p>What year were you born? <input type="number" name="birthyear" min="<?php echo $currentyear-100 ?>" max="<?php echo $currentyear ?>" required autofocus></p>
      <input type="submit" name="submit">
    </form>
  <?php } ?>

  <?php
  function findsign($zyear) {
    // create zodiac signs array
    $signs = array( "Monkey", "Rooster", "Dog", "Pig", "Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat");
    $i = $zyear % 12;
    switch ($i) {
      case 0:
        $sign = $signs[0];
        break;
      case 1:
        $sign = $signs[1];
        break;
      case 2:
        $sign = $signs[2];
        break;
      case 3:
        $sign = $signs[3];
        break;
      case 4:
        $sign = $signs[4];
        break;
      case 5:
        $sign = $signs[5];
        break;
      case 6:
        $sign = $signs[6];
        break;
      case 7:
        $sign = $signs[7];
        break;
      case 8:
        $sign = $signs[8];
        break;
      case 9:
        $sign = $signs[9];
        break;
      case 10:
        $sign = $signs[10];
        break;
      case 11:
        $sign = $signs[11];
        break;
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