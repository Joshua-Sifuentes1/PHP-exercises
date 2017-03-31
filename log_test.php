<?php  

require_once 'Log.php';

$log = new Log('cli');

$log->info("This is an info message.");
$log->info("Random information message.");

$log->error("This is an error message.");

?>