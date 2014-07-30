<?php
class AnswerMngr extends Mngr {
	private static $answers;
	
	private function __construct() {}
	
	static function init() {
		if ( ! self::$answers ) {
			$answers = '';
			$request = RequestRegistry::getRequest();
			for ( $i = 0; $i < $request->getCount(); $i++ ) {
				if ( $request->getProperty( "a{$i}" ) ) {
					$answers[$i] = $request->getProperty( "a{$i}" );
				} else {
					return FALSE;					// Если не пришли ответы
				}
			}
			self::$answers = $answers;
		}
		return self::$answers;
	}
	
	function get() {
		return self::init();
	}
	
	function isAnswer( $val ) {
		return preg_match("/^a[0-9]/i", $key);
	}
}
