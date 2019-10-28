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
 * 
 */

function getAuthorPic(int $authorId, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['img'];
        }
    }
};
function getAuthorMail(int $authorId, array $authors): string
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['email'];
        }
    }
};

// nkodadaa

function sortFunction($a, $b)
{
    return strtotime($b['published']) <=> strtotime($a['published']);
};
