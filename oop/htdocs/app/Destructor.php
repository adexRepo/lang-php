<?php

/* -------------------------------------------------------------------------- */
/*                                 DESTRUCTOR                                 */
/* -------------------------------------------------------------------------- */

/*
 * Jika constructor adalah function yang akan dipanggil ketika object dibuat
 * Destructor adalah function yang akan dipanggil ketika object dihapus dari memory
 * Biasanya ketika object tersebut sudah tidak lagi digunakan, atau ketika aplikasi akan mati
 * Untuk membuat function destructor, ketika bisa menggunakan nama function __destruct()
 * 
 * Khusus untuk destructor, kita tidak boleh menambahkan function argument
 * Dalam penggunaan nya, biasanya digunakan untuk menutup koneksi ke database atau menutup proses
 * menulis ke file, sehingga tidak terjadi memory leak
 */


require_once '../data/Person.php';
$adek = new Belajar("Adek",null);
$eko = new Belajar("eko",null);

echo "Program selesai" . PHP_EOL;