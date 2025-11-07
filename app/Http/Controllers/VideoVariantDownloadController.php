<?php

namespace App\Http\Controllers;

use App\Models\VideoVariant;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

final class VideoVariantDownloadController extends Controller
{
    public function __invoke(VideoVariant $variant)
    {
        Gate::authorize('download', [$variant]);

        return Storage::download($variant->path);
    }
}
