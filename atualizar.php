<?php

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

$json_arr[] = array( echo $_POST["codigo"], $_POST["nome"], $_POST["sobrenome"], $_POST["email"]);



// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?> 