<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tweet;
use App\Services\TweetService;

class IndexController extends Controller
{
    private $tweetService;

    public function __construct(TweetService $tweetService)
    {
        $this->tweetService = $tweetService;
    }
    public function __invoke()
    {
        $tweets = $this->tweetService->getTweets();
        // dump($tweets);
        // app(\App\Exceptions\Handler::class)->render(request(), throw new \Error('dump report.'));
        
        return view('tweet.index', compact('tweets'))
                ->with('name', 'laravel')
                ->with('version', '10');
    }
}
