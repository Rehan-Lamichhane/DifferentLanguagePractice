/
<?php
    //PHP date and time
    $checkTimeZone = date_default_timezone_get();
    echo $checkTimeZone;

    date_default_timezone_set('asia/kathmandu');
    $localTimeZone = date_default_timezone_get();
    echo "<br>";
    echo $localTimeZone;

    $dateAndTime = date ('Y/m/d::h:i:s A l');
    echo "<br>";
    echo $dateAndTime;

?>