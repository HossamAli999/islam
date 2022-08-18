<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function reference()
    {
        $quran = Http::get('https://api.quran.com/api/v4/chapters?language=en')->json();
        $quran1 = Http::get('https://api.quran.com/api/v4/chapter_recitations/1?language=en')->json();
        return view('pages.reference',['quran' => $quran
        ,'quran1' => $quran1]);
    }
    
    public function listen()
    {
        $quran = Http::get('https://api.quran.com/api/v4/chapter_recitations/1?language=en')->json();
        return view('pages.listen',['quran' => $quran]);
    }
}
