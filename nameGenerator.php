<?php
echo "<h1>Fantasy Character Name Generator</h1>";
$names ="Gandalf,Aragorn,Legolas";
$list = explode(",",$names);
$list = array_map("strtolower",$list);

$joined = implode("*",$list);
echo $joined;
?>