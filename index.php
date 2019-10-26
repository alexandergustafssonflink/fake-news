<?php

require __DIR__ . '/header.php';
usort($posts, "sortFunction");

?>

<body>
    <nav>
        <h1>FAKE NEWS</h1>
    </nav>

    <main>
        <?php foreach ($posts as $post) : ?>
            <article>
                <h1><?php echo $post['title']; ?> </h1>
                <h3>Written by: <?php echo getAuthor($post['authorId'], $authors)  ?> </h3>
                <p><?php echo 'Published: ' . $post['published']; ?> <p>
                        <img src="<?php echo getAuthorPic($post['authorId'], $authors) ?> ">
                        <p><?php echo $post['content']; ?> </p>
                        <p><?php echo 'Likes: ' . $post['likes']; ?> </p>
            </article>
        <?php endforeach; ?>


    </main>
</body>



<?php
require __DIR__ . '/footer.php';
