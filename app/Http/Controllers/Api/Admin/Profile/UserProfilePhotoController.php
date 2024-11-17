<?php

namespace App\Http\Controllers\Api\Admin\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Plank\Mediable\Facades\MediaUploader;
use Symfony\Component\HttpFoundation\Response;

class UserProfilePhotoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ($request->new_upload) {
            $image = $request->avatar;
            $name = str()->uuid().'.jpg';
            $img = Image::make($image);
            Storage::disk('temp')->put($name, $img->encode());

            $media = MediaUploader::fromSource(base_path().'/public_html/temp/'.$name)
                ->toDestination('avatar', 'avatar')
                ->useHashForFilename()
                ->onDuplicateUpdate()
                ->upload();

            auth()->user()->syncMedia($media, 'avatar');
        }

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
