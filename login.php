<?php
include 'koneksi.php';
$email = "";
$password = "";
$nama_lengkap = "";
if (isset($_POST['masuk'])) {
  $email = strtolower($_POST['email']);
  $password = $_POST['password'];

  $sql1 = "SELECT * FROM user WHERE email = '$email'";
  $q1 = mysqli_query($conn, $sql1);
  $r1 = mysqli_fetch_array($q1);
  $n1 = mysqli_num_rows($q1);

  if ($n1 < 1) {
    echo "Mohon maaf akun anda tidak ada";
  } else if ($r1['password'] != md5($password) && $n1 > 0) {
    echo "Maaf, password yang anda masukkan tidak sesuai!";
  } else {
    header("location:index.php");
    exit();
  }
} else if (isset($_POST['simpan'])) {
  $nama_lengkap = htmlspecialchars(ucwords($_POST['nama_lengkap']));
  $email = htmlspecialchars(strtolower($_POST['email']));
  $password = htmlspecialchars($_POST['password']);
  if ($password != $konfirmasi_password) {
    echo "password yang anda masukkan tidak sesuai !";
  } else {
    if ($password == $konfirmasi_password) {
      $sql2 = "insert into user(nama_lengkap,email,password) values ('$nama_lengkap','$email',md5('$password'))";
      $q2 = mysqli_query($conn, $sql2);
      if ($q2) {
        echo "Akun Berhasil Terdaftar";

        $email = "";
        $nama_lengkap = "";
      } else {
        echo "Akun Gagal Terdaftar !";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style/login.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="" class="sign-in-form" method="post">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="email" name="email" id="email" value="<?php echo $email ?> " placeholder="Username" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" />
          </div>
          <input type="submit" name="masuk" value="Login" class="btn solid" />
          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $nama_lengkap ?>" placeholder="Nama Lengkap" />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email-" name="email" id="email" value="<?php echo $email ?>" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="pass" value="" placeholder="Password" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="c_pass" id="c_pass" value="" placeholder="Konfirm Password" />
          </div>
          <input type="submit" class="btn" name="simpan" value="Sing up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="script/login.js"></script>
</body>

</html>