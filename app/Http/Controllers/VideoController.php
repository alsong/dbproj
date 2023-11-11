<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //show all videos
    public function showAllVideos()
    {
        $videos = Video::all();

        return view('videos', [
            'videos' => $videos
        ]);
    }

}
