<?php
class QuestionMngr extends Mngr {
	private $db;
	private $text;
	private $all;
	
	function __construct( Text $text ) {
		$this->db = DB::getInstance( );
		$this->text = $text;
		$this->init();
	}
	function init() {
		$this->all = $this->db->getQuestions( $this->text );
	}
	function get() {
		return $this->all;
	}
}
