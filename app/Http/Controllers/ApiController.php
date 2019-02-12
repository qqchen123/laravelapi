<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    protected $statusCode = 200;

	/**
	 * @return int
	 */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

	/**
	 * @param $statusCode
	 * @return $this
	 */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

	/**
	 * @param string $message
	 * @return mixed
	 */
    public function ResponseNotFound($message = 'Not Found')
    {
        return $this->setStatusCode('333')->ResponseErr($message);
    }

	/**
	 * @param $message
	 * @return mixed
	 */
    public function ResponseErr($message)
    {
        return $this->response(
            [
                'status' => 'failed',
                'errors' => [
                    'code' => $this->getStatusCode(),
                    'msg'  => $message,
                ],
            ]
        );
    }

	/**
	 * @param $data
	 * @return mixed
	 */
    public function response($data)
    {
        return \Response::json($data, $this->getStatusCode());
    }
}
