# PHP WEB
1. PHP sendiri sejak awal memang diperuntukkan membuat aplikasi Web
2. Di materi course-course sebelumnya kita sudah belajar bahasa pemrograman PHP, namun masih menggunakan PHP CLI (command line interface) atau berbasis terminal
3. Pada course ini kita akan fokus membuat Web menggunakan PHP

# Cara Kerja PHP Web
<Web Browser> request to <Web Server>
1. Web Browser akan melakukan HTTP Request ke Web Server

<Web Server> execute <PHP FILE>
2. Web Server menerima HTTP Request, lalu mengeksekusi file PHP yang sesuai dengan request tersebut

<PHP FILE> Rendering <Render>
3. File PHP akan di eksekusi, lalu akan menjalankan kode program PHP, hasilnya akan di render menjadi content yang sesuai dengan yang dilakukan di kode program.

<PHP FILE> Content <Web Server>
4. Hasil content yang dibuat PHP (misal HTML, CSS, JavaScript, dan lain-lain) akan dikembalikan ke Web Server

<Web Server> Response <Web Browser>
5. Web Server akan mengembalikan content tersebut sebagai HTTP Response ke Web Browser

<Web Broser> Rendering <Rendering>
6. Web Browser menerima content dari Web Server, lalu me-render content tersebut sesuai dengan tipe content nya 

*lihat diagram kerja php web

// biasanya di running lewat xampp dan apache tapi originalnya php punya sendiri