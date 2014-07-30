<?php

class Option {
	private $id;
	private $id_question;
	private $text_option;
	
	function __construct( $params ) {
		$this->id = $params['id'];
		$this->id_question = $params['id_question'];
		$this->text_option = $params['text_option'];
	}
}
