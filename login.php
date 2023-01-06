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
    <div class="container login-card">
        <form action="" method="POST" class="form">
            <div class="border-bottom mb-3">
                <p class="fs-4">Login</p>
                <!-- Error Message Notification -->
                <?= $errorMessage ?? ''; ?>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter Email" class="form-control form-input">
                <input type="password" name="password" placeholder="Enter Password" class="form-control form-input">
                <button name="login" class="blog-btn btn btn-success">LOGIN</button>
                <a class="blog-btn btn btn-success" href="registration.php">REGISTER</a>
            </div>
        </form>
        <?php if (!$login->isLoggedIn()) : ?>
            <p class="fs-6 ntf">Currently logged out.</p>
        <?php endif; ?>
    </div>
</section>

<?php include "layouts/footer.php"; ?>