<?php

namespace App\Http\Controllers\CP;

use App\Http\Controllers\Controller;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PaletteController extends Controller
{
    public function index($language)
    {
        $this->authorize('view', auth()->user());

        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();

        return view('CP.palette', compact('language', 'array'));
    }
}
