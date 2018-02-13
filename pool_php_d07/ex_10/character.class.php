<?php

class Character {

	private $name;
	private $strength;
	private $magic;
	private $intelligence;
	private $life;

	function __construct(string $name = $i){
		$this->name = $name;
		$this->strength = 0;
		$this->magic = 0;
		$this->intelligence = 0;
		$this->life = 100;
	}

	protected function getName(){
		return $this->name;
	}

	protected function getStrength(){
		return $this->strength;
	}

	protected function getMagic(){
		return $this->magic;
	}

	protected function getIntelligence(){
		return $this->intelligence;
	}

	protected function getLife(){
		return $this->life;
	}

	public function __toString(){
		return $this->name;
	}
}

?>