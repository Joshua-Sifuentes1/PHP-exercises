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

function info($message)
{
	logMessage("INFO", $message);
}

function error($message)
{
	logMessage("ERROR", $message);
}

logInfo("This is an info message.");
logError("This is an info message.");