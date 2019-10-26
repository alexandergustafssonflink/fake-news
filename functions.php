<?php



function getAuthor($authorId, $authors)
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['name'];
        }
    }
};

function getAuthorPic($authorId, $authors)
{
    foreach ($authors as $author) {
        if ($author['id'] === $authorId) {
            return $author['img'];
        }
    }
};

// nkodadaa

function sortFunction($a, $b)
{
    return strtotime($b['published']) <=> strtotime($a['published']);
};
