<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class GalleryUploadController extends Controller
{
    public function gallery(Request $request)
    {
        $gallery = Gallery::updateOrCreate(['group' => $request->group], []);

        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('uploads', 'gallery')
            ->useHashForFilename()
            ->upload()->id;

        $gallery->attachMedia($media, $request->group);

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
}
