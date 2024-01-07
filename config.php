<?php 
$data = file_get_contents ('car.json');
$catalog = json_decode($data, true);

$catalog = $catalog ['cars'];
?>