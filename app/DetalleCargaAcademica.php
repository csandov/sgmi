<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalleCargaAcademica extends Model
{
    use SoftDeletes;
    //
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user')->withTrashed();
    }
}
