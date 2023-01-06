<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";
?>

<section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Post Title</h4>
                <p class="card-subtitle">Contents of the post</p>
                <p class="card-subtitle">Date: 2nd of April 2020 09:13:32 AM</p>
                <a class="btn btn-danger">DELETE</a>
                <a class="btn btn-success" href="edit_post.php">EDIT</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary" href="add_post.php">CREATE NEW POST</a>
            </div>
        </div>
    </div>
</section>


<?php include "layouts/footer.php"; ?>