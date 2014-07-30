<?php
class QuestionFactory extends Factory {
	private $text;
	private $questions;
	function get( $text ) {
		$this->text = $text;
		$mngr = new QuestionMngr( $text );
		$this->questions = $mngr->get();
		$this->init();
	}
	
	function init( ) {
		for ( $i = 0; $i < count( $this->questions ); $i++ ) {
			$this->text->addQuestion( new Question( $this->questions[$i] ) );
		}
	}
}
