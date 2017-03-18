<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Elasticquent\ElasticquentTrait;
class Story extends Eloquent
{
	use ElasticquentTrait;
    protected $table = 'stories';
	public $fillable = ['storyId', 'time_ts', 'text', 'title', 'score'];
    protected $indexSettings = [
        'analysis' => [
            'char_filter' => [
                'replace' => [
                    'type' => 'mapping',
                    'mappings' => [
                        '&=> and '
                    ],
                ],

            ],
            'index_analyzer' => [
                'my_index_analyzer' => [
                    'type' => 'custome',
                    'tokenizer'=> 'standard',
                    'filter'=> [
                        'lowercase',
                        'mynGram'
                        ]
                ]
            ],
            'search_analyzer' => [
                'my_search_analyzer'=>[
                    'type' => 'custom',
                    'tokenizer' => 'standard',
                    'filter' => [
                        'standard',
                        'lowercase',
                        'mynGram'
                    ]
                ]
            ],
            'filter' => [
                'word_delimiter' => [
                    'type' => 'word_delimiter',
                    'split_on_numerics' => false,
                    'split_on_case_change' => true,
                    'generate_word_parts' => true,
                    'generate_number_parts' => true,
                    'catenate_all' => true,
                    'preserve_original' => true,
                    'catenate_numbers' => true,
                ],
                'mynGram' => [
                    'type' => 'nGram',
                    'min_gram' => 2,
                    'max_gram'=> 50
                ],
            ],
            'analyzer' => [
                'default' => [
                    'type' => 'custom',
                    'char_filter' => [
                        'html_strip',
                        'replace',
                    ],
                    'tokenizer' => 'whitespace',
                    'filter' => [
                        'lowercase',
                        'word_delimiter',
                    ],
                ],
            ],
        ],
    ];

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
