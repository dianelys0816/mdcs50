<?php
require_once 'bootstrap.php';

function get_current_page ($current = null){

    if(is_null($current))
    {
        $current = $_SERVER['REQUEST_URI'];
    }
    if ($current == '/'){
        $current = '/index.php';
    };
    return $current;
}

function getCarousel ($id = null){
    $carousel = [

        '/about.php' => [
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide One',
                'caption' => 'DJ',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Two',
                'caption' => 'is',
            ],
            [
                'img_url' => 'http://placehold.it/1900x1080&text=Slide Three',
                'caption' => 'Awesome!',
            ],
        ],

        '/index.php' => [
            [
                'img_url' => 'http://10.10.10.100/imgs/rsz_2013-12-11_223447.jpg',
                'caption' => 'Caption 1',
            ],
            [
                'img_url' => 'http://10.10.10.100/imgs/rsz_indexone.jpg',
                'caption' => 'Caption 2',
            ],
            [
                'img_url' => 'http://10.10.10.100/imgs/rsz_up.jpg',
                'caption' => 'Caption 3',
            ],
        ],
    ];

    if (! $id)
    {
        return [];
    }

   if (!isset($carousel[$id]))
    {
        return [];
    }
      return $carousel[$id];
};