<?php
// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Path to your working directory
$workingDir = '/home/fomino/testingtsh.fomino.ch';

// Full path to node and npm binaries
$nodePath = '/home/fomino/.nvm/versions/node/v16.20.2/bin/node';
$npmPath = '/home/fomino/.nvm/versions/node/v16.20.2/bin/npm';

// Export PATH for the script to find node and npm
$exportPath = 'export PATH=$PATH:/home/fomino/.nvm/versions/node/v16.20.2/bin';

// Set permissions for node and npm binaries
exec("chmod +x $nodePath $npmPath", $output, $status);

// Set permissions for the working directory
exec("chmod -R 775 $workingDir", $output, $status);

// Run npm install with explicit PATH export
exec("$exportPath && cd $workingDir && $npmPath install", $output, $status);

// Display results
echo "Binary Permissions Output:<br />" . nl2br(implode("\n", $output)) . "<br />";
echo "Directory Permissions Output:<br />" . nl2br(implode("\n", $output)) . "<br />";
echo "NPM Install Output:<br />" . nl2br(implode("\n", $output)) . "<br />";
?>
