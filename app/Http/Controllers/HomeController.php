<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontpage.home');
    }
    public function store(Request $request)
    {
        $input = $request->except("_token");
        // dd($input);
        // a = first term, b = difference between term, n = term of n
        $a = $input["a"];
        $b = $input["b"];
        $n = $input["n"];
        $tmp = $a + $b;
        $result = [$a];
        $un = 0;
        for ($i = 1; $i < $n; $i++) {
            $un = $a + ($n - 1) * $b;
            $result[$i] = $tmp;
            $tmp = $tmp + $b;
        }
        // dd($limit);
        return view('frontpage.result', compact(['result']));
    }
}
