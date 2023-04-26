<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\UsefullinksRequest;
use App\Models\Constructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsefullinksController extends Controller
{
    public function create(UsefullinksRequest $request, $language) {
        $data = $request->validated();

        $data['image'] = Storage::disk('public')->put('Constructor/UsefulLinks', $request->file('image'));

        Constructor::create($data);

        return  redirect()->route('Constructor', $language,);
    }


    public function delete($language, $id) {

        $constructor = Constructor::find($id);
        $file = $constructor->image;
            if (Storage::disk('public')->exists($file)) {
                Storage::disk('public')->delete($file);
            }

        $constructor->delete();

        return  redirect()->route('Constructor', $language,);
    }
}
