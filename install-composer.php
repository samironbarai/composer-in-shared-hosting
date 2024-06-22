<?php
// Set the COMPOSER_HOME environment variable
putenv('COMPOSER_HOME=' . __DIR__ . '/composer_home');

// Ensure the installer exists
if (!file_exists('composer-setup.php')) {
    echo "Composer setup file not found.";
    exit;
}

// Run the Composer installer with the php -d option
$output = shell_exec('php -d allow_url_fopen=On composer-setup.php');

// Output the result
echo "<pre>$output</pre>";

// Clean up
unlink('composer-setup.php');
