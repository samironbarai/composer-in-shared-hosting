<?php
// Set the COMPOSER_HOME environment variable
putenv('COMPOSER_HOME=' . __DIR__ . '/composer_home');

// Check Composer version
$output = shell_exec('php composer.phar --version');

// Output the result
echo "<pre>$output</pre>";
