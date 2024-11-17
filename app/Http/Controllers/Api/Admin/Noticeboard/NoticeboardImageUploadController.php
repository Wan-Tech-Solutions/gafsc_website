<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Noticeboard;

use App\Http\Controllers\Controller;
use App\Models\Noticeboard;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class NoticeboardImageUploadController extends Controller
{
    public function noticeboard(Request $request)
    {
        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('uploads', 'noticeboard')
            ->useHashForFilename()
            ->upload()->id;

        if ($request->image != null) {
            $noticeboard = Noticeboard::findOrFail($request->image);
            $noticeboard->syncMedia($media, 'noticeboard');
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
