<?php

declare(strict_types=1);


$authors = [

    [
        'id' => 1,
        'name' => 'Conny Mejsel',
        'email' => 'Conny.Mejsel@dailyfejk.se',
        'image' => 'http://www.gbgwrestling.com/wp-content/uploads/2016/06/Conny.jpg'
    ],

    [
        'id' => 2,
        'name' => 'Stefan Ingves',
        'email' => 'Stefan.Ingves@dailyfejk.se',
        'image' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fdefria.se%2Fwp-content%2Fuploads%2F2019%2F05%2FStefan-Ingves-guldt%25C3%25A4nder-wide.jpg&f=1&nofb=1'
    ],

    [
        'id' => 3,
        'name' => 'Lasse Kronér',
        'email' => 'Lasse.Kroner@dailyfejk.se',
        'image' => 'https://z.cdn-expressen.se/images/47/96/4796c4d19dcd03590fd198425552bcdf/680.jpg'
    ],

    [
        'id' => 4,
        'name' => 'Miss Marple',
        'email' => 'Miss.Marple@dailyfejk.se',
        'image' => 'https://iwatchstuff.com/2015/10/07/miss-marple.jpg'
    ],

    [
        'id' => 5,
        'name' => 'Batman',
        'email' => 'Batman@dailyfejk.se',
        'image' => 'https://www.pngkey.com/png/detail/17-179316_pix-funny-pictures-batman-funny-face-png.png'
    ]
];




$posts = [

    [
        'title' => 'Endast två som åkt vasaloppet i år',
        'authorId' => 1,
        'content' => file_get_contents('./articles/lorem1.txt'),
        'published' => '2019-09-05',
        'likes' => '84',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Tant tvingade hund bära cardigan',
        'authorId' => 1,
        'content' => file_get_contents('./articles/lorem2.txt'),
        'published' => '2019-09-27',
        'likes' => '34',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Leif har gått ner 2 kilo på 2 år - så gör du det också!',
        'authorId' => 2,
        'content' => file_get_contents('./articles/lorem3.txt'),
        'published' => '2019-09-23',
        'likes' => '1337',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Kalle och chokladfabriken blir djungelfestival',
        'authorId' => 2,
        'content' => file_get_contents('./articles/lorem4.txt'),
        'published' => '2019-09-13',
        'likes' => '782',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Pokemonen Charizard ger ut självbiografi - på norska',
        'authorId' => 3,
        'content' => file_get_contents('./articles/lorem5.txt'),
        'published' => '2019-09-03',
        'likes' => '333',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Livet är underbart, när alla sover - Ny bok av Gunde Svahn',
        'authorId' => 3,
        'content' => file_get_contents('./articles/lorem6.txt'),
        'published' => '2019-09-03',
        'likes' => '666',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Succé för Dreamhack - Sanyang noodles blir officiell sponsor',
        'authorId' => 4,
        'content' =>  file_get_contents('./articles/lorem7.txt'),
        'published' => '2019-10-26',
        'likes' => '1',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Patagonia öppnar lergöksfabrik i Eskilstuna - vill locka fler att testa på, enligt VD',
        'authorId' => 4,
        'content' => file_get_contents('./articles/lorem8.txt'),
        'published' => '2019-08-20',
        'likes' => '3',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],
    [
        'title' => "Anette Karlsson (C): \"Livet är enklare utan massa mås-sten\" - många bekymrade över det fågelrelaterade våldet",
        'authorId' => 5,
        'content' => file_get_contents('./articles/lorem9.txt'),
        'published' => '2019-08-12',
        'likes' => '52',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],

    [
        'title' => 'Skrällen! Ljungby BK till Champions League-final - I Softairgun',
        'authorId' => 5,
        'content' => file_get_contents('./articles/lorem9.txt'),
        'published' => '2019-08-03',
        'likes' => '101',
        'articlePic' => 'https://images.baxterboo.com/global/images/products/large/worthy-dog-fox-dog-cardigan-gray-6792.jpg'
    ],
];
