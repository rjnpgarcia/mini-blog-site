<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";

// Allow logged-in users only
if (!$login->isLoggedIn()) {
    header("Location: login.php");
}

// Delete Query
if (isset($_GET['delete'])) {
    $get_post_id = mysqli_real_escape_string($connection, $_GET['delete']);
    PostController::deletePost($get_post_id);
}

?>


<section>
    <div class="container justify-content-center d-grid">
        <?php
        // READ all posts query
        $allPosts = PostController::showAllPosts();

        while ($row = mysqli_fetch_assoc($allPosts)) {
            $post_title = $row['post_title'];
            $post_content = $row['post_content'];
            $post_date = $row['post_date'];
            $post_id = $row['id'];
        ?>
            <div class="card post-card">
                <div class="card-body">
                    <h4 class="card-title mb-3"><?= $post_title; ?></h4>
                    <p class="card-subtitle"><?= $post_content; ?></p>
                    <p class="card-subtitle pb-3">Date: <?= $post_date; ?></p>
                    <div class="border-top pt-3">
                        <a class="btn btn-danger btn-delete" onClick="return confirm('Confirm Delete Post?')" href="index.php?delete=<?= $post_id; ?>">DELETE</a>
                        <a class="btn btn-success btn-edit" href="edit_post.php?p_id=<?= $post_id; ?>">EDIT</a>
                    </div>
                </div>
            </div>
        <?php }; ?>
        <div class="card create-card">
            <div class="card-body">
                <a class="btn btn-primary create-btn" href="add_post.php">CREATE NEW POST</a>
            </div>
        </div>
    </div>
</section>

<?php include "layouts/footer.php"; ?>