<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Elasticquent\ElasticquentTrait;
class Story extends Eloquent
{
	use ElasticquentTrait;
    protected $table = 'stories';
	public $fillable = ['storyId', 'time_ts', 'text', 'title', 'score'];
	protected $mappingProperties = array(
		'storyId' => [
			'type' => 'long',
		],
		'time_ts' => [
			'type' => 'string',
			'analyzer' => 'standard',
		],
		'text' => [
			'type' => 'string',
			'analyzer' => 'standard',
		],
		'title' => [
			'type' => 'string',
			'analyzer' => 'standard',
		],
		'score' => [
			'type' => 'long',
		]
	);
}
