<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class BannerUploadController extends Controller
{
    public function banner(Request $request)
    {
        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('uploads', 'banner')
            ->useHashForFilename()
            ->upload()->id;

        if ($request->banner != null) {
            $banner = Banner::findOrFail($request->banner);
            $banner->syncMedia($media, 'banner');
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
}
