<?php
class Template {
    private $_file;

    public function __construct($file) {
        $this->_file = $file;
    }

    public function render() {
        include $this->_file;
    }
}
?>
