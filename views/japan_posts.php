<?php

require_once '../includes/register_login_header.php';

if ($logged_in) : ?>

<div>

<?php

// Query database to retrieve Japan's posts
    $select_japan = "SELECT * FROM posts WHERE category_id = 1";

    $japan_posts = mysqli_query($db, $select_japan);

    // If posts queried correctly...Else...
    if($japan_posts) {
        var_dump($japan_posts);
        die();
    } else {
        if (mysqli_error($db) === "Duplicate entry '$title' for key 'post_title'") {
            echo "<p>Duplicate post title, please go back<br>in order to change it.</p>";
        } else {
        echo "<p>Error" . mysqli_error($db) . "</p>";
        }
    }


// If a non-logged in user tries to read...
else : 
    
    echo "<p>You need to be a <a href='register.view.php'>registered</a> user in order to read posts</p>"
        ."<br>"
        ."<p>If you already have an account, <a href='login.view.php'>log in</a></p>";
        
endif; ?>
    
</div>

<?php
// Render Footer
require_once '../includes/footer.php'; 


