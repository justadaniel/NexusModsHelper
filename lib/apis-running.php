<?php


function JSONEncode($json, $prettyprint = false) {
    if($prettyprint || isset($_GET['pretty'])) {
        echo json_encode($json, JSON_PRETTY_PRINT);
    } else {
        echo json_encode($json);
    }
}

function Ping($host, $port = 80, $timeout = 2) {
    if($fp = fsockopen($host,$port,$errCode,$errStr,$timeout)){   
       return 'online';
    } else {
       return 'offline';
    } 
    fclose($fp);   
}


header('Content-Type: application/json');



$pingArray = array(
    'nmm_api'=>Ping('nexusmods.com')
);



JSONEncode($pingArray);


?>