<?php
// Start the session.
session_start();

// Define predefined email and password.
$predefined_email = "demo@example.com";
$predefined_password = "password";

// Check if the user is already logged in, if yes, redirect to admin page.
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("Location: admin.php");
    exit;
}

// Define variables and initialize with empty values.
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if email is empty.
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty.
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials.
    if (empty($email_err) && empty($password_err)) {
        // Check if email and password match predefined values.
        if ($email === $predefined_email && $password === $predefined_password) {
            // Password is correct, start a new session.
            session_start();

            // Store data in session variables.
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;

            // Redirect user to admin page.
            header("location: admin.php");
        } else {
            // Email doesn't exist, display a generic error message.
            $login_err = "Invalid email or password.";
            echo "<script>alert(`$login_err`)</script>";
        }
    } else {
        $login_err = $email_err . " " . $password_err;
        echo "<script>alert(`$login_err`)</script>";
    }
}
?>

<?php
$pageTitle = "Admin Login";
require_once 'header.php';
?>

<!--Main-->
<form method="post" action="admin-login.php">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <!--Form-->
        <div id="myForm" class="form-signin w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal">Login as Admin</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="adminEmail" placeholder="name@example.com" name="email">
                    <label for="adminEmail">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="adminPassword" placeholder="password" name="password">
                    <label for="adminPassword">Password</label>
                </div><br />

                <input class="btn btn-lg btn-dark w-100 py-2" type="submit" value="Login">
            </form>
        </div>
    </div>
</form>
<!--End of Main-->

<?php
// Include footer.
require_once 'footer.php';
?>