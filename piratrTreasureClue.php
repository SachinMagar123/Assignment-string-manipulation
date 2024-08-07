<?php
echo "<h1>Pirate Treasure Map</h1>";
$clue = "find the hidden treasure at the golden island";
$mod_clue = str_replace("golden","mystic",$clue);
echo strtoupper($mod_clue);
?>