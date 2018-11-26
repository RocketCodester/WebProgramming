<?php

class JsonSessionHandler extends SessionHandler
{
    public function read($session_id) {
        $data = parent::read($session_id);
        return json_decode($data);
    }
    public function write($session_id, $data) {
        $data = json_encode($data);
        return parent::write($session_id, $data);
    }
}
$handler = new JsonSessionHandler();
session_set_save_handler($handler);