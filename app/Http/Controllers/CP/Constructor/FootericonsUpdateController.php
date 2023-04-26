<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\FootericonsUpdateRequest;
use App\Http\Requests\Constructor\FooterwordsUpdateRequest;
use App\Models\Constructor;
use Illuminate\Http\Request;

class FootericonsUpdateController extends Controller
{
    public function update(FootericonsUpdateRequest $request, $language, $id) {

        $data = $request->validated();
        if (!isset($data['visible'])) {
            $data['visible'] = 'none';
        }
        $constructor = Constructor::find($id);


        $constructor->update($data);

        return  redirect()->route('Constructor', $language);
    }
}
