<?php


class First extends AppModel {

    public function getAllData() {
        return $this->find('all');
    }
}
