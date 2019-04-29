<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accepted extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'accepteds';
    protected $primaryKey = 'idaccepted';

    public function users()
    {
        return $this->belongsTo('App\Models\User','iduser' );
    }

}