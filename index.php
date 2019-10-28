<?php

declare(strict_types=1);

require __DIR__ . '/header.php';
usort($posts, "sortFunction");

?>

<body>
    <nav>
        <img src="logo.png" alt="">
        <div class="navButtons">
            <h1>Who we are </h1>
            <h1>Why we are</h1>
        </div>



    </nav>

    <main>
        <?php foreach ($posts as $post) : ?>

            <article>
                <h1 class="title"><?php echo $post['title']; ?> </h1>
                <p class="published"><?php echo 'Published: ' . $post['published']; ?> <p>
                        <!-- <img class="articlePic" src="<?php echo $post['articlePic']; ?>" alt=""> -->

                        <p><?php echo $post['content']; ?> </p>
                        <p><img class="thumbsUp" src="thumbs.png" alt=""><?php echo ' ' . $post['likes']; ?> </p>
                        <div class="footnote">
                            <img class="authorPic" src="<?php echo getAuthorPic($post['authorId'], $authors) ?> ">
                            <div class="authorInfo">
                                <div class="authorName"> <?php echo getAuthor($post['authorId'], $authors)  ?></div>

                                <div class="authorMail"><a href="mailto:<?php echo getAuthorMail($post['authorId'], $authors)  ?>"><?php echo getAuthorMail($post['authorId'], $authors)  ?></a> </div>
                            </div>

                        </div>
            </article>

        <?php endforeach; ?>


    </main>
</body>



<?php
require __DIR__ . '/footer.php';
