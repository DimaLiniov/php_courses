<?php
    set_include_path(get_include_path().PATH_SEPARATOR.'core'.PATH_SEPARATOR.'controllers');
    spl_autoload_extensions('_class.php');
    spl_autoload_register();
    
    define('DIR_TMPL', 'W:/domains/mysite.local/tmpl/');
    define('MAIN_LAYOUT', 'main');
?>