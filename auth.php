<?php
require_once'log.php';
require_once'input.php';
class Auth {
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static function attempt($user, $pass) {
    	if ($user == 'guest' && password_verify($pass, self::$password)) {
    		$log = new Log('log');
			$log->logMessage("Correct User and Pass" . PHP_EOL);
			$_SESSION['status'] = "loggedin";
			$_SESSION['user'] = trim($_POST['username']);
			header("location: http://codeup.dev/authorized.php");
			exit();
    	} else {
    		$log = new Log('log');
			$log->logMessage("fail" . PHP_EOL);
    	}    
    }
    public static function check($loged) {
    	if (isset($loged)) {
    	    return true;
    	} else {
    		return false;
    	}    
    }
    public static function user($user) {
    	return $user;
    }
    public static function logout() {
    	session_destroy();
		header("location: http://codeup.dev/login.php");
        exit();
    }
}
date_default_timezone_set("America/Chicago");
?>