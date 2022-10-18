PENGENALAN PHP

1. Php singkatan dari PHP : Hypertext Preprocessor
2. PHP banyak digunakan sebagai bahasa pemrograman yang dikhususkan untuk web development
3. PHP sangat mudah digunakan dan banyak sekali di adopsi oleh programmer web
4. Bahkan hampir mayoritas kebanyakan web di dunia dibuat menggunakan PHP
5. PHP pertamakali dibuat oleh Rasnys Kerdrof pada tahun 1995

OPEN SOURCE

1. PHP adalah bahasa pemrograman open source
2. Kita bisa download PHP di website php.net
3. Atau bisa liat source code nya di halaman github php http://github.com/php/php-src
4. Selain open source, PHP juga free untuk digunakan, sehingga tidak ada biaya yang harus kita
    keluarkan untuk menggunakan PHP

Proses Development PHP
1. Lihat di gambar

Apa yang bisa dibuat menggunakan PHP
1. Server-side scripting. Ini adalah salahsatu fokus utama web, untuk membuat aplikasi server side.
    Biasanya digunakan sebagai aplikasi web menggunakan bantuan web server, dan kita bisa melihat output
    aplikasi menggunakan web browser (Internet Explorer Chrome, Firefox, dan lain-lain)
2. Command line scripting. PHP juga bisa digunakan untuk membuat program berbasis command line,
    tanpa harus menggunakan web server
3. Dekstop application, walaupun jarang digunakan, tapi PHP juga bisa digunakan untuk membuat aplikasi
    dekstop menggunakan PHP-GTK.

Proses Menginstall PHP
Note :
1. PHP bisa diinstall di sistem operasi apapun, Windows, Mac ataupun linux
2. Namun menginstall PHP secara manual tidak terlalu mudah
3. Olehkarena itu untuk belajar, direkomendasikan menginstall PHP dengan bantuan tool-tool yang sudah
    membundle PHP dengan teknologi pendukungnya.

Step 1 - Menginstall XAMPP
1. kita menggunakan aplikasi XAMPP, dimana aplikasi ini telah membundle PHP, MySQL/MariaDB, Apache HTTPD dst.
2. https://www.apachefriends.org/

Step 2 - Setting PATH
1. Setelah menginstall PHP, kita perlu mengatur PATH sistem operasi yang kita gunakan
2. Tiap Sistem operasi berbeda-beda cara setting PATH nya
3. Inti dari setting PATH adalah, agar kita bisa mengakses PHP dari commad prompt / terminal
4. Untuk linux dan mac tambahkan di .bashrc atau .profile atau .zshc
   command : export PATH="/Application/XAMPP/bin:$PATH"
5. untuk windows :
    setelah install xampp , maka by default terinstall di c/xampp
    lalu path ini = C:\xampp\php
    dimasukkan ke environtment variabal,(pilih bawah aja), path

Step 3 - Install Text Editor
1. pakai VS CODE AJA CUK, GG! , izzzi


FILE PHP
1. File kode program PHP diakhiri dengan extension .php
2. Diawal kode program PHP, wajib menambahkan <?php. Dan diakhiri kode program php perlu ditambahkan ?> (tidak wajib)
3. Nama file PHP tidak ada aturan, jadi kita bisa membuat file PHP seperti membuat file biasanya.
    Namun agar mempermudah saat menjalankan file PHP, direkomendasikan tidak menggunakan spasi
4. Untuk menampilkan di PHP, kita bisa menggunakan perintah echo

