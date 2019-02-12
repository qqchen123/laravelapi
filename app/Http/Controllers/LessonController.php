<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Transfomer\LessonTransformer;
use Illuminate\Http\Request;

class LessonController extends ApiController
{
    protected $lessontransformer;

    /**
     * LessonController constructor.
     * @param LessonTransformer $lessontransformer
     */
    public function __construct(LessonTransformer $lessontransformer)
    {
        $this->lessontransformer = $lessontransformer;
        $this->middleware(
            'auth.basic',
            ['only' => ['store','update']]
        );
    }

    /**
     * @return mixed
     */
    public function index()
    {
        $lessons = Lesson::all();

        return $this->response(
            [
                'status' => 'success',
                'data'   => $this->lessontransformer->transformcollection($lessons->toArray()),
            ]
        );
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return $this->ResponseNotFound();
        }
        return $this->response(
            [
                'status' => 'success',
                'data'   => $this->lessontransformer->transform($lesson->toArray()),
            ]
        );
    }

    public function store(Request $request)
    {
    	dd('234234');die;
//        if (!$request->get('title') or !$request->get('body')) {
//            return $this->setStatusCode(422)->ResponseErr('validate err');
//        }
        //		dd('123123123');die;
    }
}
