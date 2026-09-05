<?php
$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('e:\the vision classes\resources\views'));
foreach ($dir as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        $content = str_replace('The Vision Classesashram1@gmail.com', 'info@thevisionclasses.com', $content);
        $content = str_replace('The Vision Classes', 'The Vision Classes', $content);
        $content = str_replace('The Vision Classes', 'The Vision Classes', $content);
        $content = str_replace('The Vision Classes', 'thevisionclasses', $content);
        file_put_contents($file->getPathname(), $content);
    }
}
echo "Done\n";
