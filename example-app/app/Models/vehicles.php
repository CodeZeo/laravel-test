<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vehicles extends Model
{
    use SoftDeletes;
    protected $table = 'vehicles';
    protected $fillable = ['marca', 'modelo', 'año','precio'];

    public function users()
    {
        return $this->belongsTo(users::class);
    }
    public function historicals()
    {
        return $this->hasMany(historical::class);
    }
}
