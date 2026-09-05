<?php

$dir = new RecursiveIteratorIterator(
    new RecursiveCallbackFilterIterator(
        new RecursiveDirectoryIterator('e:\the vision classes'),
        function ($file, $key, $iterator) {
            // Exclude directories we shouldn't modify
            if ($iterator->hasChildren() && in_array($file->getFilename(), ['vendor', 'node_modules', 'storage', '.git'])) {
                return false;
            }
            return true;
        }
    )
);

foreach ($dir as $file) {
    if ($file->isFile()) {
        $ext = $file->getExtension();
        if (in_array($ext, ['php', 'blade', 'html', 'js', 'json', 'env', 'txt', 'md'])) {
            $content = file_get_contents($file->getPathname());
            $originalContent = $content;
            
            // Emails
            $content = str_ireplace('info@thevisionclasses.com', 'info@thevisionclasses.com', $content);
            $content = str_ireplace('info@thevisionclasses.com', 'info@thevisionclasses.com', $content);
            $content = str_ireplace('admin@thevisionclasses.com', 'admin@thevisionclasses.com', $content);

            // Names (longest first to avoid partial replacements)
            $content = str_ireplace('THE VISION CLASSES ADMINISTRATIVE CORE', 'THE VISION CLASSES ADMINISTRATIVE CORE', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);
            $content = str_ireplace('The Vision Classes', 'The Vision Classes', $content);

            if ($content !== $originalContent) {
                file_put_contents($file->getPathname(), $content);
                echo "Updated: " . $file->getPathname() . "\n";
            }
        }
    }
}
echo "Replacement complete.\n";
