<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable =['empleado_dni','empleado_nombre','empleado_apellido','empleado_telefono'];

    public function doctor()
    {
        return $this->hasOne('App\Models\Doctor');
    }
}
