<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";

// Allow logged-in users only
if (!$login->isLoggedIn()) {
    header("Location: login.php");
}

// CREATE Post query
if (isset($_POST['submit'])) {
    $post_title = mysqli_real_escape_string($connection, $_POST['title']);
    $post_content = mysqli_real_escape_string($connection, $_POST['content']);
    $post_date = date('jS') . " of " . date('F Y H:i:s A');

    PostController::addPost($post_title, $post_content, $post_date);

    $success = "<p class='text-success'>Post Successfully Added: <a href='index.php'>View Post</a></p>";
}

?>

<section>
    <div class="container">
        <form action="" method="POST" class="form">
            <h3>Create a Post!</h3>
            <!-- Success Message Notification -->
            <?= $success ?? ''; ?>
            <div class="form-group">
                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                <textarea name="content" rows="2" placeholder="Enter Content" class="form-control"></textarea>
                <button name="submit" class="btn btn-success">POST</button>
            </div>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>