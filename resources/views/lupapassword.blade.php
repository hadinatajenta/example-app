<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="/css/login.css">
</head>

<body>
    <!--Kontainer dari kerangka-->
    <div class="container">
        <h1>Reset Password</h1>
        <p>Kirimkan email anda untuk mengatur ulang kata sandi</p>
        <form action="ubahpassword.blade.php" method="GET">
            <input type="email" name="email" id="email" placeholder="Masukkan Email anda" required>
            <input type="button" value="Lanjutkan" class="button">
        </form>
    </div>
</body>

</html>