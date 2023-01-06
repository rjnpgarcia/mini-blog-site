<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";

// Redirect to Index if user is logged in
if ($login->isLoggedIn()) {
    header("Location: index.php");
}

// LOGIN Username and Password Query
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    $access = $login->loginUser($email, $password);

    $errorMessage = '';
    if (!$access) {
        $errorMessage = "<h5 class='text-danger text-center'>Email and Password invalid</h5>";
    }
}
?>

<section>
    <div class="container">
        <form action="" method="POST" class="form">
            <div class="form-group">
                <h1>Login</h1>
                <!-- Error Message Notification -->
                <?= $errorMessage ?? ''; ?>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Email" class="form-control">
                <input type="password" name="password" placeholder="Enter Password" class="form-control">
                <button name="login" class="btn btn-success">LOGIN</button>
                <a class="btn btn-success" href="registration.php">REGISTER</a>
            </div>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>