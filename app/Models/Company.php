<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 *
 * @package App
 * @property string $name
 * @property string $email
 * @property string $logo
 * @property string $website
*/
class Company extends Model
{
    protected $fillable = ['name', 'email', 'logo', 'website'];
    protected $hidden = [];
    
    
    
}
