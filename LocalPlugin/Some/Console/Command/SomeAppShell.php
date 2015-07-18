<?php
/**
 * AppShell file
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 */

App::uses('Shell', 'Console');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
class SomeAppShell extends Shell {

    public function perform() {
        $this->initialize();
        $this->loadTasks();
        return $this->runCommand($this->args[0], $this->args);
    }
}
