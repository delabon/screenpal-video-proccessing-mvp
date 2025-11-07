<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VideoVariant;

final class VideoVariantPolicy
{
    public function download(User $user, VideoVariant $videoVariant): bool
    {
        return $user->id === $videoVariant->originalVideo->user_id;
    }
}
