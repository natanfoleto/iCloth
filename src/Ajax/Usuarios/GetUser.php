<?php

require "../../../config.php";

use app\Controllers\CUsuario;

$usuario = new CUsuario;

$object = array(
	"nome" => filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING),
);

$result = $usuario->GetUser($object);

if (!$result) {
	echo 404;
} else {
	echo json_encode($result);
}