<?php

declare(strict_types=1);

/**
 * getAuthor checks if ID in the array named author is identical to to authorID in array posts. If so, it returns name from array named author. 
 *
 * @param int $authorId
 * @param string $authors
 * @return string
 */
function getAuthor(int $authorId, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['name'];
        }
    }
};

/**
 * getAuthorPic checks if ID in the array named author is identical to to authorID in array posts. If so, it returns image from array named author. 
 *
 * @param integer $authorId
 * @param array $authors
 * @return string
 */
function getAuthorPic(int $authorId, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['image'];
        }
    }
};


/**
 * * getAuthorMail checks if ID in the array named author is identical to to authorID in array posts. If so, it returns email from array named author. 
 *
 * @param integer $authorId
 * @param array $authors
 * @return string
 */
function getAuthorMail(int $authorId, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['email'];
        }
    }
};


/**
 * Sorts array by date using value in "published"
 *
 * @param integer $a
 * @param integer $b
 * @return mixed
 */
function sortFunction($a, $b)
{
    return strtotime($b['published']) <=> strtotime($a['published']);
};
