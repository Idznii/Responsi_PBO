<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$Idznii = new Person("Idznii", "Jawa Tengah");

// tambahkan value nama di object
$Idznii->nama = "idznii";

// panggil function sayHelloNull dengan parameter
$Idznii->sayHelloNull("Idznii");

// buat object dari kelas person
$Sholekhah = new Person("Sholekhah", "Solo");

// tambahkan value nama di object
$Sholekhah->nama = "Sholekhah";

// panggil function sayHelloNull dengan parameter null
$Sholekhah->sayHelloNull(null);
