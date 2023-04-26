<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ConstructorController extends Controller
{
    public function index($language)
    {
        $this->authorize('view', auth()->user());

        App::setlocale($language);

        //        პალიტრა
        $sliders = DB::table('constructors')->where('id', '>', '1')->where('id', '<', '5')->get();
        $ULImages = DB::table('constructors')->where('id', '>', '20')->orderBy('type')->paginate(5);
        $array = $this->palette();


        return view('CP.constructor', compact('language', 'array', 'sliders', 'ULImages'));
    }
}
