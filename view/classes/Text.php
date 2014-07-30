<?php

class Text {
	private $id;
	private $questions = array();

	function __construct( ) {
		$this->id = 4;
		Factory::getInstance( $this );
	}

	function getId() {
		return $this->id;
	}

	function addQuestion( Question $question ){
		$this->questions[] = $question;
	}

	function getQuestions() {
		return $this->questions;
	}

}
