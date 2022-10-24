<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congregation extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'congregation_status_id',
        // 'parent_id',
        // 'partner_id',
        // 'family_status_id',
        // 'sex'
    ];

    // public function getAllCongregation(){
    //     return $this->hasOne('App\Models\Congregation');
    // }

    // public function parent_id()
    // {
    //     return $this->hasOne('App\Models\Congregation', 'parent_id');
    // }
    // public function partner_id()
    // {
    //     return $this->hasOne('App\Models\Congregation', 'partner_id');
    // }

    public function CongregationStatus()
    {
        return $this->belongsTo('App\Models\CongregationStatus', 'congregation_status_id','id');
    }

    // public function FamilyStatus()
    // {
    //     return $this->belongsTo('App\Models\FamilyStatus', 'family_status_id','id');
    // }

}
