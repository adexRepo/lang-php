<?php

    /* -------------------------------------------------------------------------- */
    /*                                 Upload File                                */
    /* -------------------------------------------------------------------------- */

    /*
        * Selain mengirim data berupa Query Param dan Form Post, kadang kita juga
        * butuh melakukan upload file dari client ke server
        * Dan PHP Web juga menerima upload file
     */

    /* -------------------------------------------------------------------------- */
    /*                               PHP Upload File                              */
    /* -------------------------------------------------------------------------- */

    /*
        * Di PHP, untuk file yang di upload dari server, kita bisa menangkapnya dari global variable $_FILES
        * Setiap ada file yang di upload, secara otomatis $_FILES akan berisi informasi seputar file yang di upload
        * https://www.php.net/manual/en/features.file-upload.post-method.php 
        * Saat di upload ke server, file akan secara otomatis disimpan di temporary folder di server, dari situ kita bisa pindahkan ke lokasi yang kita inginkan
     */

     /*
      * The global $_FILES will contain all the uploaded file information.
        * Its contents from the example form is as follows. Note that this
        * assumes the use of the file upload name userfile, as used in the
        * example script above. This can be any name.

        *  $_FILES['userfile']['name']
            *  The original name of the file on the client machine.
        *  $_FILES['userfile']['type']
            *  The mime type of the file, if the browser provided this information.
            *  An example would be "image/gif". This mime type is however not
            *  checked on the PHP side and therefore don't take its value for granted.
        *  $_FILES['userfile']['size']
            *  The size, in bytes, of the uploaded file.
        *  $_FILES['userfile']['tmp_name']
            *  The temporary filename of the file in which the uploaded file was
            *  stored on the server.
        *  $_FILES['userfile']['error']
            *  The error code associated with this file upload.
        *  $_FILES['userfile']['full_path']
            *  The full path as submitted by the browser. This value does not
            * always contain a real directory structure, and cannot be trusted.
            * Available as of PHP 8.1.0.
      */

      /* -------------------------------------------------------------------------- */
      /*                           Memindahkan File Upload                          */
      /* -------------------------------------------------------------------------- */

      /*
        * Secara default, file upload akan disimpan di temporary folder
        * Kadang kita ingin memindahkan file tersebut ke lokasi dimana kita bisa mengakses file tersebut
        * Untuk melakukan hal tersebut, PHP memiliki banyak function untuk memanipulasi file dan folder
        * https://www.php.net/manual/en/ref.filesystem.php 
       */


      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $file_name = $_FILES['upload_file']['name'];
        $file_type = $_FILES['upload_file']['type'];
        $file_size = $_FILES['upload_file']['size'];
        $file_tmp = $_FILES['upload_file']['tmp_name'];
        $file_error = $_FILES['upload_file']['error'];

        // mindahin file ke folder yang kita inginkan
        move_uploaded_file($file_tmp, __DIR__ .'/file/'. $file_name);
      }

?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>
    <h1>Upload File</h1>
    <table>
        <tr>
            <td>File Name</td>
            <td><?= $file_name ?></td>
        </tr>
        <tr>
            <td>File Type</td>
            <td><?= $file_type ?></td>
        </tr>
        <tr>
            <td>File Size</td>
            <td><?= $file_size ?></td>
        </tr>
        <tr>
            <td>File tmp</td>
            <td><?= $file_tmp ?></td>
        </tr>
        <tr>
            <td>File Error</td>
            <td><?= $file_error ?></td>
        </tr>

    </table>

<?php }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>UPLOAD</title>
</head>
<body>
    <h1>Form File</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Send this file: <input name="upload_file" type="file" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>