<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Admin\Download;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Plank\Mediable\Facades\MediaUploader;

class DownloadUploadController extends Controller
{
    public function download(Request $request)
    {
        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('uploads', 'download')
            ->useHashForFilename()
            ->upload()->id;

        if ($request->download != null) {
            $download = Download::findOrFail($request->download);
            $download->syncMedia($media, 'download');
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
