<?php

function logMessage($logLevel, $message)
{
	$date = date("o-m-d");
	$time = date("H:i:s");

	$filename = "$date.log";

	$handle = fopen($filename, 'a');
	fwrite($handle, "$date $time [$logLevel] $message" . PHP_EOL);
	
	fclose($handle);

}

function logInfo($level, $message)
{
	logMessage($level, $message);
}

function logError($level, $message)
{
	logMessage($level, $message);
}

logInfo("INFO", "This is an info message.");
logError("ERROR", "This is an info message.");