<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable=['empleado_id','especialidad_id'];

    public function empleado()
    {
        return $this->belongsTo('App\Models\Empleado','empleado_id');
    }

}
