<?php

function getHeadOfLastFivePosts($db) {
    // Create query to get title of the 5 last added posts
    // 
    // Tip: do not forget adding a space after every string if you concatenate on multiple lines
    // otherwise, query will be empty.
    $query =  "SELECT  post_title, post_date, post_body, username as author, category_name as category "
            . "FROM posts "
            . "LEFT JOIN users "
            . "ON posts.user_id = users.id "
            . "LEFT JOIN categories "
            . "ON posts.category_id = categories.id "
            . "ORDER BY post_date DESC "
            . "LIMIT 5";

    // Execute query
    $last_posts = mysqli_query($db, $query);

    // If the query succeeds, return row's name
    if ($last_posts->num_rows > 0) {
        $last_five_posts = [];
        // Output data of each row
        while($row = $last_posts->fetch_assoc()) {
            // Push the data to be shown for every post
            array_push(
                    $last_five_posts,
                    array(
                        "title"=>$row['post_title'],
                        "body"=>$row['post_body'],
                        "author"=>$row['author'],
                        "category"=>$row['category'],
                        "date"=>$row['post_date'])
                    );
        }
        // Return last five posts' titles array
        return $last_five_posts;
    }
}

function getPostsByCategory($db, $category) {
    // Create query to get title of the posts by category
    // 
    // Tip: do not forget adding a space after every string if you concatenate on multiple lines
    // otherwise, query will be empty.
    $query =  "SELECT posts.post_title, posts.post_body, posts.post_date, users.username, categories.category_name "
            . "FROM posts "
            . "LEFT JOIN users on posts.user_id = users.id "
            . "LEFT JOIN categories on posts.category_id = categories.id "
            . "WHERE category_id = $category";

    // Execute query
    $posts = mysqli_query($db, $query);

    // If the query succeeds...
    if ($posts->num_rows > 0) {
        // For each row, render HTML
        while($post = $posts->fetch_assoc()) : ?>
            <article>
                <h2><a id="post-link" href="single_post.php?title=<?=$post['post_title'] ?>"><?= $post['post_title'] ?></a></h2>
                <p><?= substr($post['post_body'], 0, 30) ?></p>
                <p>Author: <?= $post['username'] ?></p>
                <p>Category: <?= $post['category_name'] ?></p>
                <p>Post Date: <?= $post['post_date'] ?></p>
            </article>
            <hr>
            
        <?php endwhile;
    }
}

function getSinglePost($db) {
    // GET $post_title from header
    $post_title = $_GET['title'];
    
    // Create query to get a single post by $post_title
    // 
    // Tip: do not forget adding a space after every string if you concatenate on multiple lines
    // otherwise, query will be empty.
    $query =  "SELECT posts.post_title, posts.post_body, posts.post_date, users.username, categories.category_name "
            . "FROM posts "
            . "LEFT JOIN users on posts.user_id = users.id "
            . "LEFT JOIN categories on posts.category_id = categories.id "
            . "WHERE post_title = '$post_title'";

    // Execute query
    $posts = mysqli_query($db, $query);

    // If the query succeeds...
    if ($posts->num_rows > 0) {
        // For each row, render HTML
        while($post = $posts->fetch_assoc()) : ?>
            
                <h2 class="single-post-container__title"><?= $post['post_title'] ?></h2>
                <p id="single-post-container__post-details">Post by <?= $post['username'] ?>. <?= $post['category_name'] ?>, <?= $post['post_date'] ?></p>
                <p class="single-post-container__body"><?= $post['post_body'] ?></p>     
        <?php endwhile;
    }
}