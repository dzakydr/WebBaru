<?php include('config.php');?>
<?php
    // menyimpan variable yang dikirim Form
    $nama = $_POST['nickname'];
    $password = $_POST['password'];
    

    // cek nilai variable
    if (empty($nama)) {
        header('location: ./update.php?error=' .base64_encode('Nama tidak boleh kosong'));
    }
    if (empty($password)) {
        header('location: ./update.php?error=' .base64_encode('Password tidak boleh kosong'));   
    }
    // validasi apakah password dengan repassword sama
    // encryption dengan md5
    $password = md5($password); 
    // SQL Insert
    
    $sql = "UPDATE users SET nama='$nama', password='$password' WHERE nama='{$_SESSION['nama']}'";
    $hasil = $conn->query($sql);
    // jika gagal
    if (! $hasil) {
        echo "<script>alert('".$conn->connect_error."'); window.location.href = './update.php';</script>";
    } else {
        echo "<script>alert('Update Berhasill!'); window.location.href = '../login.php';</script>";
    }

?>