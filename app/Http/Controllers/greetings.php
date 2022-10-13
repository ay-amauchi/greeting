<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greetings extends Controller
{
    public function greeting($element)
    {
        switch ($element) {
            case 'morning':
                $title = '朝のあいさつ';
                $comment = 'おはようございます';
                break;
            case 'afternoon':
                $title = '昼のあいさつ';
                $comment = 'こんにちは';
                break;
            case 'evening':
                $title = '夕方のあいさつ';
                $comment = 'こんばんは';
                break;
            case 'night':
                $title = '夜のあいさつ';
                $comment = 'おやすみ';
                break;
            case 'random';
                $title = 'ランダムなメッセージ';
                $input = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
                $rand_key = array_rand($input, 1);
                $comment = $input[$rand_key];
                break;
        }
        return view('messages.greeting', ['title' => $title, 'comment' => $comment]);
    }

    public function freeword($msg)
    {
        return view('messages.freeword', ['msg' => $msg]);
    }
}
