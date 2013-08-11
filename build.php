<?php
/**
 * Phar Builder
 */
 
$archive = 'build/minify.phar';
if (file_exists($archive)) {
    unlink($archive);
} 
 
$phar = new Phar($archive); 
$phar->setDefaultStub('cli.php'); // Access Point

$phar->startBuffering();

// Get the default stub. You can create your own if you have specific needs
$defaultStub = $phar->createDefaultStub('cli.php');

// Adding files
//@Todo: Exclude Tests Dir 
$phar->buildFromDirectory('src/', '/\.php$/'); 

// Create a custom stub to add the shebang
$stub = "#!/usr/bin/env php \n" . $defaultStub;

// Add the stub
$phar->setStub($stub);

$phar->stopBuffering();

//$phar->compress(Phar::GZ); // Compressing
