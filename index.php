<?php require_once 'includes/header.php'; ?>       
        <!-- MAIN CONTAINER -->
        <div class="main-container">
            <main class="posts-box">
                <?php

                $last_five_posts = getHeadOfLastFivePosts($db);
                
                // If user is not logged in, show only post title and head
                if (!$logged_in) :
                    foreach($last_five_posts as $post) : ?>

                        <article>
                            <h2><?= $post['title']?></h2>
                            <p>Author: <?= $post['author']?></p>
                            <p>Category: <?= $post['category']?></p>
                            <p>Post Date: <?= $post['date']?></p>
                        </article>
                        <hr>

                    <?php endforeach;  ?>
                <?php else :
                        // If user is logged in, show also a snippet and a link to the post
                        foreach($last_five_posts as $post) : ?>
                        
                        <article>
                            <h2><?= $post['title']?></h2>
                            <p><?= $post['body']?></p>
                            <p>Author: <?= $post['author']?></p>
                            <p>Category: <?= $post['category']?></p>
                            <p>Post Date: <?= $post['date']?></p>
                        </article>
                        <hr>

                    <?php endforeach;  ?>
                <?php endif; ?>
            </main>  
            <!-- SIDEBAR (RIGHT) -->
            <?php if(!$logged_in) : ?>
                <aside class='sidebar-right'>
                    <p>You need to be a <a href='./views/register.view.php'>registered</a> user in order to view the content.</p>
                </aside>";
            <?php endif; ?>
        
<?php require_once 'includes/footer.php'; ?>