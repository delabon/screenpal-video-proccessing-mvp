<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

final class VideoRepository
{
    public function userVideosCount(User $user): int
    {
        return Cache::remember('user_' . $user->id . '_videos_count', now()->addMonth(), function () use ($user) {
            return $user->videos()->count();
        });
    }
}
