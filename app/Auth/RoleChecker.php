<?php
namespace app\Auth;

use app\Users;

/**
 * Class RoleChecker
 * @package App\Role
 * Code inspired from 
 * https://medium.com/@tomgrohl/implementing-user-roles-into-a-laravel-application-f8b9b5c266a7
 */
class RoleChecker
{
    /**
     * @param User $user
     * @param string $role
     * @return bool
     */
    public function check(User $user, string $role)
    {
        // Admin has everything
        if ($user->hasRole(UserRoles::USER)) {
            return true;
        }
        else if($user->hasRole(UserRoles::ADMIN)) {
            $managementRoles = UserRoles::getAllowedRoles(UserRoles::ROLE_USER);

            if (in_array($role, $managementRoles)) {
                return true;
            }
        }

        return $user->hasRole($role);
    }
}

