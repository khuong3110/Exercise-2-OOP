<?php
class admin extends user {
	public function __construct($level, $id) {
		parent::__construct($level);
		$this->user_id = $id;
	}

	public function __set($name, $value) {
    $this->$name = $value;
    return;
	}

	public function __get($name) {
    return $this->$name;
	}

	public function __destruct() {

	}
}


?>
