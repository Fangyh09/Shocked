<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    public function getComment(Request $request) {
        if ($request->isMethod('POST')) {
            $data = $request->input('Comments');
            $name = $data['name'];
        }

        return view('detail',
            [
                'name' => $name
            ]);
    }
}

















