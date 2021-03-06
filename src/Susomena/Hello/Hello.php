<?php
/**
 * 
 * Author: Jesús Mena
 * Email: suso.mena@gmail.com
 * Date: 27/02/15
 * 
 */

namespace Susomena\Hello;


class Hello {
	
	/**
	 * @return string
	 */
	public function world()
	{
		return $this->say('world');	
	}

	/**
	 * @param string $value
	 *
	 * @return string
	 */
	public function say($value)
	{
		if(strtolower($value) == 'my name'):
			return 'Heisenberg';
		else:
			return "Hello, {$value}!";
		endif;
	}

	/**
	 * @param string $method
	 *
	 * @return string
	 */
	public function __call($method)
	{
		return $this->say($method);	
	}
}