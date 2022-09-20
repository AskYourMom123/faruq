<?php
session_start();

include "koneksi.php";

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$query = mysqli_query($conn, "SELECT * FROM data_siswa WHERE email = '$email'");
$cekEmail = mysqli_num_rows($query);
if($cekEmail > 0) {
    $data = mysqli_fetch_array($query);
    $cekPassword = password_verify($password, $data['password']);
    if(!$cekPassword) {
        ?>
        <script>
            alert("Email atau Sandi yang anda masukan tidak valid!");
            document.location="login.php";
        </script>
        <?php
    } else {
        // untuk session
        $_SESSION['login'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['nis'] = $data['nis'];
	    $_SESSION['nama'] = $data['nama'];
	    $_SESSION['email'] = $data['email'];
	    $_SESSION['extra'] = $data['extra'];
        ?>
        <script>     
            document.location="siswa/index.php";
        </script>
        <?php
    }
}

?>