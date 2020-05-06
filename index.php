<?php
header('Content-Type: application/json');
$request = file_get_contents('https://rocky-bayou-34338.herokuapp.com/');
$req_dump = print_r( $request, true );
$fp = file_put_contents( 'request.log', $req_dump );




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