<?php
App::uses('AppShell', 'Console/Command');

class FirstShell extends AppShell
{
    public $uses = array('First');

    public function findNewFirst() {
        $data = $this->First->getUniq($this->args[0]);
        $this->log(var_export($data, true), LOG_DEBUG);
    }
//
//    public function notifyFriend() {
//        $this->First->notify($this->args[0]);
//    }
}
