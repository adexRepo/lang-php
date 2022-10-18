# PHP Development Server
1. Seperti yang sudah kita bahas sebelumnya, agar web bisa diakses, kita perlu menyimpan web tersebut di dalam aplikasi Web Server
2. Saat kita menginstall XAMPP, di dalam nya terdapat aplikasi Apache HTTPD, itu adalah salah satu aplikasi Web Server
3. Namun pada course ini, saya tidak akan menggunakan Apache HTTPD, saya akan menggunakan Web Server sederhana yang sudah disediakan langsung oleh PHP, namanya PHP Development Server

# Peringatan!
1. PHP Development Server adalah aplikasi Web Server untuk membantu mempermudah menjalankan Web Server untuk PHP Web
2. Fitur ini hanya untuk proses development, bukan untuk dijalankan di Web Host
3. PHP Development Server hanya memiliki 1 thread, artinya hanya bisa menjalankan 1 proses dalam satu waktu

# Menjalankan PHP Development Server
1. php -S host:port
2. Di komputer pribadi, kita bisa gunakan host dengan nama localhost
3. Untuk nomor port, kita bisa gunakan bebas, asal port nya tidak digunakan oleh aplikasi lain
4. Misal : php -S localhost:8080
5. Artinya PHP Development Server akan bisa diakses di http://localhost:8080 
6. Ingat, kita wajib menjalankan perintah ini di folder tempat kita menyimpan kode program PHP kita

# Hot Reload
1. PHP adalah bahasa pemrograman yang tidak butuh di compile terlebih dahulu
2. Selain itu PHP juga mendukung fitur hot reload, artinya setiap perubahan yang kita lakukan di kode program PHP, kita tidak butuh melakukan restart aplikasi Web Server nya
3. Kita cukup melakukan request ulang dari Web Browser, secara otomatis Web Server akan menjalankan kode program PHP terbaru kita

