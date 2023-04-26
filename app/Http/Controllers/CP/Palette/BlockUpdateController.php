<?php

namespace App\Http\Controllers\CP\Palette;

use App\Http\Controllers\Controller;
use App\Http\Requests\Palette\BlockUpdateRequest;
use App\Http\Requests\Palette\UlUpdateRequest;
use App\Models\palette;
use Illuminate\Http\Request;

class BlockUpdateController extends Controller
{
    public function update(BlockUpdateRequest $request, $language, $i) {
        $data = $request->validated();

        if (!isset($data['visible'])) {
            $data['visible'] = 'none';
        }

        $id = $i+2;
        $block = palette::find($id);
        $block->update($data);


        return redirect()->route('Palette', $language);
    }
}
