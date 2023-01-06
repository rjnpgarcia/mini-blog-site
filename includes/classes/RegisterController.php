<?php

class RegisterController
{
    // To prevent duplicate username
    public function usernameExists($username): bool
    {
        global $connection;

        $query = "SELECT username FROM users WHERE username = '$username'";
        $result = mysqli_query($connection, $query);
        if (!$connection) {
            die("Database Connection Failed");
        }
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    // To prevent duplicate email
    public function emailExists($email): bool
    {
        global $connection;

        $query = "SELECT email FROM users WHERE email = '$email'";
        $result = mysqli_query($connection, $query);
        if (!$connection) {
            die("Database Connection Failed");
        }
        if (mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //  Register New User
    public function registerUser($username, $email, $password): void
    {
        global $connection;
        $username = mysqli_real_escape_string($connection, $username);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);

        // password encryption
        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 10));

        // CREATE Registration Query
        $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
        $register_user_query = mysqli_query($connection, $query);
        if (!$register_user_query) {
            die('Query Failed');
        }
    }
}

$register = new RegisterController;
