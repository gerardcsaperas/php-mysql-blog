<?php
require_once '../includes/register_login_header.php';

if ($logged_in) : ?>

<div class="editor-post-box">
    
<?php
// If a POST request has been submitted...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Function to validate data from POST request
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    
    
    // Store the fata from the post request into a variable, validate and sanitize
    $title = isset($_POST['title']) ? test_input(filter_input(INPUT_POST, 'title')) : false;
    
    $body = isset($_POST['body']) ? test_input(filter_input(INPUT_POST, 'body')) : false;
    
    $category = isset($_POST['category']) ? test_input(filter_input(INPUT_POST, 'category')) : false;
    
    $user_id = $_SESSION['user']['id'];
    
    // Insert data from POST request into posts table
    $new_post = "INSERT INTO posts VALUES(NULL, '$user_id', '$category', '$title', '$body', CURDATE())";

    $insert_new_post = mysqli_query($db, $new_post);

    // If post inserted correctly...Else...
    if($insert_new_post) {
        echo "<p>New post uploaded successfully</p>";
    } else {
        if (mysqli_error($db) === "Duplicate entry '$title' for key 'post_title'") {
            echo "<p>Duplicate post title, please go back<br>in order to change it.</p>";
        } else {
        echo "<p>Error" . mysqli_error($db) . "</p>";
        }
    }
};

// If a non-logged in user tries to post...
else : 
    
    echo "<p>You need to be a <a href='register.view.php'>registered</a> user in order to write posts</p>"
        ."<br>"
        ."<p>If you already have an account, <a href='login.view.php'>log in</a></p>";
        
endif; ?>
    
</div>

<?php
// Render Footer
require_once '../includes/footer.php';    
