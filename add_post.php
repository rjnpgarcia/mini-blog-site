<?php
require_once "layouts/header.php";
require_once "layouts/nav.php";
?>

<section>
    <div class="container">
        <form action="" method="POST" class="form">
            <h3>Create a Post!</h3>
            <div class="form-group">
                <input type="text" name="title" placeholder="Enter Title" class="form-control">
                <textarea name="content" rows="2" placeholder="Enter Content" class="form-control"></textarea>
                <button name="submit" class="btn btn-success">POST</button>
            </div>
        </form>
    </div>
</section>

<?php include "layouts/footer.php"; ?>