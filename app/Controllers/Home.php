<?php

namespace App\Controllers;

class Home extends BaseController
{
    // admin
    public function index()
    {
        return view('layout/index');
    }

    public function create()
    {
        return view('dashboard/index');
    }

}
