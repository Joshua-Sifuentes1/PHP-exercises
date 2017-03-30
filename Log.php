<?php  

class Log {
	public $filename; 

	public function logMessage($logLevel, $message)
	{
		$date = date("o-m-d");
		$time = date("H:i:s");

		$this->filename = "log-$date.log";

		$handle = fopen($this->filename, 'a');

		fwrite($handle, "$date $time [$logLevel] $message" . PHP_EOL);
		
		fclose($handle);

	}

	function info($message)
	{
		$this->logMessage("INFO", $message);
	}

	function error($message)
	{
		$this->logMessage("ERROR", $message);
	}
}

?>