<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\HeaderTypeRequest;
use App\Models\Constructor;
use Illuminate\Http\Request;

class HeaderTypeController extends Controller
{
    public function update(HeaderTypeRequest $request, $language) {
        $data = $request->validated();

        $constructor = Constructor::find(1);
        $constructor->update($data);


        return  redirect()->route('Constructor', $language);
    }
}
