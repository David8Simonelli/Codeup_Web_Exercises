<?php
class Log {
	public $handle;
	public $fileName;
	public function __construct($prefix = 'log') {
		$this->fileName = $prefix . "-" . date("Y-m-d") . ".log";
		$this->handle = fopen($this->fileName, 'a');
	}
	public function logMessage($message) {
		fwrite($this->handle, date('Y-m-d H:i:s ') . $message);
	}
	public function logInfo() {
		$message = "INFO, This is an info message." . PHP_EOL;
		$this->logMessage($message);
	} 
	public function logError() {
		$message = "ERROR, This is an error message." . PHP_EOL;
		$this->logMessage($message);
	} 
	public function __destruct() {
		fclose($this->handle);
	}
}
?>