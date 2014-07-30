<?php

class Question {
	private $options = array();
	private $userAnswer = FALSE;
	private $id;
	function __construct( $params ) {
		$this->id = $params['id'];
		$this->id_text = $params['id_text'];
		$this->text_question = $params['text_question'];		
		$this->answer = $params['answer'];
		
		Factory::getInstance( $this );
	}
	
	function getId() {
		return $this->id;
	}
	
	function addOption( Option $option ) {
		$this->options[] = $option;
	}
	
	function getOptions() {
		return $this->options;
	}
	
	function checkAnswer( $val ) {
		if ( $this->answer == $val )
			$this->userAnswer = TRUE;
	}
	
	function getAnswerStatus() {
		return $this->userAnswer;
	}
}
