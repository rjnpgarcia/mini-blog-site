<?php

class LoginController
{
    public function loginUser($email, $password)
    {
        global $connection;

        $query = "SELECT * FROM users WHERE email = '$email'";
        $select_user_query = mysqli_query($connection, $query);
        if (!$select_user_query) {
            die("QUERY FAILED" . mysqli_error($connection));
        }

        while ($row = mysqli_fetch_array($select_user_query)) {
            $db_user_id = $row['user_id'];
            $db_username = $row['username'];
            $db_email = $row['email'];
            $db_password = $row['password'];

            if (password_verify($password, $db_password)) {
                $_SESSION['user_id'] = $db_user_id;
                $_SESSION['username'] = $db_username;
                $_SESSION['email'] = $db_email;

                header("Location: index.php");
                exit;
            }
        }
    }
}

$login = new LoginController;
