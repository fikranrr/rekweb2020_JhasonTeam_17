<?php

namespace App\Controllers;

class Views extends BaseController
{
    public function book()
    {
        $data = [
            'title' => 'Google Books Embedded Viewer API Example'
        ];
        return view('book', $data);
    }
}
