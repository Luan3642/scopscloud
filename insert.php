<?php

$data = file_get_contents('data.json');

// decode json
$json_arr = json_decode($data, true);


// add data
$json_arr[] = array('codigo'=>$_POST["codigo"], 'nome'=>$_POST["nome"], 'sobrenome'=>$_POST["sobrenome"], 'email'=>$_POST["email"]);

// encode json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>
