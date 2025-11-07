<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\VideoVariant;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

final class DownloadController extends Controller
{
    public function variant(VideoVariant $variant)
    {
        Gate::authorize('download', [$variant]);

        return Storage::download($variant->path);
    }

    public function video(Video $video)
    {
        Gate::authorize('download', [$video]);

        return Storage::download($video->path);
    }
}
