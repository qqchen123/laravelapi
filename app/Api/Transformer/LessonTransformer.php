<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/2/1
 * Time: 4:24 PM
 */

namespace App\Api\Transformer;


use App\Lesson;
use League\Fractal\TransformerAbstract;

class LessonTransformer extends TransformerAbstract {
	public function transform(Lesson $lesson)
	{
		return [
			'title'   => $lesson['title'],
			'content' => $lesson['body'],
			'is_free' => (boolean)$lesson['free'],
		];
	}
}