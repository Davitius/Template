<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\HeaderUpdateRequest;
use App\Models\Constructor;
//use App\Models\palette;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Route;

class HeaderUpdateController extends Controller
{
    public function update(HeaderUpdateRequest $request, $language)
    {
        $data = $request->validated();

        $constructor = Constructor::find(1);

        if ($request->file('image') != '') {
            $header = $constructor->image;
            if (Storage::disk('public')->exists($header)) {
                Storage::disk('public')->delete($header);
            }
            $data['image'] = Storage::disk('public')->put('Constructor/Header', $request->file('image'));
        }

        $constructor->update($data);

        return  redirect()->route('Constructor', $language);
    }
}
