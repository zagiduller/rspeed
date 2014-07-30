<?php

class connectPDO extends DB {
	private $db;
	private $questions;
	private $options;
	
	function __construct() {
		$this->db = new PDO( 'mysql:host='.self::HOST.';dbname=' . self::DBNAME, self::USER, self::PASS );
		$this->db->exec('SET CHARACTER SET utf8');
	}

	# Возвращает массив вопросов
	function getQuestions( Text $text ) {
		if ( ! $this->questions ) {
			$result = $this->db->query( 'SELECT * FROM questions WHERE id_text = '.$text->getId() );
			$this->questions = $this->fetch( $result );
		}
		return $this->questions;
	}
	
	# Возвращает массив вариантов ответов
	function getOptions( Question $question ) {
		if ( ! $this->options ) {
			$result = $this->db->query( 'SELECT * FROM options WHERE id_question = '.$question->getId() );
			$this->options = $this->fetch( $result );
		}
		return $this->options;
	}
	private function fetch( $array ) {
		$result = array();
		while ( $row = $array->fetch( PDO::FETCH_ASSOC ) ) {
			$result[] = $row;
		}
		return $result;
	}
}
