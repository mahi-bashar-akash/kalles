<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class SpaController extends BaseController
{
    public function user()
    {
        return view('spa.user');
    }

    public function admin()
    {
        return view('spa.admin');
    }
}
