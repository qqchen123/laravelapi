<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/1/30
 * Time: 2:15 PM
 */

namespace App\Transfomer;

use App\Transfomer;

class LessonTransformer extends Transfomer
{
	/**
	 * @param $data
	 * @return array|mixed
	 */
    public function transform($data)
    {
        return [
            'title'   => $data['title'],
            'content' => $data['body'],
            'is_free' => (boolean)$data['free'],
        ];
    }
}
