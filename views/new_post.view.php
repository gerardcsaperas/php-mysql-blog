<?php require_once '../includes/register_login_header.php';

if ($logged_in) : ?>
<div class="editor-post-box">
<form action="<?php echo htmlspecialchars('new_post.php');?>" method="POST" enctype="multipart/form-data">
    <label for="title">Post Title</label><br>
    <input id="title" type="text" name="title" required><br>
    
    <textarea name="body"></textarea><br>
    <div class="category-selector-box">
        <p class="category-selector-box__label-for-categories">Select your post's category:</p>
        <div class="category-selector-box__group">
            <input type="radio" id="japan" name="category" value="1">
            <label for="japan">Japan</label>
            
            <input type="radio" id="fitness" name="category" value="2">
            <label for="fitness">Fitness</label>
            
            <input type="radio" id="web-dev" name="category" value="3">
            <label for="web-dev">Web Dev</label>
            
            <input type="radio" id="Random" name="category" value="4" checked>
            <label for="random">Random</label>
        </div>
    </div>
    <input id="submit" type="submit" value="Submit Post" />
</form>
</div>
<?php else : ?>
<div class="editor-post-box">
<p>You need to be a <a href="register.view.php">registered</a> user in order to write posts</p>
<br>
<p>If you already have an account, <a href="login.view.php">log in</a></p>
</div>
<?php endif; ?>

<?php require_once '../includes/footer.php'; ?>

