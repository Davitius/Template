<?php

namespace App\Http\Controllers\CP\Palette;

use App\Http\Controllers\Controller;
use App\Http\Requests\Palette\BackgroundRequest;
use App\Http\Requests\Palette\MenuUpdateRequest;
use App\Models\palette;
use Illuminate\Http\Request;

class MenuUpdateController extends Controller
{
    public function update(MenuUpdateRequest $request, $language) {
        $data = $request->validated();

        $menu = palette::find(2);
        $menu->update($data);
//dd($language);

        return redirect()->route('Palette', $language);
    }
}
