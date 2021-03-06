<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'actions' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'actions' => 'index'),
            'authError' => 'You cant access that page',
            'authorize' => array('Controller')
        )
    );

    public function isAuthorized($user) {
        return true;
    }

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }

}
