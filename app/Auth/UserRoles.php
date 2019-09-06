<?php

namespace app\Auth;

/***
 * Class UserRole
 * @package App\Role
 * Roles class to define the type of roles and define the role hierarchy.
 * In future more roles can be added here
 * Code is inspired from 
 * https://medium.com/@tomgrohl/implementing-user-roles-into-a-laravel-application-f8b9b5c266a7
 */
class UserRole {

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_USER = 'ROLE_USER';
    

    /**
     * @var array
     */
    protected static $roleHierarchy = [
        self::ROLE_USER => ['*'],
        self::ROLE_ADMIN => [
            self::ROLE_USER
           
        ],
    ];

    /**
     * @param string $role
     * @return array
     */
    public static function getAllowedRoles(string $role)
    {
        if (isset(self::$roleHierarchy[$role])) {
            return self::$roleHierarchy[$role];
        }

        return [];
    }

    /***
     * @return array
     */
    public static function getRoleList()
    {
        return [
            static::ROLE_ADMIN =>'Admin',
            static::ROLE_MANAGEMENT => 'User',
            
        ];
    }

}