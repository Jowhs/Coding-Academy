<?php

interface IUnit {

	function equip($param);
	function attack($param);
	function receiveDamage($param);
	function moveCloseTo($param);
	function recoverAP();

}

?>