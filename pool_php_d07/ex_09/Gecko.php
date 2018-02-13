<?php

class Gecko {

	public $friends = array();
	public $skills;

	function __construct(array $friends = null, Skill $skills){
		$this->friends = $friends;
		$this->skills = $skills;
	}
}

?>