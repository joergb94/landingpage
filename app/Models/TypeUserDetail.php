<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeUserDetail extends Model
{
    protected $guarded=[];
    use SoftDeletes;
    use HasFactory;

    public function type_users()
    {
        return $this->belongsTo('App\Models\TypeUser','type_user_id','id');
    }

    public function data_menu()
    {
        return $this->belongsTo('App\Models\DataMenu','data_menu_id','id');
    }


   /**
     * @return bool
     */
    public function isActive()
    {
        return $this->status;
    }

    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('active', $status);
    }
}
