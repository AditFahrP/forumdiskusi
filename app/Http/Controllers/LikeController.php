<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class LikeController extends Controller
{
    public function discussionsLike(string $discussionSlug) {
        // get discussion berdasarkan slug dari parameter
        // like discussion dengann model tadi
        // return json
        // isi jsonnya adalah likeCount / total semua like dari discussion tab
        
        $discussion = Discussion::where('slug', $discussionSlug)->first();

        $discussion->like();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $discussion->likeCount,
            ],
        ]);
    }

    public function discussionsUnlike(string $discussionSlug) {
        // get discussion berdasarkan slug dari parameter
        // like discussion dengann model tadi
        // return json
        // isi jsonnya adalah likeCount / total semua like dari discussion tab
        
        $discussion = Discussion::where('slug', $discussionSlug)->first();

        $discussion->unlike();

        return response()->json([
            'status' => 'success',
            'data' => [
                'likeCount' => $discussion->likeCount,
            ],
        ]);
    }
}
