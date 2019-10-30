<?php

declare(strict_types=1);

require __DIR__ . '/header.php';

usort($posts, "sortFunction");

?>

<body>
    <nav>
        <img src="logo.png" class=logo alt="">
    </nav>
    <?php foreach ($posts as $post) : ?>

        <article>
            <h1 class="title"><?php echo $post['title']; ?> </h1>
            <p class="publishDate"><?php echo 'Published: ' . $post['published']; ?> <p>
                    <p><?php echo $post['content']; ?> </p>
                    <p><img class="thumbsUp" src="thumbs.png"> <?php echo $post['likes']; ?> people has liked this post. </p>
                    <div class="footnote">
                        <img class="authorPic" src="<?php echo getAuthorPic($post['authorId'], $authors) ?> ">
                        <div class="authorInfo">
                            <div class="authorName"> <?php echo getAuthor($post['authorId'], $authors)  ?></div>
                            <div class="authorMail"><a href="mailto:<?php echo getAuthorMail($post['authorId'], $authors)  ?>"><?php echo getAuthorMail($post['authorId'], $authors)  ?></a> </div>
                        </div>
                    </div>
        </article>

    <?php endforeach; ?>

</body>



<?php
require __DIR__ . '/footer.php';
