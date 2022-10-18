<?php

/* -------------------------------------------------------------------------- */
/*                             TYPE CHECK AND CAST                            */
/* -------------------------------------------------------------------------- */

/*
 * Sebelumnya kita sudah tahu cara melakukan konversi tipe data class
 * Khusus untuk tipe data Object, kita tidak perlu melakukan konversi secara eksplisit
 * Namun agar aman, sebelum melakukan cast, pastikan kita melakukan type check
 * (pengecekan tipe data) terlebih dahulu, dengan menggunakan instanceof
 * 
 * Hasil operator instanceof adalah boolean, true jika tipe data sesuai, false jika tidak
 */

require_once '../data/Programmer.php';

sayHelloProgrammer(new Programmer("Adek")); // Hello Programmer Adek
sayHelloProgrammer(new BackendProgrammer("Backend")); // Hello Programmer Backend
sayHelloProgrammer(new FrontendProgrammer("Frontend")); // Hello Programmer Frontend
