<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Set HOME environment variable and run commands
$output1 = shell_exec("export HOME=/home/theshippinghack && cd $workingDir && npm install 2>&1");
// Display the output
echo nl2br($output1);

$pm2Binary = '/home/theshippinghack/node/bin/pm2'; // Ensure correct path to pm2

// Log file for debugging
$logFile = '/home/theshippinghack/trigger_pm2.log';

// Export HOME environment variable, navigate to the working directory, and manage PM2
$output = shell_exec("
    export HOME=/home/theshippinghack &&
    cd $workingDir &&
    echo 'Current directory: ' && pwd &&
    $pm2Binary stop rauf --silent || echo 'No existing process to stop' &&
    $pm2Binary delete rauf --silent || echo 'No existing process to delete' &&
    $pm2Binary start shipping.js --name rauf --watch --update-env &&
    $pm2Binary save &&
    $pm2Binary list
");

// Write the output to a log file for debugging
file_put_contents($logFile, $output);



// Output the result
echo nl2br($output);
?>