<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tweet;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tweetId = (int) $request->route('tweetId');
        $tweet = Tweet::find($tweetId);
        
        if(is_null($tweet)){
            throw new NotFoundHttpException('存在しないつぶやきです');
        }
       
        return view('tweet.show', compact('tweet'));

    }
}
