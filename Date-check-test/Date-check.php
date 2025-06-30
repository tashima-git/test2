<?php
$date_time = new DateTime('', new DateTimeZone('Asia/Tokyo'));
$date = $date_time->format('w');

if ($date == 0 or $date ==6){
    echo "週末です";
}else{
    echo "平日です";
}