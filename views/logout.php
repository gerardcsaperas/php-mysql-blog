<?php

require_once '../includes/register_login_header.php';

session_unset();

session_destroy(); ?>

<div class="register-login-form-container">
<p>Logged out successfully.</p><br>
<p>You are now being redirected to the homepage.</p>
</div>

<?php

header( "Refresh:5; ../index.php", true, 303);

require_once '../includes/footer.php';

