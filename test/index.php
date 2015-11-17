<?php
header('Access-Control-Allow-Origin:*'); 
$url='http://www.runoob.com/try/angularjs/data/Customers_JSON.php';  
$data = file_get_contents($url);  
echo $data;  


?>
