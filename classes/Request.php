<?php

class Request {
	private $propertiens;
	private $feedback = array();
	
	function __construct() {
		$this->init();
		RequestRegistry::setRequest($this);
	}
	
	function init() {
		if ( isset( $_SERVER['REQUEST_METHOD'] ) ) {
			$this->propertiens = $_REQUEST;
			return;
		}
		# Прием параметров через консоль
		foreach( $_SERVER['argv'] as $arg ) {
			if ( strpos( $arg, '=' ) ) {
				list ( $key, $val ) = explode( "=", $arg );
				$this->setProperty( $key, $val );
			}
		}
	}
	
	function getProperty( $key ) {
		if ( isset( $this->propertiens[$key] ) ) {
			return $this->propertiens[$key];
		}
	}
	
	function setProperty( $key, $val ) {
		$this->property[$key] = $val;
	}
	
	# Возвращает колличество пришедших параметров;
	function getCount() {
		return count( $this->propertiens );
	}
	
	function addFeedback( $msg ) {
		array_push( $this->feedback, $msg );
	}
	
	function getFeedback() {
		return $this->feedback;
	}
	
	function getFeedbackString( $separator = "\n" ) {
		return implode( $separator, $this->feedback );
	}
}
