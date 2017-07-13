<?php
/**
 *
 *
 * @author Dmitriy Kaledin
 */

class Criteo {

	private $params = array();

	// Allow Criteo methods
	private $allowMethods = array(
		'setAccount',
		'setEmail',
		'setHashedEmail',
		'setSiteType',
		'trackTransaction',
		'viewHome',
		'viewList',
		'viewItem',
		'viewBasket');

	/**
	 *
	 *
	 * @param String  $method
	 * @param Array   $args
	 * @return Method
	 */
	public function __call($method, $args) {
		if (in_array($method, $this->allowMethods)) {
			return $this->addParam($method, $args);
		}
	}


	/**
	 *
	 *
	 * @param String  $event
	 * @param Array   $array
	 */
	private function addParam($event, $array) {
		$param = array(
			'event' => $event
		);

		if (count($array) > 0) {
			foreach ($array[0] as $key => $value) {
				$param[$key] = $value;
			}
		}

		$this->params[] = json_encode($param);
	}


	/**
	 *
	 *
	 * @return String JS code
	 */
	public function getCode() {
		$code  = '<script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>' . PHP_EOL;
		$code .= '<script type="text/javascript">' . PHP_EOL;
		$code .= 'window.criteo_q = window.criteo_q || [];' . PHP_EOL;
		$code .= 'window.criteo_q.push(' . implode(",\n", $this->params) . ');' . PHP_EOL;
		$code .= '</script>' . PHP_EOL;

		return $code;
	}


}
