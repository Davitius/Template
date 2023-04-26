<?php

namespace App\Http\Controllers\CP\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContaqtUpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUpdateController extends Controller
{
    public function update(ContaqtUpdateRequest $request, $language) {
        $data = $request->validated();

        $contact = Contact::find(1);

        $contact->update($data);
//dd($language);

        return redirect()->route('CpContact', $language);
    }
}
