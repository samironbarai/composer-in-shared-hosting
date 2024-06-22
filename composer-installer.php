<?php
$installer_url = 'https://getcomposer.org/installer';
$installer_file = 'composer-setup.php';

// Download the installer script
$file = file_get_contents($installer_url);

// Check if the download was successful
if ($file === FALSE) {
    echo "Failed to download Composer installer.";
    exit;
}

// Save the downloaded file
file_put_contents($installer_file, $file);

// Verify if the file was saved
if (file_exists($installer_file)) {
    echo "Composer installer downloaded successfully.";
} else {
    echo "Failed to save Composer installer.";
}
