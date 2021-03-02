<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    public  function add()
    {
        for ($i = 1; $i < 414; $i++) {
            Box::create([
                'name' => 'Box'.$i
            ]);
        }

    }

    public function test()
    {
        $boxes = Box::all();
        return view ('test2', compact('boxes'));
    }

    public function test2()
    {
        $box = Box::where('id', '3')->first();
//        dd($box);
        return view ('test2', compact('box'));
    }
}
