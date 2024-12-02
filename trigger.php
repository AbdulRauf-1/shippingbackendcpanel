<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Command to check if the PM2 process is already running
$checkPm2Command = "export HOME=/home/theshippinghack && pm2 list | grep rauf";

// Execute the command
$processExists = shell_exec($checkPm2Command);

// If the process exists, restart it; otherwise, create and start it
if (strpos($processExists, 'rauf') !== false) {
    // Restart the existing PM2 process
    $output = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && ~/node/bin/pm2 restart rauf 2>&1");
} else {
    // Create and start a new PM2 process
    $output = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && npm install && ~/node/bin/pm2 start shipping.js --name rauf 2>&1");
}
// Output the result
echo nl2br($output);
?>