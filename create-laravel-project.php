<?php
// Set the COMPOSER_HOME environment variable
putenv('COMPOSER_HOME=' . __DIR__ . '/composer_home');

// Install Laravel using Composer
$output = shell_exec('php composer.phar create-project laravel/laravel laravel-project');

// Output the result
echo "<pre>$output</pre>";
