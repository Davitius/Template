<?php

namespace App\Http\Controllers\CP\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContaqtUpdateRequest;
use App\Http\Requests\Contact\LocationUpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class LocationUpdateController extends Controller
{
    public function update(LocationUpdateRequest $request, $language) {
        $data = $request->validated();

        $contact = Contact::find(2);

        $contact->update($data);
//dd($language);

        return redirect()->route('CpContact', $language);
    }
}
