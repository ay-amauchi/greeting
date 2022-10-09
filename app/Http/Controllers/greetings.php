<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greetings extends Controller
{
    public function morning()
    {
        $time = '朝';
        $greeting = 'おはようございます';
        return view('messages.greeting', ['time' => $time, 'greeting' => $greeting]);
    }

    public function afternoon()
    {
        $time = '昼';
        $greeting = 'こんにちは';
        return view('messages.greeting', ['time' => $time, 'greeting' => $greeting]);
    }
    public function evening()
    {
        $time = '夕方';
        $greeting = 'こんばんは';
        return view('messages.greeting', ['time' => $time, 'greeting' => $greeting]);
    }
    public function night()
    {
        $time = '夜';
        $greeting = 'おやすみ';
        return view('messages.greeting', ['time' => $time, 'greeting' => $greeting]);
    }

    public function freeword($msg)
    {
        return view('messages.freeword', ['msg' => $msg]);
    }

    public function random()
    {
        $input = array("おはよう", "こんにちは", "こんばんは", "おやすみ");
        $rand_key = array_rand($input, 1);
        $msg = $input[$rand_key];
        return view('messages.random', ['msg' => $msg]);
    }
}
