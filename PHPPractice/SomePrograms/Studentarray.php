<?php
    $student=array("Vivek","Rehan","Oggy","Soti","Sagar","Santosh","Jack","Kenzo","Bob","Saurav");

    // for( $x = 0; $x<count($student);$x++){
    //     echo $student[$x];
    // }


    for( $x = 0; $x<count($student);$x++){
        // echo $x;
        // echo $x%2==0?"Even":"Odd";
        echo "<br>";
        // echo "<br>";

        if($x%2==0){
            echo strtoupper($student[$x]);   
        }else{
            echo strtolower($student[$x]);
        }
    }
?>