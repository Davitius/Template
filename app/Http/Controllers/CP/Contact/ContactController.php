<?php

namespace App\Http\Controllers\CP\Contact;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\Contact;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();

        $address = Contact::find(1);
        $location = Contact::find(2);

        return view('CP.contact', compact('language', 'array', 'address', 'location'));
    }
}
