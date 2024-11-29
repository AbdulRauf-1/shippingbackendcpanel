<?php
// Path to your working directory
$workingDir = '/home/fomino/testingtsh.fomino.ch';

// Set HOME environment variable and run commands
$output = shell_exec("export HOME=/home/fomino && cd $workingDir && npm install 2>&1");

// Output the result
echo nl2br($output);
?>