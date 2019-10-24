<?php

require __DIR__.'/header.php'; ?>


<body>
    <nav>
        <h1>FAKE NEWS</h1>
    </nav>
    <main>
       


        <?php foreach ($posts as $post) : ?>
        <article>
        <h1><?php echo $post['title']; ?> </h1>
        <h3><?php echo 'Written by '. getAuthor()?> </h3>
        <p><?php echo 'Published: '. $post['published']; ?> <p>
        <p><?php echo $post['content']; ?> </p> 
        <p><?php echo 'Likes: '. $post['likes']; ?> </p>
        </article>
        <?php endforeach; ?>

       

    </main>
</body>



<?php
require __DIR__.'/footer.php'; 