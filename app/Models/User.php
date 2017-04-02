<?php
/**
 * Created by PhpStorm.
 * User: owais
 * Date: 02/04/17
 * Time: 06:58 م
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model as Model;

class User extends Model
{
    protected $fillable = ['name','email'];
    //protected $table = "users";

}