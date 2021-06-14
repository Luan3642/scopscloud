<?php

$data = file_get_contents('data.json');

$json_arr = json_decode($data, true);

?> 

<html>
<body>
<h1>Cadastrar</h1>
<form action="atualizar.php" method="post">
Codigo:<input type="text" name="codigo"><br>
Nome: <input type="text" name="nome"><br>
Sobrenome: <input type="text" name="sobrenome"><br>
Email: <input type="text" name="email"><br>

<input type="submit" href="atualizar.php">
</form>

</body>
</html> 

