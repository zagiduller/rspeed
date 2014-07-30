<?php
class OptionMngr extends Mngr {
	private $db;
	private $id_question;
	private $all;
	
	function __construct( Question $question ) {
		$this->db = DB::getInstance( );
		$this->question = $question;
		$this->init();
	}
	function init() {
		$this->all = $this->db->getOptions( $this->question );
	}
	function get() {
		return $this->all;
	}
}
