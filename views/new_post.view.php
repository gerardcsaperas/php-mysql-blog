<?php require_once '../includes/register_login_header.php'; ?>

<div class="blog-post-box">
<form action="<?php echo htmlspecialchars('register.php');?>" method="POST" enctype="multipart/form-data">
    <label for="title">Post Title</label><br>
    <input type="text" name="title" required><br>
    
    <textarea></textarea><br>
    <div class="category-selector-box">
        <p>Select your post's category:</p>
        <div class="category-selector-box__group">
            <input type="radio" id="japan" name="category" value="japan"
                   checked>
            <label for="japan">Japan</label>
            <input type="radio" id="fitness" name="category" value="fitness"
                   checked>
            <label for="fitness">Fitness</label>
            <input type="radio" id="web-dev" name="category" value="web-dev"
                   checked>
            <label for="web-dev">Web Dev</label>
            <input type="radio" id="Random" name="category" value="random"
                   checked>
            <label for="random">Random</label>
        </div>
    </div>
</form>
</div>

<?php require_once '../includes/footer.php'; ?>

