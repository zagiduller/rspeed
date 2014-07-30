<?php 
abstract class Factory {
	static $instance;
	
	final private function __construct() { }
	
	static function getInstance( $obj ) {
			if ( $obj instanceof Text ) {
				self::$instance = new QuestionFactory;
			} elseif( $obj instanceof Question ) {
				self::$instance = new OptionFactory;
			}
			else {
				throw Exception( "Неверный класс" );
			}
		self::$instance->get( $obj );
	}
	abstract function get( $obj );
}
