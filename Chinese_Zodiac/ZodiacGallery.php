<?php
  $signs = array( 
    "Monkey.jpg" => "monkey",
    "Rooster.jpg" => "rooster",
    "Dog.jpg" => "dog",
    "Pig.jpg" => "pig", 
    "Rat.jpg" => "rat", 
    "Ox.jpg" => "ox", 
    "Tiger.jpg" => "tiger", 
    "Rabbit.jpg" => "rabbit", 
    "Dragon.jpg" => "dragon", 
    "Snake.jpg" => "snake", 
    "Horse.jpg" => "horse", 
    "Goat.jpg" => "sheep"
  );
  foreach ( $signs as $image => $caption ) {
    $size = getimagesize("images/$image");
    //DEBUGGING print_r($size);
    echo '<a href="images/'.$image.'"><img src="images/'.$image.'" alt="'.$caption.'" height="75" width="75"></a>';
  }
?>