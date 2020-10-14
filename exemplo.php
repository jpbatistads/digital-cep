<?php

require_once "vendor/autoload.php";

use joaopaulo\digitalcep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode("50980695");

print_r($resultado);