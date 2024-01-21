<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class historical extends Model
{
    use SoftDeletes;
    protected $table = 'historicals';

    public function users()
    {
        return $this->belongsTo(users::class);
    }
    public function vehicles()
    {
        return $this->belongsTo(vehicles::class);
    }
}
