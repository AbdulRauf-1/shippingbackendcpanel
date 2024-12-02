<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Set HOME environment variable and run commands
$output = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && npm install && npm install -g pm2 && pm2 start shipping.js --name rauf 2>&1");
echo nl2br($output);
// Set HOME environment variable and run commands
$output2 = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && npm install -g pm2 2>&1");
echo nl2br($output2);
// Set HOME environment variable and run commands
$output3 = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && pm2 start shipping.js --name rauf 2>&1");
echo nl2br($output3);

?>