<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Set up the correct environment variables for the shell
// Include the path to your node and pm2 binaries
$nodeBinPath = '/home/theshippinghack/node/bin';  // Path to node binaries

// Export the correct PATH for node and pm2, also including the current system PATH
$path = shell_exec("echo $PATH");  // This retrieves the current system PATH
$fullPath = $nodeBinPath . ':' . $path;  // Append node path to the current system PATH

// Ensure both node and pm2 are available in the environment
$output = shell_exec("export HOME=/home/theshippinghack && export PATH=$fullPath && cd $workingDir && npm install && pm2 start shipping.js --name rauf 2>&1");

// Check if output is null
if ($output === null) {
    $output = "No output returned from shell command.";
}

// Output the result
echo nl2br($output);
?>
