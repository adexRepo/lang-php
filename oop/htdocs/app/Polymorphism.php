<?php

/* -------------------------------------------------------------------------- */
/*                                PHOLYMORPHISM                               */
/* -------------------------------------------------------------------------- */

/*
 * Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
 * Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
 * Polymorphism erat hubungannya dengan Inheritance.
 */

 require_once '../data/Programmer.php';

 $company = new Company();
 $company->programmer = new Programmer("Adex");
//  var_dump($company);
 
 //* BERUBAH BENTUK MENJADI :
 $company->programmer = new BackendProgrammer("Krist");
//  var_dump($company);
 
 $company->programmer = new FrontendProgrammer("Dupin");
//  var_dump($company);


sayHelloProgrammer(new Programmer("Adek")); // Hello Programmer Krist
sayHelloProgrammer(new BackendProgrammer("Backend")); // Hello Programmer Krist
sayHelloProgrammer(new FrontendProgrammer("Frontend")); // Hello Programmer Krist

