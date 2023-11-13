<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("Idznii Sholekhah", "Jawa Tengah");

// panggil function
$person1->sayHello("Idznii");

// panggil self keyword
$person1->info();
