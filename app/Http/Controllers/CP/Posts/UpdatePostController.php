<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\NewPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdatePostController extends Controller
{
    public function update(NewPostRequest $request, $language, $type, $id)
    {


        $data = $request->validated();
//        dd($type);


        $post = Post::find($id);

        if ($request->file('image') != '') {
            $image = $post->image;
            if ($image != '') {
                if (Storage::disk('public')->exists($image)) {
                    Storage::disk('public')->delete($image);
                }
            }
            $data['image'] = Storage::disk('public')->put($type, $request->file('image'));
        }

        $post->update($data);


        return redirect()->route('CpPosts', $language);
    }
}
