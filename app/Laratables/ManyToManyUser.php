<?php
namespace App\Laratables;

use App\User;

class ManyToManyUser extends User
{
    /**
     * Display the relationship data in custom column(UserRoles).
     *
     * @param \App\User
     * @return string
    */
    public static function laratablesCustomUserRoles($user)
    {
        return $user->roles->implode('name', ',');
    }

    /**
     * Adds the condition for searching the User Roles.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchUserRoles($query, $searchValue)
    {
        return $query->orWhereHas('roles', function ($query) use ($searchValue) {
            $query->where('name', 'like', "%". $searchValue ."%");
        });
        return $query;
    }
}
