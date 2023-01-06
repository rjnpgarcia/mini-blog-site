<body>
    <nav class="navbar navbar-fixed-top p-0">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand text-light fs-3 fw-bold">MiniBlog</a>
            <ul class="nav justify-content-end">
                <!-- For Login and Logout Nav Links -->
                <?php if ($login->isLoggedIn()) : ?>
                    <li class="nav-item text-light">
                        <a class="nav-link text-light" href="#">Hi <?= $_SESSION['username']; ?>!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="includes/logout.php">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                    </li>
                <?php endif; ?>
                <!-- ************************ -->
            </ul>
        </div>
    </nav>