<?php
session_start();
include 'koneksi.php';

$error = "";

//kondisi jika server meminta post username dan password
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //deklarasi username dan password
    $username = $_POST['username'];
    $password = $_POST['password'];

    //deklarasi mengambil query data username dan password
    $sql = "SELECT * FROM user 
            WHERE username='$username' 
            AND password='$password'";

    $query = mysqli_query($koneksi, $sql);

    //kondisi jika query error
    if (!$query) {
        die("Query error : " . mysqli_error($koneksi));
    }

    //kondisi memilih query username  dan role
    if (mysqli_num_rows($query) > 0) {

        $data = mysqli_fetch_assoc($query);

        //deklarasi username dan role
        $_SESSION['username'] = $data['username'];
        $_SESSION['role']     = $data['role'];

        //kondisi jika username role admin maka masuk halaman admin
        if ($data['role'] == 'admin') {
            header("Location: admin/index.php");
            exit;
        } elseif ($data['role'] == 'pengguna') {
            header("Location: pengguna/index.php");
            exit;
        } else {
            $error = "Role tidak dikenali";
        }

    } else {
        $error = "Username atau password salah";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
      <style>
        .mx-auto{width:500px}
      </style>
    </head>
  <body>
    <div class="mx-auto">
      <blockquote class="blockquote" >
          <p>
            Silahkan Mengisikan Form Tampered Glass
          </p>
      </blockquote>


  <?php if($error != ""){ ?>
      <p style="color:red;"><?php echo $error; ?></p>
  <?php } ?>

  <form method="POST" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
    </form>
  </div>



</body>
</html>
