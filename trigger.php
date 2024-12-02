<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Set HOME environment variable and run commands
$output = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && npm install && npm install -g pm2 && pm2 start shipping.js --name rauf 2>&1");

// Output the result
echo nl2br($output);
?>