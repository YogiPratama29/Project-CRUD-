<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GII PHONE</title>
    <link href="style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="COOL-wrapper">

    
        <form method="POST" action="aksi_login.php">
            <h1>Login</h1>
            <div class="Fumojiki-username">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="Fumojiki-username">
                <input type="password" name="Password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="ingat">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password</a>
            </div>

            <button type="submit" class="btn" value="Simpan">Login</button>
            <div class="buat">
                <p>Gak punya akun?</p>
                <a href="#">Register</a>
            </div>
        </form>
    </div>
    
</body>
</html>