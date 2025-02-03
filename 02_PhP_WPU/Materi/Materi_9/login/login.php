<?php
// cek apakah tombol submit sudah tekan apa  belum
if( isset($_POST["submit"])) {
// cek username & password 
 if($_POST["username"] == "admin" && $_POST["password"] == "123") {

// jika benar, redirect ke halaman admin
header("location: admin.php");
exit;
 } else {
// jika salah,tampikan pesan kesalahan
    $eror = true;
 } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>halo admin</h1>
    <?php if(isset($eror)) : ?>
    <p style="color : red; font=style: italic;">username / password salah!</p>
        <?php endif; ?>
    <ul>
    <form action="" method="post">
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>

    <li>
        <button type="submit" name="submit">login</button>
    </li>
    </form>

    </ul>
</body>
</html>