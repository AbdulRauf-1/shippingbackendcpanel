<?php
// Path to your working directory
$workingDir = '/home/theshippinghack/rauf.theshippinghack.com';

// Set up the correct environment variables for the shell
// Include the path to your node and pm2 binaries
$nodeBinPath = '/home/theshippinghack/node/bin';  // Update this with the correct path to node binaries if it's different
//$pm2BinPath = '/home/theshippinghack/.nvm/versions/node/v16.14.0/bin';  // Adjust path to PM2 binary, if installed via NVM

// Ensure both node and pm2 are available in the environment
//$output = shell_exec("export HOME=/home/theshippinghack && export PATH=$PATH:$nodeBinPath:$pm2BinPath && cd $workingDir && pm2 stop rauf || true");

// Run npm install and start the app with pm2
$output= shell_exec("export HOME=/home/theshippinghack && export PATH=$nodeBinPath:$PATH && cd $workingDir && npm install && pm2 start shipping.js --name rauf 2>&1");

// Output the result
echo nl2br($output);
?>
