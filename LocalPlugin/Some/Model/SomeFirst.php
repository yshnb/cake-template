<?php


class SomeFirst extends SomeAppModel {

    public function getAllData() {
        return $this->find('all');
    }

    public function getUniq($id) {
        return $this->find('first', array('conditions' => array('SomeFirst.id' => $id)));
    }
}
