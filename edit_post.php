<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";

// Allow logged-in users only
if (!$login->isLoggedIn()) {
    header("Location: login.php");
}

// Read post
if (isset($_GET['p_id'])) {
    $get_post_id = mysqli_real_escape_string($connection, $_GET['p_id']);

    $post = PostController::getPost($get_post_id);

    while ($row = mysqli_fetch_array($post)) {
        $post_id = $row['id'];
        $post_title = $row['post_title'];
        $post_content = $row['post_content'];
    }
}

// Update Post
if (isset($_POST['submit'])) {
    $post_title = mysqli_real_escape_string($connection, $_POST['title']);
    $post_content = mysqli_real_escape_string($connection, $_POST['content']);

    PostController::updatePost($post_id, $post_title, $post_content);

    $success = "<p class='text-success'>Post Successfully Updated: <a href='index.php'>View Post</a></p>";
}

?>

<section>
    <div class="container">
        <form action="" method="POST" class="form">
            <!-- Success Message Notification -->
            <?= $success ?? ''; ?>
            <h3 class="pt-3 pb-4">Edit Post - <?= $post_title; ?></h3>
            <div class="form-group">
                <label for="title" class="label-title">Enter New Title</label>
                <input type="text" name="title" value="<?= $post_title; ?>" class="form-control form-input-edit">
                <label for="content" class="label-content">Enter New Content</label>
                <textarea name="content" rows="2" class=" form-control form-input-edit"><?= $post_content; ?></textarea>
                <button name="submit" class="btn btn-success blog-btn">SAVE</button>
            </div>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>