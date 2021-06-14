<?php

// read json file
$data = file_get_contents('data.json');

// decode json to associative array
$json_arr = json_decode($data, true);

// get array index to delete
$arr_index = array();
foreach ($json_arr as $key => $value)
{
    if ($value['codigo'] == $_POST["codigo"])
    {
        $arr_index[] = $key;
    }
}

// delete data
foreach ($arr_index as $i)
{
    unset($json_arr[$i]);
}

// rebase array
$json_arr = array_values($json_arr);

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>



<?php

// read file
$data = file_get_contents('data.json');

// decode json to array
$json_arr = json_decode($data, true);

$codigo = $_POST["codigo"]

foreach ($json_arr as $key => $value) {
    if ($value['codigo'] == $codigo) {
		$json_arr[$key]['nome'] = $_POST["nome"];
        $json_arr[$key]['sobrenome'] = $_POST["sobrenome"];
		$json_arr[$key]['email'] = $_POST["email"];
    }
}

// encode array to json and save to file
file_put_contents('data.json', json_encode($json_arr));

header("Location: index.php");
?>