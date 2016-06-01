<?php

//insert time
date_default_timezone_set('Russia/Moscow');
// echo date("Y") in timestamp format
$now = date("Y-m-d H:i:s",time());
//add minute for a date
$newtimestamp = strtotime('2011-11-17 05:05 + 16 minute');
echo date('Y-m-d H:i:s', $newtimestamp);
echo '<br>'.$now;
echo $stamp;
//add minutes from now

$expire_stamp = date('Y-m-d H:i:s', strtotime("+5 min"));
$now_stamp    = date("Y-m-d H:i:s");

echo "Right now: " . $now_stamp;
echo "5 minutes from right now: " . $expire_stamp;
?>
