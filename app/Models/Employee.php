<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @package App
 * @property string $f_name
 * @property string $l_name
 * @property string $email
 * @property string $phone
 * @property string $cid
*/
class Employee extends Model
{
    protected $fillable = ['f_name', 'l_name', 'email', 'phone', 'cid_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCidIdAttribute($input)
    {
        $this->attributes['cid_id'] = $input ? $input : null;
    }
    
    public function cid()
    {
        return $this->belongsTo(Company::class, 'cid_id');
    }
    
}
