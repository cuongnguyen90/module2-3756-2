<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransController extends Controller
{
    public function getContent()
    {
        return view('form');
    }
    public function postContent(Request $req)
    {
        $arr = [
            'house'=>'ngôi nhà',
            'horse'=>'con ngua',
            'chicken'=>'con ga',
            'pig'=>'con lon',
            'cat'=>'con meo'

        ];
        foreach ($arr as $key => $value){
            $keyword = $req->keyword;
            if ($keyword  == $key ){
                return view('form',compact('value','keyword'));
            }
            return view('form');
        }
    }
}
