<?php

class View {
    
    private $dir_tmpl;
    
    public function __construct($dir_tmpl) {
        $this->dir_tmpl = $dir_tmpl;
    }
    
    public function render($file, $params, $return = false) {
        $template = $this->dir_tmpl.$file.'.tpl';
        extract($params);
        ob_start();
        include($template);
        if ($return) return ob_get_clean();
        echo ob_get_clean();
    }
    
}

?>