<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'title'         => 'My Design',
            'background'    => 'bg3',
            'navbar1'        => true
        ];

        return view('gallery/index', $data);
    }
}
