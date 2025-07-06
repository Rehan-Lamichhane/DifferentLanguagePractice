<?php
    $cars=array("volvo","BMW","Toyota");
    echo"I Like ".$cars[0].", ".$cars[1]." and ".$cars[2].".";
    echo "<br>";

    echo "Number of elements in an array is ". count($cars);

    echo "<br>";
    $vechicle=array("car","Bike","bus");
    $arrlength=count($vechicle);
    for($x=0;$x<$arrlength;$x++)
    {
        echo $vechicle[$x];
        echo"<br>";
    }

    

?>