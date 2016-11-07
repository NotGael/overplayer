<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Show the application index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application info.
     *
     * @return \Illuminate\Http\Response
     */
    public function info(Request $request)
    {
        if ($request->has('username'))
        {
            $username = $request->input('username');

            $json = file_get_contents('https://owapi.net/api/v2/u/'. $username . '/stats/general?region=eu');
            $obj = json_decode($json);
        }
        return view('home', compact('obj'));
    }
}
