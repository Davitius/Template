<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\NewPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddPostController extends Controller
{
    public function create(NewPostRequest $request, $language) {


        $data = $request->validated();


        if ($request->file('image') != '') {
            $data['image'] = Storage::disk('public')->put($data['type'], $request->file('image'));
        }


        Post::create($data);


        return redirect()->route('CpPosts', $language);
    }
}
