<?php

function remove_session(){
	unset($_SESSION);
	session_destroy();
}

?>