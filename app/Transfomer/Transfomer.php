<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 2019/1/30
 * Time: 2:11 PM
 */
namespace App;

abstract class Transfomer
{
	/**
	 * @param $datas
	 * @return array
	 */
    public function transformcollection($datas)
    {
        return array_map([$this,'transform'], $datas);
    }

	/**
	 * @param $iterm
	 * @return mixed
	 */
    abstract public function transform($iterm);
}
