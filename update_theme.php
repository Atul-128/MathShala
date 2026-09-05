<?php
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('e:\the vision classes\resources\views'));
foreach ($dir as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $content = str_replace('brand-red', 'brand-cyan', $content);
        file_put_contents($file->getPathname(), $content);
    }
}
echo "Theme updated\n";
