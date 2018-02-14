<?php
namespace api\models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * Turn off the created_at & updated_at columns
     * @var boolean
     */
    public $timestamps = false;

    /**
     * Fields that are mass assignable
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'fname', 'lname'
    ];

    /**
     * Fields that are hidden
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
