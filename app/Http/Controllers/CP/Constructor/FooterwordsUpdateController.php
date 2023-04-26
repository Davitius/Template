<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Constructor\FooterwordsUpdateRequest;
use App\Models\Constructor;
use Illuminate\Http\Request;

class FooterwordsUpdateController extends Controller
{
    public function update(FooterwordsUpdateRequest $request, $language, $id) {

        $data = $request->validated();
        if (!isset($data['visible'])) {
            $data['visible'] = 'none';
        }
        $constructor = Constructor::find($id);


        $constructor->update($data);

        return  redirect()->route('Constructor', $language);
    }
}
