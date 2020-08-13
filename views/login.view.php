<?php require_once '../includes/register_login_header.php'; ?>
<h1>User Login</h1>
<h2>You need to be logged in to be able to read the posts.</h2>
<form action="<?php echo htmlspecialchars('login.php');?>" method="POST" enctype="multipart/form-data">            
    <label for="email">Email</label><br>
    <input type="email" name="email" required autofocus /><br>
            
    <label for="password">Password</label><br>
    <input type="password" name="password" required pattern="[A-Za-z0-9]+" /><br>
            
    <input type="submit" value="Login">
</form>
        
<p>Not a user? <a href="register.view.php">Register</a> instead!</p>
</div>
        
<?php require_once '../includes/footer.php'; ?>
