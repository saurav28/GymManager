<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Users extends Model

{
    use Authenticatable;
    //
    /**
 * @var array
 */
protected $casts = [
    'roles' => 'array',
];

/***
 * @param string $role
 * @return $this
 */
public function addRole(string $role)
{
    $roles = $this->getRoles();
    $roles[] = $role;
    
    $roles = array_unique($roles);
    $this->setRoles($roles);

    return $this;
}

/**
 * @param array $roles
 * @return $this
 */
public function setRoles(array $roles)
{
    $this->setAttribute('roles', $roles);
    return $this;
}

/***
 * @param $role
 * @return mixed
 */
public function hasRole($role)
{
    return in_array($role, $this->getRoles());
}

/***
 * @param $roles
 * @return mixed
 */
public function hasRoles($roles)
{
    $currentRoles = $this->getRoles();
    foreach($roles as $role) {
        if ( ! in_array($role, $currentRoles )) {
            return false;
        }
    }
    return true;
}

/**
 * @return array
 */
public function getRoles()
{
    $roles = $this->getAttribute('roles');

    if (is_null($roles)) {
        $roles = [];
    }

    return $roles;
}




}
