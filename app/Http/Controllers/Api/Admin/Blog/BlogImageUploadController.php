<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class BlogImageUploadController extends Controller
{
    public function blog(Request $request)
    {
        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('uploads', 'blog')
            ->useHashForFilename()
            ->upload()->id;

        if ($request->image != null) {
            $blog = Blog::findOrFail($request->image);
            $blog->syncMedia($media, 'blog');
        }

        return response()->json(
            [
                'type' => 'success',
                'text' => 'Upload Successful',
                'title' => 'Success',
                'media' => $media,
            ],
            200
        );
    }

    public function upload(Request $request)
    {
        $fileName = time().'.'.$request->file->extension();
        $request->file->move(base_path('public_html/uploads'), $fileName);

        // $img = Image::make(public_path('uploads/' . $fileName))
        //     ->insert(public_path('WATERMARK.png'), 'bottom-right', 10, 10)
        //     ->save(public_path('uploads/' . $fileName));

        return response()->json(['location' => '/uploads/'.$fileName]);
    }
}
