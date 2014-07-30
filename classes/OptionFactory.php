<?php
class OptionFactory extends Factory {
	private $question;
	private $options;
	
	function get( $question ) {
		$this->question = $question;
		$mngr = new OptionMngr( $question );
		$this->options = $mngr->get();
		$this->init();
	}
	
	function init() {
		for ( $i = 0; $i < count( $this->options ); $i++ ) {
			$this->question->addOption( new Option( $this->options[$i] ) );
		}
	}
}
