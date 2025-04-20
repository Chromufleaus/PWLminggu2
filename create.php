<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $conn->query("INSERT INTO users (name, email, passw) VALUES ('$name',
'$email', '$passw')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap533/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styleku.css">
    <script src="bootstrap533/jquery/3.3.1/jquery-3.3.1.js"></script>
    <script src="bootstrap533/js/bootstrap.js"></script>
</head>

<body>
    <div class="utama">
        <h2 class="text-center">Tambah Pengguna</h2>
        <div class="form-group">
            <form method="POST">
                Nama: <input class="form-control-ku" type="text" name="name" required><br>
                Email: <input class="form-control-ku" type="email" name="email" required><br>
                Password: <input class="form-control-ku" type="password" name="passw" required><br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>