<?php

    /* -------------------------------------------------------------------------- */
    /*                                 Reflection                                 */
    /* -------------------------------------------------------------------------- */

    /*
     * Reflection adalah membaca struktur kode pada saat aplikasi sedang berjalan
     * Reflection adalah materi yang sangat panjang gaes kata pak eko wkwkwk,
     * jadi disini kita hanya akan kenalan doang ya gaes
     * 
     * Reflection adalah fitur yang biasanya digunakan saat kita membuat framework
     * 
     * lingkapnya : https://www.php.net/manual/en/book.reflection.php 
     */

    /* -------------------------------------------------------------------------- */
    /*                 Studi Kasus : Membuat Validation Framework                 */
    /* -------------------------------------------------------------------------- */

    /*
     * Sekarang mencoba buat studikasus menggunakan Reflection
     * Kita akan membuat validation framework menggunakan reflection
     * Validatino framework nya cukup sederhana, kita hanya akan mengecek apakah properties bernilai
     * null atau tidak, jika null atau belum di set, kita akan throw Validaiton Exception
     * Tanpa reflection, biasanya untuk melakukan hal ini, kita butuh pengecekan secara manual
     */
    require_once '../exception/ValidationException.php';
    require_once '../data/loginRequest/Login_Request.php';
    require_once '../data/loginRequest/Validation.php';
    require_once '../data/loginRequest/ValidationUtil.php';
   
    $loginRequest = new LoginRequest();

    $loginRequest->username = "johjo";
    $loginRequest->password ='admin';

    // ValidateLoginRequest($loginRequest);
    
    // ValidationUtil::validateNotByReflection($loginRequest);
    
    // ValidationUtil::validateByReflection($loginRequest);
    
    // echo "VALID";

    class RegisterUserRequest
    {
        public ?string $name;
        public ?string $email;
        public ?string $password;

    }


    $register = new RegisterUserRequest();

    $register->name = "johjo";
    // $register->email ="dkk";
    // $register->password ="admin";

    // ValidationUtil::validateByReflection($register);


    // NOTE get yang ada di reflection ada banyak bgt


    class dokumen
    {
        public ?string $name;
        public ?string $email;
        public ?string $password;
    }

    $dokumen = new dokumen();

    $dokumen->name = "johjo";
    $dokumen->email = null;
    $dokumen->password ="admin";

    ValidationUtil::validateByReflection($dokumen);

    echo "VALID";