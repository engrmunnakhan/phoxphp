<?php
namespace Package\Databse\Adapter\Exceptions;

use App\BaseException;

class AdapterNotFoundException extends BaseException {

	/**
	* @var 		$template
	* @access 	protected
	*/
	protected 	$template = '404x';

	/**
	* @param 	$message String
	* @access 	public
	* @return 	void
	*/
	public function __construct($message='') {
		parent::__construct($message);
	}

}