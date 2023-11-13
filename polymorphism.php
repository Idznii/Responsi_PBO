<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Idznii Sholekhah");
var_dump($company);

$company->programmer = new BackendProgrammer("Idznii Sholekhah");
var_dump($company);

$company->programmer = new FrontendProgrammer("Ayu Candisari");
var_dump($company);

sayHelloProgrammer(new Programmer("Idznii Sholekhah"));
sayHelloProgrammer(new BackendProgrammer("Idznii Sholekhah"));
sayHelloProgrammer(new FrontendProgrammer("Ayu Candisari"));
