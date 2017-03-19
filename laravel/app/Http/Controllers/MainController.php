<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class MainController extends Controller
{
    public function addData() {
		echo "begin loading";
		$str = file_get_contents(asset("stories_cleaned2w.json"));
		echo "fini loading";
        $json = json_decode($str, true);
        $len = count($json);
		
        for ($x = 0;$x < $len;$x ++) {
             $story = new Story();
             $story->storyId = $json[$x]['id'];
             $story->time_ts = $json[$x]['time_ts'];
             $story->text = $json[$x]['text'];
             $story->title = $json[$x]['title'];
             $story->score = $json[$x]['score'];
             $story->save();
			 if ($x == 0) {
				echo "begin";
			 }
			 if ($x % 1000 == 0) {
				echo $x;
			 }
        }
		echo "finish";
    }
    public function getComment(Request $request) {
        $stories = null;
        $name = "123";
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

        }

        return view('detail',
            [
                'stories' => $stories,
                'name' => $name
            ]);
    }

    public function search(Request $request) {
        if ($request->isMethod('POST')) {
            $data = $request->input();
        }
    }
}

















