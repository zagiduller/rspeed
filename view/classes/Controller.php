<?php
class Controller {
	private static $quiz;
	private static $instance;
	private function __construct() {}
	
	static function getInstance() {
		# Тут можно сделать инициализацию контроллеров на выбор
		if ( ! self::$instance ) {
			self::$instance = new self();
			self::$instance->init();
		}
		return self::$instance;
	}
	private function init() {
		# Объект класса обработчика запроса
		RequestRegistry::setRequest( new Request );
		$request = RequestRegistry::getRequest();
		# Определяем пользователя
		$user = '';
		# Создаем контекст викторины
		# Внутри контекста создаются объекты с текстом и вопросами
		$this->quiz = new QuizContext( $request );
		
		# Пользователь читает текст отвечает на вопросы
		for ( $i = 0; $i < 10; $i++ ) {
			$request->setProperty( "a{$i}", $i );
		}
		# Пользователь ответил на вопросы обрабатываем ответы

		
	}
	
	function toString( ) {
		return $this->quiz->getStatus();
	}
	
}
