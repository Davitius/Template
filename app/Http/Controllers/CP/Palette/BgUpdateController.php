<?php

namespace App\Http\Controllers\CP\Palette;

use App\Http\Controllers\Controller;
use App\Http\Requests\Palette\BackgroundRequest;
use App\Models\palette;
use Illuminate\Http\Request;

class BgUpdateController extends Controller
{
    public function update(BackgroundRequest $request, $language) {
        $data = $request->validated();

        $block = palette::find(1);
        $block->update($data);
//dd($language);

        return redirect()->route('Palette', $language);
    }
}
