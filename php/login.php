<?php
// Start session
session_start();

$error = ''; // Initialize the error message variable

// Check if the session variable for user login status is set and true
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    header("Location: admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hardcoded credentials for demonstration purposes
    if ($username == "admin@gmail.com" && $password == "admin123") {
        // Credentials are correct, set session variable and redirect to admin.php
        $_SESSION["logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        // Display an error message if credentials are incorrect
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FED8E3;
            margin: 0;
            padding-top: 20px;
            /* Added padding at the top for navbar */
        }

        /* Center the login form */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 40px);
            /* Adjusted height to account for navbar */
        }

        .login-container {
            background-color: #FEC5D5;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 300px;
            text-align: center;
        }

        input,
        button {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        input {
            margin-top: 10px;
        }

        button {
            background-color: #FE668F;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }

        button:hover {
            opacity: 0.8;
        }

        .navbar {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            background-color: transparent;
            /* Transparent navbar */
            padding: 10px 20px;
        }

        .logo img {
            height: 50px;
            width: auto;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="index.html" class="logo"><img src="../resources/logo.jpg" alt="ArtVue Logo"></a>
    </div>

    <div class="form-container">
        <div class="login-container">
            <h2>Login</h2>
            <?php if ($error): ?>
                <p style="color: red;">
                    <?php echo $error; ?>
                </p>
            <?php endif; ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>