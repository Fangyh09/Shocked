<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Url;
use App\Http\Requests;

class MainController extends Controller
{
    public function addData() {
        $str = file_get_contents(asset('stories_cleaned2w.json'));
        $json = json_decode($str, true);
        $len = count($json);

        for ($x = 0;$x < $len;$x ++) {
             $myurl = new Url();
             $myurl->urlId = $json[$x]['id'];
             $myurl->url = $json[$x]['url'];
             $myurl->save();
        }
        echo "finish";

    }
    public function getComment(Request $request) {
        $stories = Story::first();
        $name = "guess it";
		$url = new Url();
		$out = "origin";
        if ($request->isMethod('POST')) {
            $data = $request->input('Comments');
            $name = $data['name'];
            if ($name) {
                $stories = Story::search($name);
               // $stories = Story::searchByQuery(array('match' => array('title' => $name)));
//                $stories = Story::searchByQuery([
//                    'multi_match'=> [
//                        'query' => $name,
//                        'fields' => ["title","text"]
//                    ],
//                ]);
               // $stories = Story::searchByQuery(['match' => ['title' => $data]]);
            }
			else {
				$stories = Story::first();
				$name = "guess it";
			}

        }
		$out = shell_exec('cd /home/yinghong/project/char-rnn/  &&  th sample.lua cv/lm_lstm_epoch3.64_1.1531.t7 -length 500');
		if (!$stories) {
			$stories = Story::first();
			$name = "guess it";
		}
        return view('tmp',
            [
				'out' => $out,
                'stories' => $stories,
                'name' => $name,
				'url' => $url
            ]);
    }

    public function search(Request $request) {
        if ($request->isMethod('POST')) {
            $data = $request->input();
        }
    }
}

















