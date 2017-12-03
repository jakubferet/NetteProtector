<?php

namespace App\Acl;

use Nette\Security\Permission;

class Acl extends Permission {

    public function __construct() {
        //roles
        $this->addRole('registered');
        $this->addRole('administrator');
        // resources
        $this->addResource('Homepage');
        $this->addResource('Sign');
        $this->addResource('User');
        $this->addResource('Settings');
        // privileges
        $this->allow(Permission::ALL, 'Homepage', Permission::ALL);
        $this->allow(Permission::ALL, 'Sign', Permission::ALL);
        
        $this->allow('registered', 'User', 'update');
        $this->allow('registered', 'User', 'changePassword');
        $this->deny('registered', 'User', 'list');
        $this->deny('registered', 'User', 'create');
        $this->deny('registered', 'Settings', 'setting');
        
        $this->allow('administrator', Permission::ALL, Permission::ALL);
    }
}