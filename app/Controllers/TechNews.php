<?php

namespace App\Controllers;

class TechNews extends BaseController {

    public function index()
    {
        $data = [
            'page_title' => 'Beranda | ReTechno'
        ];
        return view('index', $data);
    }

    public function readP0()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-0', $data);
    }

    public function readP1()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-1', $data);
    }

    public function readP2()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-2', $data);
    }

    public function readP25()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-2-5', $data);
    }

    public function readP3()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-3', $data);
    }

    public function readP4()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-4', $data);
    }

    public function readP5()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-5', $data);
    }

    public function readP6()
    {
        $data = [
            'page_title' => 'Halaman Konteks',
        ];

        return view('pages/read-more-6', $data);
    }
}
