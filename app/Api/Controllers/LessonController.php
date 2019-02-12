<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/2/1
 * Time: 4:17 PM
 */

namespace App\Api\Controllers;


use App\Api\Transformer\LessonTransformer;
use App\Lesson;

class LessonController extends BaseController {
	public function index()
	{
		return Lesson::all();
	}

	public function show($id)
	{
		$lesson = Lesson::find($id);
		if (!$lesson){
			return $this->response->errorNotFound('lesson not found');
		}
		return $this->item($lesson,new LessonTransformer());
	}
}