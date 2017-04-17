<?php  

class Log {
	private $filename;
	private $handle;
	
	public function __construct($prefix = 'log')
	{	
		$this->setFilename($prefix);
		$this->handle = fopen($this->filename, 'a');
	}
	private function setFilename($prefix)
	{
		$this->filename = $prefix . "-" . date("Y-m-d") . ".log";
		if (!touch($this->filename)){
			echo "File is not readable" . PHP_EOL;
			exit;
		}

		if (!is_writable($this->filename)) {
			echo "File is not writable" . PHP_EOL;
			exit;
		}
	}
	public function logMessage($logLevel, $message)
	{
		$timeStamp = date("Y-m-d H:i:s");
		fwrite($this->handle, "$timeStamp [$logLevel] $message" . PHP_EOL);
	}
	public function info($message)
	{
		$this->logMessage("INFO", $message);
	}
	public function error($message)
	{
		$this->logMessage("ERROR", $message);
	}
	public function __destruct(){

		fclose($this->handle);
	}
}

?>