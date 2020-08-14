<?php require_once '../includes/register_login_header.php'; ?>
<h1>Register Form</h1>
<h2>You need to be a registered user in order to read the posts.</h2>
<form action="<?php echo htmlspecialchars('register.php');?>" method="POST" enctype="multipart/form-data">
    <label for="username">Username</label><br>
    <input type="text" name="username" required autofocus pattern="[A-Za-z0-9]+" /><br>
            
    <label for="email">Email</label><br>
    <input type="email" name="email" required /><br>
            
    <label for="password">Password</label><br>
    <input type="password" name="password" minlength="8" pattern="[A-Za-z0-9]+" placeholder="8 characters or more..." required pattern="[A-Za-z0-9]+" /><br>
            
    <input type="submit" value="Register">
</form>

<p>Already a registered user? <a href="login.view.php">Login</a> instead!</p>
        
<?php
require_once '../includes/footer.php';                       
?>

