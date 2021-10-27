<!DOCTYPE html>
<html>
<body>


<?php
$time = '2021-09-21T09:01:59.980+00:00';
echo $time = date("H:i:s",strtotime($time));
echo "<br>";

$now = new DateTime();
echo $now->format('H:i:s');

?> 

</body>
</html>