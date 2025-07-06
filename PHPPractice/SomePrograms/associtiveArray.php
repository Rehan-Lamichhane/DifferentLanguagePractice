<?php
    // $age = array("Ram"=>34,"Shyam"=>54,"Hari"=>50);
    $age = array("Peter"=>"32","Ben"=>"37","Joe"=>"43");
    print_r($age);
    echo "<br>";    
    echo "Peter is ".$age['Peter']." years old.";
    echo "<br>";
    foreach($age as $x => $x_value){
        echo "Key=".$x.", value = ".$x_value;
        echo "<br>";
    }
    echo count($age);
    for ($x=0;$x<count($age);$x++){
        echo $age[$x];
        echo "<br>";
    }
?>