<?php
// Memulai session atau melanjutkan session yang sudah ada
session_start();

// Menyertakan kode koneksi ke database
include "koneksi.php";

// Cek apakah sudah ada user yang login, jika iya arahkan ke halaman admin
if (isset($_SESSION['username'])) { 
    header("location:admin.php"); 
    exit;
}

// Proses ketika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user'];
    $password = md5($_POST['pass']); // Enkripsi password menggunakan MD5

    // Prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("SELECT username FROM user WHERE username=? AND password=?");

    // Binding parameter
    $stmt->bind_param("ss", $username, $password); // parameter: username dan password

    // Eksekusi query
    $stmt->execute();

    // Menampung hasil query
    $hasil = $stmt->get_result();

    // Mengambil baris hasil sebagai array asosiatif
    $row = $hasil->fetch_array(MYSQLI_ASSOC);

    // Jika data user ditemukan (username dan password cocok)
    if (!empty($row)) {
        // Menyimpan informasi username di session
        $_SESSION['username'] = $row['username'];

        // Mengalihkan ke halaman admin
        header("location:admin.php");
        exit;
    } else {
        // Jika login gagal, tampilkan pesan kesalahan
        $error_message = "Username atau Password salah!";
    }

    // Menutup koneksi database
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #5F95B7, #304661);
        }
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-box {
            background: rgba(255, 255, 255, 0.3);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 500px;
            height: 500px;
        }
        .login-box h1 {
            margin-bottom: 20px;
        }
        .input-group-text {
            background: transparent;
            border: none;
        }
        .form-control {
            background: rgba(255, 255, 255, 0.6);
        }
        .form-check-label {
            margin-left: 10px;
        }
        .forgot-password {
            display: block;
            margin: 10px 0;
            text-align: right;
        }
        .btn-login {
            width: 100%;
        }
        .back-home-link {
            display: block;
            text-decoration: none;
            font-size: 16px;
            color: #ffffff;
        }

        .back-home-link:hover {
            color: white;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                 <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
            </svg>
            </div>
            <p style="font-size: 20px;">LOGIN</p>

            <!-- Form login -->
            <form method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input type="text" name="user" class="form-control" placeholder="Username" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-login">Login</button>

                <!-- Tampilkan pesan error jika login gagal -->
                <?php if (isset($error_message)): ?>
                    <div class="mt-3 alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>

                <!-- Link Kembali ke Home -->
                <div class="mt-3">
                    <a href="../index.php" class="back-home-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                    </svg>   
                   Home</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
