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
