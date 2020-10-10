<?php

$genres = array (
    array("Musicals",'Oklahoma','The Music Man', 'South Pacific'),
    array("Dramas",'Lawrence of Arabia','To Kill a Mockingbird', 'Casablanca'),
    array("Mysteries", 'The Maltese Falcon', 'Rear Window', 'North by Northwest'),
   
  );

  echo $genres[0][0]."<br> - - - - >"." 0 = ".$genres[0][1]."<br> - - - - >"." 1 = ".$genres[0][2]."<br> - - - - >"." 2 = ".$genres[0][3]."<br>";
  echo $genres[1][0]."<br> - - - - >"." 0 = ".$genres[1][1]."<br> - - - - >"." 1 = ".$genres[1][2]."<br> - - - - >"." 2 = ".$genres[1][3]."<br>";
  echo $genres[2][0]."<br> - - - - >"." 0 = ".$genres[2][1]."<br> - - - - >"." 1 = ".$genres[2][2]."<br> - - - - >"." 2 = ".$genres[2][3]."<br>";
  echo "<br><br><br>";

  $sorted = $genres;
  sort($sorted);
  echo "-----------------------------------------------Sorted------------------------------------------------------------<br><br><br><br>";

  echo $sorted[0][0]."<br> - - - - >"." 0 = ".$sorted[0][1]."<br> - - - - >"." 1 = ".$sorted[0][2]."<br> - - - - >"." 2 = ".$sorted[0][3]."<br>";
  echo $sorted[1][0]."<br> - - - - >"." 0 = ".$sorted[1][1]."<br> - - - - >"." 1 = ".$sorted[1][2]."<br> - - - - >"." 2 = ".$sorted[1][3]."<br>";
  echo $sorted[2][0]."<br> - - - - >"." 0 = ".$sorted[2][1]."<br> - - - - >"." 1 = ".$sorted[2][2]."<br> - - - - >"." 2 = ".$sorted[2][3]."<br>";
  
?>