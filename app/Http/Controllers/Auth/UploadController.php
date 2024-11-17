<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class UploadController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $media = MediaUploader::fromSource($request->file)
            ->toDestination('identity', 'identity')
            ->useHashForFilename()
            ->onDuplicateUpdate()
            ->upload();

        return $media->id;
        // auth()->user()->syncMedia($media, 'avatar');
    }
}
