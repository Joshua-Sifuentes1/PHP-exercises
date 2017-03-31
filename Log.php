<?php  

class Log {
	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
	{	
		$date = date("Y-m-d");

		$this->filename = "$prefix-$date.log";

		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($logLevel, $message)
	{
		$timeStamp = date("Y-m-d H:i:s");

		fwrite($this->handle, "$timeStamp [$logLevel] $message" . PHP_EOL);
	}

	function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	function error($message)
	{
		$this->logMessage("ERROR", $message);
	}
	
	public function __destruct(){

		fclose($this->handle);
	}
}

?>