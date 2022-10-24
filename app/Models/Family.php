<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id',
        'relative_id',
        'family_status_id',
        'is_head_of_family'
    ];

    public function person_id()
    {
        return $this->belongsTo('App\Models\Congregation', 'person_id','id');
    }

    public function relative_id()
    {
        return $this->belongsTo('App\Models\Congregation', 'relative_id','id');
    }

    public function FamilyStatus()
    {
        return $this->belongsTo('App\Models\FamilyStatus', 'family_status_id','id');
    }
}
