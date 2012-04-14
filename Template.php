<?php
class Template {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function render() {
        include $this->file;
    }
}
?>
