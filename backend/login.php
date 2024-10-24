<?php
    session_start();

    // Fungsi sederhana untuk validasi input
    function sanitizeInput($data) {
        return htmlspecialchars(trim($data));
    }

    // Dummy data user yang dienkripsi untuk contoh (gunakan database dalam implementasi nyata)
    $stored_email = 'admin@gmail.com';
    $stored_hashed_password = password_hash('admin', PASSWORD_DEFAULT);

    // Menampilkan pesan error secara dinamis
    $error_message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = sanitizeInput($_POST['email']);
        $password = sanitizeInput($_POST['password']);

        // Validasi input email dan password
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_message = "Format email tidak valid.";
        } elseif (empty($password)) {
            $error_message = "Password tidak boleh kosong.";
        } else {
            // Validasi email dan password
            if ($email === $stored_email && password_verify($password, $stored_hashed_password)) {
                $_SESSION['user'] = $email; // Menyimpan sesi user
                header('Location: ./../dashboard.php');
                exit(); // Selalu gunakan exit setelah header
            } else {
                $error_message = "Email atau password salah.";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(120deg, #3498db, #8e44ad);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 2rem 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        h2 {
            color: #fff;
            margin-bottom: 1.5rem;
        }

        .form-input {
            margin-bottom: 1rem;
            width: 100%;
        }

        .form-input input {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .error-message {
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .login-button {
            background: #e74c3c;
            color: #fff;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-button:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <?php if ($error_message): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-input">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>
</body>
</html>
