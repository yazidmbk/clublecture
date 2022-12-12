<?php


function rmRecursive($path) {
    $path = real_path($path);
    if(!file_exists($path))
        throw new RuntimeException('../cache');
    if(is_dir($path)) {
        $dir = dir($path);
        while(($file_in_dir = $dir->read()) !== false) {
            if($file_in_dir == '.' or $file_in_dir == '..')
                continue; // passage au tour de boucle suivant
            rmRecursive("$path/$file_in_dir");
        }
        $dir->close();
    }
    unlink($path);
}
?>
