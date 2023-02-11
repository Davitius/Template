<?php

namespace App\Http\Controllers\Ebout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EboutController extends Controller
{
    public function index()
    {
        return view('Ebout.ebout');
    }
}
