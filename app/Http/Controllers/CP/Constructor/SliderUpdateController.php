<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\HeaderUpdateRequest;
use App\Http\Requests\Constructor\SliderUpdateRequest;
use App\Models\Constructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderUpdateController extends Controller
{
    public function update(SliderUpdateRequest $request, $language, $id)
    {
        $data = $request->validated();
        $constructor = Constructor::find($id);

        if ($request->file('image') != '') {
            $slider = $constructor->image;
            if (Storage::disk('public')->exists($slider)) {
                Storage::disk('public')->delete($slider);
            }
            $data['image'] = Storage::disk('public')->put('Constructor/Slider', $request->file('image'));
        }

        $constructor->update($data);

        return  redirect()->route('Constructor', $language,);
    }
}
