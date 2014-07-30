<?php 
abstract class DB {
	static $instance;
	const PDO = 1;
	const MYSQL = 2;

	const HOST = 'localhost';
	const USER = 'root';
	const PASS = '';
	const DBNAME = 'rs';
	
	private function __construct(){}
	
	static function getInstance( $param = 0 ) {
		if ( ! self::$instance ) {
			switch( $param ) {
				case self::MYSQL :			
					self::$instance = new connectMYSQL;
					break;
				default :
					 self::$instance = new connectPDO;
			}
		}
		return self::$instance;
		
	}

	protected function DBexception( $msg ) {
		throw new Exception ( "<pre>Ошибка при работе с базой данных в классе: " . __CLASS__ . "\nСообщение: <b>" . $msg . "</b></pre>");
	}
}

