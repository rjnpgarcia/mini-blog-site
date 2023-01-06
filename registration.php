<?php
// Includes
require_once "layouts/header.php";
require_once "layouts/nav.php";

// Registration Query
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim(($_POST['password']));
    $cpassword = trim(($_POST['cpassword']));

    // Sanitize Input
    $username = filter_var($username, FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // for Errors
    $error = [
        'username' => '',
        'email' => '',
        'password' => '',
    ];
    // Username Validation
    if (strlen($username) < 4) {
        $error['username'] = 'Username is too short';
    }
    if (empty($username)) {
        $error['username'] = 'Username should not be empty';
    }
    if ($register->usernameExists($username)) {
        $error['username'] = 'Username already exists';
    }

    // Email Validation
    if (empty($email)) {
        $error['email'] = 'Email should not be empty';
    }
    if ($register->emailExists($email)) {
        $error['email'] = 'Email already exists';
    }

    // Password Validation
    if (empty($password)) {
        $error['password'] = 'Password should not be empty';
    }
    if ($password !== $cpassword) {
        $error['password'] = 'Password and Confirm Password did not match';
    }

    // For Valid Registration
    foreach ($error as $key => $value) {
        if (empty($value)) {
            unset($error[$key]);
        }
    }
    if (empty($error)) {
        $register->registerUser($username, $email, $password);
        $success = "<p class='text-success'>Thank you for you registration! You can now login <a href='login.php'>HERE</a></p>";
    }
}
?>

<section>
    <div class="container">
        <h1>Registration</h1>
        <form action="" method="POST" class="form">
            <h2>See the Registration Rules</h2>
            <!-- Success Message Notification-->
            <?= $success ?? ''; ?>
            <div class="form-group">
                <input type="text" name="username" placeholder="Enter Username" class="form-control">
                <p class="text-danger"><?= isset($error['username']) ? $error['username'] : ''; ?></p>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Email" class="form-control">
                <p class="text-danger"><?= isset($error['email']) ? $error['email'] : ''; ?></p>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                <p class="text-danger"><?= isset($error['password']) ? $error['password'] : ''; ?></p>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control">
            </div>
            <button name="register" class="btn btn-success">Register</button>
            <p>Return to the <a href="login.php">LOGIN PAGE</a></p>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>