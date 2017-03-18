<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getComment(Request $request) {
        $stories = null;
        if ($request->isMethod('POST')) {
            $data = $request->input('Comments');
            $name = $data['name'];
            if ($name) {
                $stories = Story::search($name);
            }

        }

        return view('detail',
            [
                'stories' => $stories
            ]);
    }

    public function search(Request $request) {
        if ($request->isMethod('POST')) {
            $data = $request->input();
        }
    }
}

















