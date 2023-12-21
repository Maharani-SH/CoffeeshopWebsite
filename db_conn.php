<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "coffeeshop";

$conn = mysqli_connect($servername, $username, $password, $database);

function regristasi($data) {
    global $conn;

    $name = ($data["nama"]);
    $username = strtolower(stripslashes($data["username"]));
    $email = ($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "
        <script>
        alert('username sudah terdaftar!!!')
        </script>";
        return false;
    }


    if( $password !== $password2 ){
        echo "<script>
        alert('konfirmasi password tidak sesuai');
        </script>";

        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users(id, nama, username,email, password) VALUES ('', '$name', '$username','$email', '$password')");

    return mysqli_affected_rows($conn);
}


if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>


