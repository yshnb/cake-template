<?php


class First extends AppModel {

    public function getAllData() {
        return $this->find('all');
    }

    public function getUniq($id) {
        return $this->find('first', array('conditions' => array('First.id' => $id)));
    }
}
