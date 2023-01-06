<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";
?>

<section>
    <div class="container">
        <form action="" method="POST" class="form">
            <h3>Edit Post - Post Title</h3>
            <div class="form-group">
                <label for="title">Enter New Title</label>
                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                <label for="content">Enter New Content</label>
                <textarea name="content" rows="2" placeholder="Enter Content" class="form-control"></textarea>
                <button name="submit" class="btn btn-success">SAVE</button>
            </div>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>