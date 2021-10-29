<?php

class Language{
    private $data;

    public function __construct($language)
    {
        $this->data = parse_ini_file("languages/");
    }
}

?>