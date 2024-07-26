<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background: #eee;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label>Username:</label>
        <input name="username"><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password"><br><br>
        <button >Login</button>
    </form>
    <script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $file = fopen("login.txt", "r");

            $content = fgets($file);
            if ($content == $uname . ":" . $pass) {
                echo "alert('Access granted!')";
            } else {
                echo "alert('Incorrect')";
            }
        }
        ?>
    </script>
</body>
</html>
