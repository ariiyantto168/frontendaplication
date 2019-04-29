<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'categories';
    protected $primaryKey = 'idcategories';

    protected $fillable = [
        'name',
    ];

    public function Items()
    {
        return $this->hasMany('App\Models\Items', 'idcategories');
    }

}
