<?php

class PostController
{
    // READ all posts
    public static function showAllPosts()
    {
        global $connection;

        $query = "SELECT * FROM posts ORDER BY id DESC";
        $selectAllPosts = mysqli_query($connection, $query);
        if (!$selectAllPosts) {
            die('Query Failed');
        }

        return $selectAllPosts;
    }

    // Get Post
    public static function getPost($post_id)
    {
        global $connection;

        $query = "SELECT * FROM posts WHERE id = $post_id";
        $selectPost = mysqli_query($connection, $query);
        if (!$selectPost) {
            die('Query Failed');
        }

        return $selectPost;
    }

    // Update Post
    public static function updatePost($post_id, $post_title, $post_content): void
    {
        global $connection;
        $query = "UPDATE posts SET post_title = '$post_title', post_content = '$post_content' WHERE id = $post_id";
        $update_post = mysqli_query($connection, $query);
        if (!$update_post) {
            die('Query Failed');
        }
    }

    // Create New Post
    public static function addPost($post_title, $post_content, $post_date): void
    {
        global $connection;

        $query = "INSERT INTO posts(post_title, post_content, post_date) VALUES ('$post_title', '$post_content', '$post_date')";

        $create_post_query = mysqli_query($connection, $query);
        if (!$create_post_query) {
            die('Query Failed');
        }
    }

    // Delete Post
    public static function deletePost($post_id): void
    {
        global $connection;

        $query = "DELETE FROM posts WHERE id = $post_id";
        $delete_post_query = mysqli_query($connection, $query);
        if (!$delete_post_query) {
            die('Query Failed');
        }
    }
}
