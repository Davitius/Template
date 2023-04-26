<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeletePostController extends Controller
{
    public function delete($language, $id) {

        $post = Post::find($id);
        if ($post->image != '') {
            if (Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }
        }
        $post->delete();


        return redirect()->route('CpPosts', $language);
    }
}
