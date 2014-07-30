<?php
class QuizContext {
	private $request;
	private $status;
	
	# Состояния
	const UR = 1; 			// Пользователь читает и отвечает на вопросы
	const UA = 10;			// Пользователь ответил на вопросы
	
	function __construct ( ) {
		$this->init();
	}
	
	function init() {
		# Текст -> Вопросы -> ВариантыОтветов
		$this->text = new Text;
		if ( AnswerMngr::init() ) {
			$this->answHandling();
		}
	}
	
	function answHandling() {
		$questions = $this->text->getQuestions();
		$answers = AnswerMngr::init();
		
		# Проверка ответов
		foreach ( $questions as $q ){
			for ( $i=0; $i < count( $answers ); $i++ ) {
				$q->checkAnswer( $answers[$i] );
			}
		}
	}
	function getAnswerStatus() {
		$questions = $this->text->getQuestions();
		$answerStatus = '';
		foreach ( $quesions as $q ) {
			if ( $q->getAnswerStatus() ) {
				$answerStatus['right'] = $q;
			} else {
				$answerStatus['wrong'] = $q;
			}
		}
		$this->status = $answerStatus;
	}
	function getStatus() {
		return $this->status;
	}
}
