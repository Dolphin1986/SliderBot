<?php

$data = file_get_contents('php://input');
$data = json_decode($data, true);

ob_start();
print_r($data);
$out = ob_get_clean(); 
file_put_contents(__DIR__ . '/message.txt', $out);



if($json = json_decode(file_get_contents("php://input"), true)) {
    print_r($json);
    $data = $json;
} else {
    print_r($_POST);
    $data = $_POST;
}

?>