

<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'Deviana Dyah'){
    if ($password == '291200') {
        include 'project-tb.php';
    } else{
        echo 'Password Salah';
    }
} else{
    echo 'Username Tidak Ditemukan';
}
?>
