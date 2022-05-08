<?php
$stars = 5;
for($i = 0; $i < $stars; $i++){
    for($j = 0; $j <= $i; $j++){
        echo("*");
    }
    echo("<br>");
}


for($i = $stars; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo("*");
    }
    echo("<br>");
}

for($i = 1; $i <= $stars; $i++)
{
    for($j = $i; $j < $stars; $j++)
    {
        echo("_");
    }
    for($j = 1; $j <= $i; $j++)
    {
        echo("*");
    }
    echo("<br>");
}
    for($i = $stars; $i >= 1; $i--)
    {
        for($j = $i; $j <= $stars; $j++)
        {
            echo("_");
        }
        for($j = 1; $j < $i; $j++)
        {
            echo("*");
        }
        echo("<br>");
    }
?>
