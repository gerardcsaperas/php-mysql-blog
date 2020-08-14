<?php require_once './includes/header.php';

$greetings = [
    "Blogging again, huh, $username ?",
    "What's up $username?",
    "Good to see ya, $username",
    "Everything's good, $username?",
    "Hey $username, you should squat more...",
    "Yo $username... do you even lift?"
]

?>    
<div class="user-control-panel-container">
    <h1><?= $greetings[array_rand($greetings, 1)] ?></h1>
    <button>Create new post</button>
</div>


<?php require_once './includes/footer.php'; ?>

