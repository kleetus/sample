<?php

namespace mfacenet\Sample;

class Library {

    protected $_container_id;

    public function __construct() {
        $this->_container_id = $_ENV['HOSTNAME'];
    }

    public function get_container_id() {
        return $this->_container_id;
    }
}
