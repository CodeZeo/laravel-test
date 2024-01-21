<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class users extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = ['nombre', 'apellidos', 'correo'];

    public function vehicles()
    {
        return $this->hasMany(vehicles::class);
    }
    public function historicals()
    {
        return $this->hasMany(historical::class);
    }
}
