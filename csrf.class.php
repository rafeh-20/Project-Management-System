<?php


class csrf {
    
    public function get_token_id() {
	if(isset($_SESSION['token_id'])) { 
		return $_SESSION['token_id'];
	} else {
		$token_id = $this->rand(10,100);
		$_SESSION['token_id'] = $token_id;
		return $token_id;
	}
}

public function get_token() {
	if(isset($_SESSION['token_value'])) {
		return $_SESSION['token_value']; 
	} else {
		$token = hash('sha256', $this->rand(500));
		$_SESSION['token_value'] = $token;
		return $token;
	}

}
public function check_valid($method) {
	if($method == 'post' || $method == 'get') {
		$post = $_POST;
		$get = $_GET;
		if(isset(${$method}[$this->get_token_id()]) && (${$method}[$this->get_token_id()] == $this->get_token())) {
			return true;
		} else {
			return false;	
		}
	} else {
		return false;	
	}
}
}