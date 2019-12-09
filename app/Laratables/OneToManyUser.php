<?php
namespace App\Laratables;

class OneToManyUser
{
    /**
     * Change date format of start_date column value.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesStartDate($user)
    {
        return date('d-m-Y', strtotime($user->start_date));
    }

    /**
     * Eager load comments of the user.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesQueryConditions($query)
    {
        return $query->with('comments');
    }

    /**
     * Display the relationship data in custom column(user_comments).
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomUserComments($user)
    {
        return $user->comments->implode('content', ',');
    }

    /**
     * Adds the condition for searching the User comment.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchUserComments($query, $searchValue)
    {
        return $query->orWhereHas('comments', function ($query) use ($searchValue) {
            $query->where('content', 'like', "%". $searchValue ."%");
        });
    }

    /**
     * Display currency symbol with format in salary column.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesSalary($user)
    {
        return "$".number_format($user->salary);
    }

    /**
     * Adds the condition for searching the salary if custom/modify for display.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchSalary($query, $searchValue)
    {
        if ($searchSalary = preg_replace('/[^A-Za-z0-9\-]/', '', $searchValue)) {
            return $query->orWhere('salary', 'like', '%'. $searchSalary. '%');
        }

        return $query;
    }

    /**
     * Returns the first_name & last_name value in Name column for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomName($user)
    {
        return $user->first_name. ' ' .$user->last_name;
    }

    /**
     * Additional merged columns to be loaded for datatables.
     *
     * @return array
     */
    public static function laratablesAdditionalColumns()
    {
        return ['first_name', 'last_name'];
    }

    /**
     * First_name column should be used for sorting when Name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'first_name';
    }

    /**
     * Searching the user(column merged) in the query.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @param \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchName($query, $searchValue)
    {
        return $query->orWhere('first_name', 'like', '%'. $searchValue. '%')
            ->orWhere('last_name', 'like', '%'. $searchValue. '%')
        ;
    }
}
