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
            header("Location: admin/dashboard.php");
            exit;
        } elseif ($data['role'] == 'pengguna') {
            header("Location: pengguna/dashboard.php");
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
      <!-- Link Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
      <title>SISTEM MANAJEMEN INVENTARIS AKSESORIS GADGET</title>
    </head>
  
    <body>
      <?php if($error != ""){ ?>
          <p style="color:red;"><?php echo $error; ?></p>
      <?php } ?>
    <section>
      <div class="login-box">
        <form action="" method="POST">
          <h2>Login</h2>
          <div class="input-box">
            <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
            <input type="text"  name="username" required>
            <label for="">Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon> </span>
            <input type="password" name="password" required>
            <label for="">Password</label>
          </div>
          <button>Login</button>
        </form>
      </div>    
    </section>
      
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    </body>
</html>
