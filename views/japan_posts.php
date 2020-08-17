<?php

require_once '../includes/register_login_header.php';

if ($logged_in) : ?>

<div>

<?php

// Query database to retrieve Japan's posts
getPostsByCategory($db, 1);


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


