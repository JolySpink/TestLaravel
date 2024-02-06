<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class PhotoFormController extends Controller
{
    public function index()
    {
        return view('form');
    }

}
