<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Url extends Model
{
    protected $table='urls';
	public $fillabel = ['urlId','url'];
	public function getUrlById($id) {
		$url = \DB::table('urls')->where('urlId',$id)->first();	
		if ($url) {
			return $url->url;
		}

		return "";
	}
}
