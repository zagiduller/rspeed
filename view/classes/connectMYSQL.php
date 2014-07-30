<?php

class connectMYSQL extends DB {
	function __construct() {
		$this->DBexception( "Подключение при помощи расширения MySQL устарело и не рекомендуется к использованию." );
	}
	function getAll() {	}
}
