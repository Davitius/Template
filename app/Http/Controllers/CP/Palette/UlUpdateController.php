<?php

namespace App\Http\Controllers\CP\Palette;

use App\Http\Controllers\Controller;
use App\Http\Requests\Palette\MenuUpdateRequest;
use App\Http\Requests\Palette\UlUpdateRequest;
use App\Models\palette;
use Illuminate\Http\Request;

class UlUpdateController extends Controller
{
    public function update(UlUpdateRequest $request, $language, $N) {
//        dd($N);
        $data = $request->validated();
        if (!isset($data['visible'])) {
            $data['visible'] = 'none';
        }

        $Ul = palette::find(8+$N);

        $Ul->update($data);

        return redirect()->route('Palette', $language);
    }
}
