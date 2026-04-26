<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <div class="login">

        <!-- ----------HEADER----------- -->
        <header class="header">
            <div class="logo"><img src="../assets/Logo.png" alt="HMS" width="80px"></div>

            <h2>HOSPITAL MANAGEMENT SYSTEM</h2></br>
            <!-- <p>“Complete care in just one click”</p> -->
        </header>
        <main>
            <h3>&starf; Fill the important login credentials:</h3>

            <form action="../sessions/login.php" method="POST">

                <label for="role">Login as</label>
                <select name="role">
                    <option>---------select role-----------</option>
                    <option value="admin" name="admin">Admin</option>
                    <option value="doctor" name="doctor">Doctor</option>
                    <option value="patient" name="patient">Patient</option>
                </select><br>

                <!-- <label for="name">Name</label>
                <input type="text" name="name" required><br> -->

                <label for="name">Name</label>
                <input type="text" name="name" required><br>

                <label for="password">Password</label>
                <input type="password" name="password"><br><br>

                <div>
                    <button type="submit" name="login">LOGIN</button>
                    <p>Not registered? <a href="../Register/Registration form.php"> Create new account </a></p>
                </div>

            </form>
        </main>

    </div>
</body>

</html>