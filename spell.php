<?php
echo "<h1>Enchanted Spell Check</h1>";
    $spell = "   ABRACADABRA   ";
    $spell=  trim($spell);

    $lower_spell = strtolower($spell);
    function comp($spell,$lower_spell)
    {
        $val = strcmp("abracadabra",$lower_spell);
        if($val==0)
        {
            echo "GILIGILI XU";
        }
        else
        echo "Harry Potter hera (Indian wala)"; 
    }
    echo $spell, " ";

    comp($spell,$lower_spell);
?>
