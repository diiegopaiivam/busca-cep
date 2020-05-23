<?php 

require_once "vendor/autoload.php";

use BuscaCep\Search;

$search = new Search;

$cep = $search->getAddressZipCode('60789632');

print_r($cep);